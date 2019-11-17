<?php


namespace Obiefy\Contact\Tests;

use Illuminate\Support\Facades\Mail;
use Obiefy\Contact\Mail\ContactMail;

class ContactMailTest extends TestCase {


    /** @test */
    public function it_sends_email_to_website_owner()
    {
        $this->withoutExceptionHandling();
        $this->post(route('contact.handle'), $this->getAttributes());
        Mail::assertSent(ContactMail::class);
    }

    /** @test */
    public function it_sends_email_to_specific_email_address()
    {
        $this->withoutExceptionHandling();
        Mail::fake();
        $this->post(route('contact.handle'), $this->getAttributes());
        Mail::assertSent(ContactMail::class);
    }
}
