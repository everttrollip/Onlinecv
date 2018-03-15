<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;
use Carbon\Carbon;
use App\Message;
use App\User;
use DB;
use Illuminate\Database\QueryException;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

       //Return message view
       public function getMessageView(){
            $msglist = [];
            $threads_joined = DB::table('messenger_participants')
            ->join('messenger_threads', 'messenger_threads.id', '=', 'messenger_participants.thread_id')
            ->where('messenger_participants.user_id', '=', Auth::user()->id)
            ->latest('messenger_threads.date_added')
            ->get();

            $msglist =  json_encode($threads_joined);
           return view('shared.messages')->with('messages', $msglist);
       }

       public function getMyThreads(){
        $msglist = [];
        try{
            $threads_joined = DB::table('messenger_participants')
            ->where('messenger_participants.user_id', '=', Auth::user()->id)
            ->get();

            foreach($threads_joined as $conversation){
                if($conversation->last_read){
                    $messages = DB::table('messenger_messages')
                        ->where('messenger_messages.thread_id', '=', $conversation->thread_id)
                        ->where('messenger_messages.created_at', '>', $conversation->last_read)
                        ->first();
                        array_push($msglist,$messages);
                }else{
                    $messages = DB::table('messenger_messages')
                        ->where('messenger_messages.thread_id', '=', $conversation->thread_id)
                        ->first();
                        array_push($msglist,$messages);
                }
            }
        }catch(\QueryException $e){
            return $e;
        }
        return json_encode($msglist);
    }

    //Return view to view message history with all replies
    public function viewHistory($id){
        $now = Carbon::now('Africa/Johannesburg')->toDateTimeString();

        $messages = DB::table('messenger_messages')
        ->join('messenger_threads', 'messenger_threads.id', '=', 'messenger_messages.thread_id')
        ->join('users', 'users.id' ,'=', 'messenger_messages.user_id')
        ->distinct('messenger_messages.id')
        ->where('messenger_messages.thread_id', '=' , $id)
        ->orderBy('messenger_messages.created_at', 'ASC')
        ->select('messenger_messages.*', 'users.firstname', 'users.lastname')
        ->get();

            DB::table('messenger_participants')
            ->where('user_id', '=', Auth::user()->id)
            ->where('thread_id' , '=', $id)
            ->update([
                'last_read' => $now
            ]);

        return view('shared.message-history')->with('mainmessage', $messages);
    }

     //Reply to message
     public function reply(Request $request){

        $message = $request->message[0];
        $thread_id = $message['thread_id'];
        $type = $request->type;
        $now = Carbon::now('Africa/Johannesburg');
        try{
            DB::beginTransaction();
                $message_row = DB::table('messenger_messages')->insert([
                        'user_id' => Auth::user()->id,
                        'body' => $request->reply_msg,
                        'type' => $type,
                        'thread_id' =>$thread_id,
                        'created_at' => $now
                ]);

                DB::commit();

                $sender = Auth::user()->id;
                $receiver = DB::table('messenger_participants')
                    ->where('user_id', '<>', Auth::user()->id)
                    ->where('thread_id', '=', $thread_id)
                    ->first();
                $receiver_id = $receiver->id;

            broadcast(new MessageSent($sender));

            return array('success' => true);
       }catch(\QueryException $e){
            DB::rollBack();
            return array('success' => false, 'error_message' => $e);
       }
    }

    //Return all unread messages
    public function getAllUnread(){
        $msglist = [];
        try{
            $threads_joined = DB::table('messenger_participants')
            ->where('messenger_participants.user_id', '=', Auth::user()->id)
            ->get();

            foreach($threads_joined as $conversation){
                if($conversation->last_read != null){
                    $messages = DB::table('messenger_messages')
                        ->where('messenger_messages.thread_id', '=', $conversation->thread_id)
                        ->where('messenger_messages.created_at', '>', $conversation->last_read)
                        ->first();
                        array_push($msglist,$messages);
                }else{
                    $messages = DB::table('messenger_messages')
                        ->where('messenger_messages.thread_id', '=', $conversation->thread_id)
                        ->first();
                        array_push($msglist,$messages);
                }
            }
        }catch(\QueryException $e){
            return $e;
        }
        return json_encode($msglist);
    }

    //Return latest messages in this thread after reply etc
    public function getThreadLatestMessages($id){

        $messages = DB::table('messenger_messages')
        ->join('messenger_threads', 'messenger_threads.id', '=', 'messenger_messages.thread_id')
        ->join('users', 'users.id' ,'=', 'messenger_messages.user_id')
        ->distinct('messenger_messages.id')
        ->where('messenger_messages.thread_id', '=' , $id)
        ->get();

        return array('messages' => $messages);
    }

    //Send Message to student
    public function sendMessageToStudent(Request $request){
        $receiver_id = $request->student['user_id'];
        $sender_id = Auth::user()->id;
        $message = $request->message;
        $title = $request->title;

        $now = Carbon::now('Africa/Johannesburg');
        try{
            DB::beginTransaction();

                $thread = DB::table('messenger_threads')->insertGetId([
                    'title' => $title,
                    'date_added' => $now,
                    'created_at' => $now
                ]);

                $message = DB::table('messenger_messages')->insert([
                    'user_id' => Auth::user()->id,
                    'body' => $message,
                    'type' => 'Message',
                    'created_at' => $now,
                    'thread_id' =>$thread
                ]);
                $participants = DB::table('messenger_participants')->insert([
                    'user_id' => Auth::user()->id,
                    'thread_id' => $thread,
                    'last_read' => $now,
                    'created_at' => $now,
                ]);
                $participants = DB::table('messenger_participants')->insert([
                    'user_id' =>$receiver_id,
                    'thread_id' => $thread,
                    'created_at' => $now,

                ]);
                DB::commit();
            return array('success' => true);
        }catch (QueryException $e) {
            DB::rollBack();
            return array('success' => false , 'error' => $e);
        }
    }

    //Send a message from student to administrator
    public function sendMessageFromStudentToAdmin(Request $request){
        $title = $request->title;
        $message = $request->message;
        $receiver_id = $request->admin['user_id'];
        $sender_id = Auth::user()->id;
        $now = Carbon::now('Africa/Johannesburg');
        try{
            DB::beginTransaction();

                $thread = DB::table('messenger_threads')->insertGetId([
                    'title' => $title,
                    'date_added' => $now,
                    'created_at' => $now
                ]);

                $message = DB::table('messenger_messages')->insert([
                    'user_id' => Auth::user()->id,
                    'body' => $message,
                    'type' => 'Message',
                    'created_at' => $now,
                    'thread_id' =>$thread
                ]);
                $participants = DB::table('messenger_participants')->insert([
                    'user_id' => Auth::user()->id,
                    'thread_id' => $thread,
                    'last_read' => $now,
                    'created_at' => $now,
                ]);
                $participants = DB::table('messenger_participants')->insert([
                    'user_id' =>$receiver_id,
                    'thread_id' => $thread,
                    'created_at' => $now,

                ]);
                DB::commit();
            return array('success' => true);
        }catch (QueryException $e) {
            DB::rollBack();
            return array('success' => false , 'error' => $e);
        }
    }

}
