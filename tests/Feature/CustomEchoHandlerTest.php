<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomEchoHandlerTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "Miftah";
        $person->address = "Bogor";

        $this->view('echo', ['person'   => $person])
            ->assertSeeText("Miftah : Bogor");
    }
}
