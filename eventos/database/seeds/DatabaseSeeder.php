<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsuariosTableSeeder::class);
         $this->call(EventosTableSeeder::class);
         $this->call(ReservasTableSeeder::class);
         $this->call(TiposTableSeeder::class);
         $this->call(EntradasTableSeeder::class);
    }
}
