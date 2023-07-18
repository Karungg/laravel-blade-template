<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view('include-condition', ['user'    => [
            "name"  => "Miftah",
            "owner" => true
        ]])
            ->assertSeeText("Selamat datang owner")
            ->assertSeeText("Untuk melihat laporan penjualan, silahkan buka menu laporan")
            ->assertSeeText("Selamat datang Miftah");

        $this->view('include-condition', ['user'    => [
            "name"  => "Gadis",
            "owner" => false
        ]])
            ->assertDontSeeText("Selamat datang owner")
            ->assertDontSeeText("Untuk melihat laporan penjualan, silahkan buka menu laporan")
            ->assertSeeText("Selamat datang Gadis");
    }
}
