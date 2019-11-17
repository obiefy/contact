<?php


namespace Obiefy\Contact\Models;


use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model {

    protected $fillable = ['name', 'email', 'subject', 'body'];
}