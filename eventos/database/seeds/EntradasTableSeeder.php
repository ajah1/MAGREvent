<?php

use Illuminate\Database\Seeder;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas')->insert([
            'id' => '12345',
            'cod_evento' => '1',
            'tipoEntrada' => '1',
            'validacion' => 'false',
            'informacion' => 'Entrada completa para el festival'
        ]);

        DB::table('entradas')->insert([
            'id' => '123456',
            'cod_evento' => '2',
            'tipoEntrada' => '2',
            'validacion' => 'true',
            'informacion' => 'Entrada para disfrutar de medio festival'
        ]);

        DB::table('entradas')->insert([
            'id' => '1234567',
            'cod_evento' => '3',
            'tipoEntrada' => '3',
            'validacion' => 'false',
            'informacion' => 'Entrada de dia para el festival de benidorm'
        ]);
    }
}
