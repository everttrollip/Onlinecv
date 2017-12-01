<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class ActivateAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $activate_token;

    public function __construct(User $user, $activate_token)
    {
        $this->user = $user;
        $this->activate_token = $activate_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.activate-account')
        ->with('user', $this->user)
        ->with('activate_token', $this->activate_token);
    }
}
