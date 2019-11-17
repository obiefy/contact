<?php

namespace Obiefy\Contact\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Mail;
use Obiefy\Contact\ContactServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase {

    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        Mail::fake();
    }

    public function getPackageProviders($application)
    {
        return [ContactServiceProvider::class];
    }

    protected function getAttributes($except = [])
    {
        $attributes = [
            'name' => 'Obay Dev',
            'email' => 'obay@obay-dev.com',
            'subject' => 'Support Message',
            'body' => 'Support Message Body',
            'validator' => 17
        ];

        return array_merge($attributes, $except);
    }


}
