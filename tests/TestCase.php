<?php

namespace Obiefy\Contact\Tests;

use Obiefy\Contact\ContactServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase {

    public function getPackageProviders($application)
    {
        return [ContactServiceProvider::class];
    }

    protected function getAttributes($except = [])
    {
        $attributes = [
            'name' => 'Obay Dev',
            'email' => 'obay@obay-dev.com',
            'message' => 'Support Message',
            'body' => 'Support Message Body',
            'validator' => 17
        ];

        return array_merge($attributes, $except);
    }


}
