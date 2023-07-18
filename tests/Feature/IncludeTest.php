<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include', [])
            ->assertSeeText("Programmer Zaman Now")
            ->assertSeeText("Selamat datang di website kami")
            ->assertSeeText("Selamat datang di web");

        $this->view('include', ['title' => "Miftah"])
            ->assertSeeText("Miftah")
            ->assertSeeText("Selamat datang di website kami")
            ->assertSeeText("Selamat datang di web");
    }
}
