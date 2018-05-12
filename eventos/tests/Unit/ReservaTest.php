<?php

namespace Tests\Unit;

use App\cliente;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class ReservaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        
	$com = DB::table('reserva')->select('*')->where('id_cliente', 2222222) ->first();
	$cliente = cliente::where('dni', 2222222)->first();
	$this->assertEquals($com->id_cliente, $cliente->dni);

	
    }
}
