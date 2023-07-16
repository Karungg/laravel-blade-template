<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForeachTest extends TestCase
{
    public function testForeach()
    {
        $this->view('foreach', ['hobbies'   => ['Gaming', 'Mancing']])
            ->assertSeeText("Gaming")
            ->assertSeeText("Mancing");
    }
}
