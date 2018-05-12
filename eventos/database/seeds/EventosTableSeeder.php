<?php

use Illuminate\Database\Seeder;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'nombre' => 'Low Cost Festival',
            'fecha_inicio' => '20/6/2018',
            'fecha_fin'=> '24/6/2018',
            'direccion' => 'Polideportivo Campoamor Benidorm',
            'imagen' => '1.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Viña Rock',
            'fecha_inicio' => '28/5/2018',
            'fecha_fin'=> '2/6/2018',
            'direccion' => 'Villarobledo',
            'imagen' => '2.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Festivern',
            'fecha_inicio' => '28/12/2018',
            'fecha_fin'=> '1/1/2019',
            'direccion' => 'Tavernes de la valldigna',
            'imagen' => '3.jpeg'
        ]);
    }
}
