<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForElseTest extends TestCase
{
    public function testForElse()
    {
        $this->view('forelse', ['hobbies'   => []])
            ->assertSeeText("I dont have hobby");

        $this->view('forelse', ['hobbies'   => ['Gaming', 'Mancing']])
            ->assertSeeText("Gaming")
            ->assertSeeText("Mancing")
            ->assertDontSeeText("I dont have hobby");
    }
}
