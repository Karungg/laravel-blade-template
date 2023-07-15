<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')
            ->assertSeeText("Hello Miftah Fadilah");
    }

    public function testWorld()
    {
        $this->get('/hello/world')
            ->assertSeeText("World");
    }

    public function testViewWithoutRoute()
    {
        $this->view('hello', ['name'    => "Miftah Fadilah"])
            ->assertSeeText("Miftah Fadilah");
    }
}
