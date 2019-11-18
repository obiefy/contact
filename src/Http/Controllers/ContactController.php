<?php


namespace Obiefy\Contact\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Obiefy\Contact\Mail\ContactMail;
use Obiefy\Contact\Models\ContactMessage;
use Obiefy\Contact\Requests\StoreContactMessageRequest;

class ContactController {

    public function __construct()
    {
    }

    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
            'validator' => 'required|in:17'
        ]);

        $message = ContactMessage::make($request->all());

        Mail::to(config('contact.email'))
            ->send(new ContactMail());

        if(config('contact.store')){
            $message->save();
        }

        return response()->json();
    }


}
