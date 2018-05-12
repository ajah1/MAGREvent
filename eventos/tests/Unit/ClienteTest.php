<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('clientes', ['correo'=> 'per@alu.es']);
	$this->assertDatabaseHas('clientes', ['dni' => '21212121']);
	$this->assertDatabaseHas('clientes', ['dni' => '2222222']);
    }
}
