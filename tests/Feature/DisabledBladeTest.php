<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledBladeTest extends TestCase
{
    public function testDisabledBlade()
    {
        $this->view('disabled', ["name"  => "Miftah Fadilah"])
            ->assertDontSeeText("Miftah")
            ->assertSeeText('Hello {{ $name }}');
    }
}
