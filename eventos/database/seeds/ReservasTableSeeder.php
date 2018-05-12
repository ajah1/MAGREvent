<?php

use Illuminate\Database\Seeder;

class ReservasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservas')->insert([
            'id' => '123',
            'id_cliente' => '1',
            'id_evento' => '1',
            'cod_barras' => '6546545',
            'descripcion' => 'vip'
        ]);
        
        DB::table('reservas')->insert([
            'id' => '1234',
            'id_cliente' => '2',
            'id_evento' => '2',
            'cod_barras' => '35475',
            'descripcion' => 'estandar'
        ]);

        DB::table('reservas')->insert([
            'id' => '1234',
            'id_cliente' => '4',
            'id_evento' => '1',
            'cod_barras' => '35475',
            'descripcion' => 'estandar'
        ]);

        DB::table('reservas')->insert([
            'id' => '1234',
            'id_cliente' => '6',
            'id_evento' => '2',
            'cod_barras' => '35475',
            'descripcion' => 'estandar'
        ]);
    }
}
