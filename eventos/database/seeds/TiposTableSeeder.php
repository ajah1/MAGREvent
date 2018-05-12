<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            'tipo_entrada' => 'completa',
            'precio' => '100'
        ]);

        DB::table('tipos')->insert([
            'tipo_entrada' => 'media',
            'precio' => '50'
        ]);

        DB::table('tipos')->insert([
            'tipo_entrada' => 'dia',
            'precio' => '30'
        ]);

        DB::table('tipos')->insert([
            'tipo_entrada' => 'cine3D',
            'precio' => '12'
        ]);

        DB::table('tipos')->insert([
            'tipo_entrada' => 'cineNormal',
            'precio' => '7'
        ]);
    }
}
