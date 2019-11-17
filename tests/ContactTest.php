<?php


namespace Obiefy\Contact\Tests;


use Obiefy\Contact\Contact;

class ContactTest extends TestCase {

    /** @test */
    public function it_can_be_rendered()
    {
        $this->assertEquals(view('contact::form')->render(), Contact::render());
    }



}