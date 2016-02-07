<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subjects')->insert(array(
            'code'          => 'PROI',
            'description'   => 'PROGRAMACION',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROII',
            'description'   => 'PLANEACION ESTRA',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'PENDEJASDAS',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'MATEMATICA APLICADA',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'APRENDER APRENDIENDO',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'FEDERICO NO SE',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'PERDIDAS ECOLOGICCAS',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'DESVERGUE',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'NOSE II',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'PROGRAMACION III',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'BASE DE DATOS III',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'ALGEBRA',
        ));

        \DB::table('subjects')->insert(array(
            'code'          => 'PROIII',
            'description'   => 'FEUDAISMO',
        ));
    }
}
