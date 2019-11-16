<?php

namespace Obiefy\Facades\Contact;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Obiefy\Contact\Contact
 */
class Contact extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contact';
    }
}
