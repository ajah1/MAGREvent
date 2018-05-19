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
            'descripcion' => 'En Low Festival trabajamos para que disfrutes de un festival 
            absolutamente lover. Lover porque encontrarás todo lo que amas: una programación de infarto con las mejores bandas y 
            DJs del panorama nacional e internacional; amplias y cómodas infraestructuras; zonas verdes de relax y piscina; restauración internacional 
            con opción vegetariana, cerveza para celiacos y sin alcohol… Disfruta de los cuatro escenarios principales
             del festival, con alternativas de distintos géneros musicales y propuestas artísticas, 
             y en los que nunca sufrirás solapes de más de 15 minutos entre los dos escenarios más grandes.',
            'imagen' => '1.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Viña Rock',
            'fecha_inicio' => '28/4/2018',
            'fecha_fin'=> '30/4/2018',
            'descripcion' => 'El Festival de Arte Nativo Viña Rock es un festival 
            musical español organizado anualmente el fin de semana previo al 1 de mayo. 
            Desde sus inicios en 1996 se han celebrado en la ciudad albaceteña de 
            Villarrobledo 17 ediciones consecutivas.',
            'imagen' => '2.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Festivern',
            'fecha_inicio' => '29/12/2018',
            'fecha_fin'=> '31/12/2018',
            'descripcion' => 'Festivern trae artistas en pleno auge este año como 
            Xavi Sarrià, Txarango, Zoo, Dakidarria, Smoking Souls, que son solo unos de los más de 40 
            grupos que pisarán Tavernes de la Valldinga del 29 al 31 de Diciembre.',
            'imagen' => '3.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Salón Erótico',
            'fecha_inicio' => '3/9/2018',
            'fecha_fin'=> '6/9/2018',
            'descripcion' => 'El Festival Erótico de Madrid o Exposex es un festival internacional 
            dedicado al cine porno que desde el año 2005 se celebra anualmente en Madrid. Está amadrinado por 
            la actriz porno Celia Blanco. Y supone uno de los mayores eventos en el campo de los salones eróticos',
            'imagen' => '4.jpeg'
        ]);

        DB::table('eventos')->insert([
            'nombre' => 'Mobile World Congress',
            'fecha_inicio' => '26/2/2018',
            'fecha_fin'=> '1/3/2018',
            'descripcion' => 'Es un congreso de carácter anual en torno al mundo de la comunicación móvil, 
            que actualmente se celebra en la Fira de Barcelona de Barcelona, España. Es considerado el más importante del mundo en su sector. 
            En este congreso sobre la tecnología global y la plataforma I+D se pretende fomentar la colaboración internacional en las comunicaciones 
            inalámbricas móviles. Fue fundado por el Delson Group Inc, y ahora fuertemente apoyado por autoridades de China e industrias principales.',
            'imagen' => '5.jpeg'
        ]);
    }
}
