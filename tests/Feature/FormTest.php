<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', ['user' => [
            "premium"   => true,
            "name"  => "Miftah",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Miftah")
            ->assertDontSee("readonly");
    }
}
