<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class phpTest extends TestCase
{
    public function testPhp()
    {
        $this->view('php', [])
            ->assertSeeText("Miftah")
            ->assertSeeText("Bogor");
    }
}
