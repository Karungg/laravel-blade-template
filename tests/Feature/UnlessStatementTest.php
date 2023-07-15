<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessStatementTest extends TestCase
{
    public function TestUnlessStatement()
    {
        $this->view('unless', ['isAdmin'    => true])
            ->assertDontSeeText("You are not admin");

        $this->view('unless', ['isAdmin'    => false])
            ->assertSeeText("You are not admin");
    }
}
