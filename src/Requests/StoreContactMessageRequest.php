<?php


namespace Obiefy\Contact\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest {

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
            'validator' => 'required|in:17'
        ];
    }
}