<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    public function testForLoop()
    {
        $this->view('forloop', ['limit' => 10])
            ->assertSeeText("0")
            ->assertSeeText("5")
            ->assertSeeText("9");
    }
}
