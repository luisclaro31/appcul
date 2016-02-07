<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('programs')->insert(array(
            'code'          => '01-03-21',
            'description'   => 'INGENIERIA DE SISTEMAS',
        ));

        \DB::table('programs')->insert(array(
            'code'          => '01-03-20',
            'description'   => 'ADMINISTRACION FINANCIERA',
        ));

        \DB::table('programs')->insert(array(
            'code'          => '01-03-22',
            'description'   => 'CONTADURIA PUBLICA',
        ));

        \DB::table('programs')->insert(array(
            'code'          => '01-03-23',
            'description'   => 'TEGNOLOGO SEGURIDAD Y SALUD EN EL TRABAJO',
        ));

        \DB::table('programs')->insert(array(
            'code'          => '01-03-24',
            'description'   => 'LIC. EDUCACION FISICA',
        ));

        \DB::table('programs')->insert(array(
            'code'          => '01-03-25',
            'description'   => 'LIC. PREESCOLAR',
        ));

        \DB::table('programs')->insert(array(
            'code'          => '01-03-26',
            'description'   => 'INTRUMENTACION QUIRURGICA',
        ));
    }
}
