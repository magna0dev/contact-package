<?php

namespace Magna\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable {

    use Queueable,
        SerializesModels;

    public $message;
    public $name;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name, $email) {
        //

        $this->message = $message;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments() {
        return [];
    }

    public function build() {
        return $this->markdown('contact::contact.email')->with([
                    'message' => $this->message,
                    'name' => $this->name,
                    'email' => $this->email
        ]);
    }

}
