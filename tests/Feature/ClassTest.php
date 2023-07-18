<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function testClass()
    {
        $this->view('class', ['hobbies' => [
            [
                'name'  => 'Gaming',
                'love'  => true
            ],
            [
                'name'  => 'Mancing',
                'love'  => false
            ]
        ]])
            ->assertSee('<li class="red bold">Gaming</li>', false)
            ->assertSee('<li class="red">Mancing</li>', false);
    }
}
