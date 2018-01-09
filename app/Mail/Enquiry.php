<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $enquiry;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $enquiry, $subject)
    {
        $this->user = $user;
        $this->enquiry = $enquiry;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.enquiry')->with('user', $this->user)->with('enquiry', $this->enquiry)->with('subject', $this->subject);
    }
}
