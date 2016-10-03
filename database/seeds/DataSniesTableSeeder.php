<?php

use Illuminate\Database\Seeder;

class DataSniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('schedules')->insert(array(
            'description'   => 'Mañana',
        ));

        \DB::table('schedules')->insert(array(
            'description'   => 'Tarde',
        ));

        \DB::table('schedules')->insert(array(
            'description'   => 'Noche',
        ));




        \DB::table('credits')->insert(array(
            'description'   => 'No',
        ));

        \DB::table('credits')->insert(array(
            'description'   => 'Credito Cul',
        ));

        \DB::table('credits')->insert(array(
            'description'   => 'Banco Pichincha',
        ));

        \DB::table('credits')->insert(array(
            'description'   => 'Helm Bank',
        ));

        \DB::table('credits')->insert(array(
            'description'   => 'Icetex',
        ));

        \DB::table('credits')->insert(array(
            'description'   => 'Fintra',
        ));

        \DB::table('credits')->insert(array(
            'description'   => 'Otros',
        ));





        \DB::table('sexes')->insert(array(
            'description'   => 'Hombre - Masculino',
        ));

        \DB::table('sexes')->insert(array(
            'description'   => 'Mujer  - Femenino',
        ));




        \DB::table('civil_states')->insert(array(
            'description'   => 'Soltero/a',
        ));

        \DB::table('civil_states')->insert(array(
            'description'   => 'Union Libre',
        ));

        \DB::table('civil_states')->insert(array(
            'description'   => 'Casado/a',
        ));

        \DB::table('civil_states')->insert(array(
            'description'   => 'Divorciado/a',
        ));

        \DB::table('civil_states')->insert(array(
            'description'   => 'Viudo/a',
        ));




        \DB::table('sexual_orientations')->insert(array(
            'description'   => 'Homosexual',
        ));

        \DB::table('sexual_orientations')->insert(array(
            'description'   => 'Bisexual',
        ));

        \DB::table('sexual_orientations')->insert(array(
            'description'   => 'Heterosexual',
        ));

        \DB::table('sexual_orientations')->insert(array(
            'description'   => 'Pansexual',
        ));

        \DB::table('sexual_orientations')->insert(array(
            'description'   => 'Asexual',
        ));




        \DB::table('ethnic_groups')->insert(array(
            'description'   => 'No',
        ));

        \DB::table('ethnic_groups')->insert(array(
            'description'   => 'Pueblo indígena',
        ));

        \DB::table('ethnic_groups')->insert(array(
            'description'   => 'Comunidad Afrodescendiente',
        ));

        \DB::table('ethnic_groups')->insert(array(
            'description'   => 'Pueblo RROM',
        ));




        \DB::table('indigenous_peoples')->insert(array(
            'description'   => 'No',
        ));




        \DB::table('black_communities')->insert(array(
            'description'   => 'No',
        ));

        \DB::table('black_communities')->insert(array(
            'description'   => 'Raizales',
        ));

        \DB::table('black_communities')->insert(array(
            'description'   => 'Afrocolombianos',
        ));

        \DB::table('black_communities')->insert(array(
            'description'   => 'Palenqueros',
        ));

        \DB::table('black_communities')->insert(array(
            'description'   => 'Otras comunidades negras',
        ));





        \DB::table('victim_types')->insert(array(
            'description'   => 'No',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Amenaza a la vida, a la integridad y a la seguridad personal',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Desplazamiento forzado',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Desaparicion forzada',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Homicidio',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Secuestro',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Reclutamiento forzado de niños, niñas o adolescentes',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Lesiones personales',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Delitos contra la libertad e integridad sexual',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Tortura o tratos crueles, inhumanos y degradantes',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Daño en bienes muebles o inmuebles',
        ));

        \DB::table('victim_types')->insert(array(
            'description'   => 'Despojo o abandono forzado de tierras y otros bienes inmuebles',
        ));




        \DB::table('disability_types')->insert(array(
            'description'   => 'No',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Sensorial - Sordera Profunda',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Sensorial - Hipoacusia',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Sensorial - Ceguera',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Sensorial - Baja Visión',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Sordoceguera',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Intelectual',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Psicosocial',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Múltiple',
        ));

        \DB::table('disability_types')->insert(array(
            'description'   => 'Discapacidad Fisica',
        ));

    }
}
