<?php


namespace Obiefy\Contact\Http\Controllers;


class ContactController {

    public function __invoke()
    {
        if($errors = $this->validate()){
            return $errors;
        }

        return "OK";
    }

    public function validate()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
            'validator' => 'required|in:17'
        ]);
    }

}
