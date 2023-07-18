<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateInheritanceTest extends TestCase
{
    public function testChild()
    {
        $this->view('child', [])
            ->assertSeeText('Nama Aplikasi - Halaman Utama')
            ->assertSeeText('Deskripsi Header')
            ->assertSeeText('Ini adalah halaman utama');
    }

    public function testParent()
    {
        $this->view('child', [])
            ->assertSeeText('Nama Aplikasi - Halaman Utama')
            ->assertSeeText('Header default')
            ->assertSeeText('Deskripsi Header')
            ->assertSeeText('Ini adalah halaman utama')
            ->assertDontSeeText('Content default');
    }
}
