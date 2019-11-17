<?php


namespace Obiefy\Contact\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Obiefy\Contact\Mail\ContactMail;
use Obiefy\Contact\Models\ContactMessage;
use Obiefy\Contact\Requests\StoreContactMessageRequest;

class ContactController {

    public function __invoke(StoreContactMessageRequest $request)
    {
        Mail::send(new ContactMail());

        if(config('contact.store')){
            ContactMessage::create(request()->only(['name', 'email', 'subject', 'body']));
        }
        return response()->json();
    }


}
