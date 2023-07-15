<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    public function TestIfStatement()
    {
        $this->view('if', [])
            ->assertSeeText("I dont have any hobby!");

        $this->view('if', ['hobbies'    => "Coding"])
            ->assertSeeText("I have one hobby!");

        $this->view('if', ['hobbies'    => "Coding", "Gaming"])
            ->assertSeeText("I have multiple hobbies!");
    }
}
