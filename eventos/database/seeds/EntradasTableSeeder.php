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
            'id' => '12',
            'cod_evento' => '1',
            'tipoEntrada' => '1',
            'validacion' => 'false',
            'informacion' => 'Entrada completa para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '13',
            'cod_evento' => '1',
            'tipoEntrada' => '2',
            'validacion' => 'false',
            'informacion' => 'Entrada media para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '14',
            'cod_evento' => '1',
            'tipoEntrada' => '3',
            'validacion' => 'false',
            'informacion' => 'Entrada día para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '15',
            'cod_evento' => '2',
            'tipoEntrada' => '1',
            'validacion' => 'false',
            'informacion' => 'Entrada completa para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '16',
            'cod_evento' => '2',
            'tipoEntrada' => '2',
            'validacion' => 'false',
            'informacion' => 'Entrada media para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '17',
            'cod_evento' => '2',
            'tipoEntrada' => '3',
            'validacion' => 'false',
            'informacion' => 'Entrada día para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '18',
            'cod_evento' => '3',
            'tipoEntrada' => '1',
            'validacion' => 'false',
            'informacion' => 'Entrada completa para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '19',
            'cod_evento' => '3',
            'tipoEntrada' => '2',
            'validacion' => 'false',
            'informacion' => 'Entrada media para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '20',
            'cod_evento' => '3',
            'tipoEntrada' => '3',
            'validacion' => 'false',
            'informacion' => 'Entrada día para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '21',
            'cod_evento' => '4',
            'tipoEntrada' => '1',
            'validacion' => 'false',
            'informacion' => 'Entrada completa para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '22',
            'cod_evento' => '4',
            'tipoEntrada' => '2',
            'validacion' => 'false',
            'informacion' => 'Entrada media para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '23',
            'cod_evento' => '4',
            'tipoEntrada' => '3',
            'validacion' => 'false',
            'informacion' => 'Entrada día para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '24',
            'cod_evento' => '5',
            'tipoEntrada' => '1',
            'validacion' => 'false',
            'informacion' => 'Entrada completa para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '25',
            'cod_evento' => '5',
            'tipoEntrada' => '2',
            'validacion' => 'false',
            'informacion' => 'Entrada media para el festival'
        ]);
        DB::table('entradas')->insert([
            'id' => '26',
            'cod_evento' => '5',
            'tipoEntrada' => '3',
            'validacion' => 'false',
            'informacion' => 'Entrada día para el festival'
        ]);

        
    }
}
