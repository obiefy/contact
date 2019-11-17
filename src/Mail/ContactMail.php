<?php


namespace Obiefy\Contact\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable {

    use SerializesModels;

    public function build()
    {
        $this->subject('Subject')
            ->markdown('contact::mails.mail');
    }
}
