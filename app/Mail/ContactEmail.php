<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $firstname;
    public $lastname;
    public $email;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->firstname = $data['first_name'];
        $this->lastname = $data['last_name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contact');
    }
}
