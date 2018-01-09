<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\User;
use DB;

class MessageController extends Controller
{
    //send a message from administrator to student
    public function sendToStudent(Request $request){
        $message = $request->message;
        $student_id = $request->student_id;
        $sender_id = Auth::user()->id;
        $receiver = DB::table('students')->where('id', '=', $student_id)->first();
        $receiver_id = $receiver->user_id;
        $result =  $this->sendMessage($message, $receiver_id, $sender_id,  'administrator', 'student');
        if($result){
            return array('success'=>true);
        }else{
            return array('success'=>false);
        }
    }

    public function sendMessage($message, $receiver_id, $sender_id, $sender, $receiver){
        $message_row = Message::create([
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'sender' => $sender,
            'receiver' => $receiver,
            'message' => $message
        ]);
        return $message_row;
    }

    //Retrieve user's messages
    public function getMyMessages(){
        $user_id = Auth::user()->id;
        $messages = Message::where('receiver_id', '=', $user_id)->get();
        $count = Message::where('receiver_id', '=', $user_id)->count();
        //unread
        $unread = Message::where('receiver_id', '=', $user_id)->where('read', '=', 0)->get();
        $unreadCount= Message::where('receiver_id', '=', $user_id)->where('read', '=', 0)->count();
        return array('success'=>true, 'messages' =>$messages, 'count'=> $count, 'unread_messages' => $unread, 'unread_count' => $unreadCount);
    }

    //Navigate to the user's inbox
    public function getMyInbox(){
        $user_id = Auth::user()->id;
        $role = Auth::user()->role;
        $messages = Message::where('receiver_id', '=', $user_id)->get();
        return view('shared.inbox')->with('messages', $messages);
    }

    //Mark message as read
    public function markAsRead($message_id){
        $user_id = Auth::user()->id;
        $message = Message::where('id', '=', $message_id)->update([
            'read' => 1
        ]);
        $messages = Message::where('receiver_id', '=', $user_id)->get();
        if($message){
            return array('success' => true, 'messages' => $messages);
        }
    }
}
