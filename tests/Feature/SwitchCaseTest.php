<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchCaseTest extends TestCase
{
    public function testSwitchCase()
    {
        $this->view('switchcase', ["nilai"  => 'A'])
            ->assertSeeText("Memuaskan");

        $this->view('switchcase', ["nilai"  => 'B'])
            ->assertSeeText("Bagus");

        $this->view('switchcase', ["nilai"  => 'C'])
            ->assertSeeText("Cukup");

        $this->view('switchcase', ["nilai"  => 'D'])
            ->assertSeeText("Tidak Lulus");
    }
}
