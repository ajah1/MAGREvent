<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'dni' => '21212121KK',
                'name' => 'Javier',
                'apellidos' => 'Monllor Alcaraz',
                'email'=> 'jma86@alu.ua.es',
                'edad' => '21',
                'direccion' => 'C/Alacant',
                'tipo' => 'A',
                'username' => 'jma86',
                'password' => 'jma86'
            ]);
    
            DB::table('users')->insert([
                'dni' => '2222222KK',
                'name' => 'Alejandro',
                'apellidos' => 'Aliaga Hyder',
                'email'=> 'ajah1@alu.ua.es',
                'edad' => '20',
                'direccion' => 'C/La Huerta',
                'tipo' => 'A',
                'username' => 'ajah1',
                'password' => 'ajah1'
            ]);

            DB::table('users')->insert([
                'id' => '3',
                'dni' => '3333333KK',
                'name' => 'Alvaro',
                'apellidos' => 'Girones Garcia',
                'email'=> 'gg52@alu.ua.es',
                'edad' => '26',
                'direccion' => 'C/La caseta de Tibi',
                'tipo' => 'A',
                'username' => 'gg52',
                'password' => 'gg52'
            ]);

            DB::table('users')->insert([
                'id' => '4',
                'dni' => '4444444KK',
                'name' => 'Juan',
                'apellidos' => 'Ruiz de Larrea Aracil',
                'email'=> 'jrl12@alu.ua.es',
                'edad' => '29',
                'direccion' => 'C/Capitan Gral Gutierrez Mellado',
                'tipo' => 'A',
                'username' => 'jrl12',
                'password' => 'jrl12'
            ]);

            DB::table('users')->insert([
                'id' => '5',
                'dni' => '5555555KK',
                'name' => 'Manuel',
                'apellidos' => 'Morote',
                'email'=> 'mmg1@alu.ua.es',
                'edad' => '22',
                'direccion' => 'Av. de las naciones',
                'tipo' => 'U',
                'username' => 'mmg1',
                'password' => 'mmg1'
            ]);

            DB::table('users')->insert([
                'id' => '6',
                'dni' => '6666666KK',
                'name' => 'Fermin',
                'apellidos' => 'Aliaga Hyder',
                'email'=> 'fah12@alu.ua.es',
                'edad' => '22',
                'direccion' => 'C/La huerta',
                'tipo' => 'U',
                'username' => 'fah12',
                'password' => 'fah12'
            ]);
            
        
    }
}
