<?php


namespace Obiefy\Contact\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable {

    use SerializesModels;

    public function build()
    {
        $this->from('sender@obay-dev.com')
            ->to('reciever@obay-dev.com')
            ->subject('Message Subject')
            ->markdown('contact::mails.mail');
    }
}
