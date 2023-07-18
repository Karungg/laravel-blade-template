<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachOnceTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', ['users'    => [
            [
                'name'  => "Miftah",
                'hobbies'   => ['Gaming', 'Mancing']
            ],
            [
                'name'  => "Gadis",
                'hobbies'   => ['Membaca', 'Memasak']
            ]
        ]])
            ->assertSeeInOrder(['.red', 'Miftah', 'Gaming', 'Mancing', 'Gadis', 'Membaca', 'Memasak']);
    }
}
