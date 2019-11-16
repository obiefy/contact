<?php


namespace Obiefy\Contact\Tests;


class ContactMessageTest extends TestCase {

    /** @test */
    public function it_required_message_name()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['name' => '']))
            ->assertSessionHasErrors('name');
    }

    /** @test */
    public function it_required_message_email()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['email' => '']))
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function it_required_valid_message_email()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['email' => 'obay-dev']))
            ->assertSessionHasErrors('email');
    }

    /** @test */
    public function it_required_message_subject()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['subject' => '']))
            ->assertSessionHasErrors('subject');
    }

    /** @test */
    public function it_required_message_body()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['body' => '']))
            ->assertSessionHasErrors('body');
    }

    /** @test */
    public function it_required_message_validator()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['validator' => '']))
            ->assertSessionHasErrors('validator');
    }

    /** @test */
    public function it_required_valid_message_validator()
    {
        $this->post(route('contact.handle'), $this->getAttributes(['validator' => 5]))
            ->assertSessionHasErrors('validator');
    }
}
