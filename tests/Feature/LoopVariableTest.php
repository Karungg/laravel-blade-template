<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    public function testLoopVariable()
    {
        $this->view('loopvariable', ['hobbies'  => ['Gaming', 'Mancing']])
            ->assertSeeText("1. Gaming")
            ->assertSeeText("2. Mancing");
    }
}
