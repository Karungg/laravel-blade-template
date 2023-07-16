<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view('issetempty', [])
            ->assertDontSeeText("Hello my name is Miftah", false)
            ->assertSeeText("I dont have any hobby", false);

        $this->view('issetempty', ['name'   => "Miftah Fadilah"])
            ->assertSeeText("Hello my name is Miftah Fadilah", false)
            ->assertSeeText("I dont have any hobby", false);

        $this->view('issetempty', ['name'   => "Syalwa", 'hobbies'  => ["Gaming"]])
            ->assertSeeText("Hello my name is Syalwa", false)
            ->assertDontSeeText("I dont have any hobby", false);
    }
}
