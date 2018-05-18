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
            'fecha_inicio' => '27/6/2018',
            'fecha_fin'=> '29/6/2018',
            'direccion' => 'Estadio Municipal Guillermo Amor, Benidorm',
            'imagen' => '1.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Viña Rock',
            'fecha_inicio' => '27/4/2018',
            'fecha_fin'=> '30/4/2018',
            'direccion' => 'Villarrobledo, Albacete',
            'imagen' => '2.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Festivern',
            'fecha_inicio' => '29/12/2018',
            'fecha_fin'=> '29/12/2018',
            'direccion' => 'Alicante',
            'imagen' => '3.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Salón Erótico',
            'fecha_inicio' => '3/9/2018',
            'fecha_fin'=> '6/9/2018',
            'direccion' => 'Avenida Principal, 16, 28011 Madrid',
            'imagen' => '4.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Mobile World Congress',
            'fecha_inicio' => '26/2/2018',
            'fecha_fin'=> '1/3/2018',
            'direccion' => '28011 Madrid (Casa de Campo)',
            'imagen' => '5.jpeg'
        ]);
    }
}
