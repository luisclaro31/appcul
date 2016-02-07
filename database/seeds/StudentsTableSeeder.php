<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 10; $i ++)
        {
            $first_name = strtoupper($faker->firstName);
            $last_name = strtoupper($faker->lastName);
            $identification = $faker->unique()->ean8;

            $idu = \DB::table('users')->insertGetId(array(
                'identification'=> $identification,
                'first_name'    => $first_name,
                'last_name'     => $last_name,
                'email'         => $identification,
                'password'      => \Hash::make('$2y$10$8Zq6VLUoieP75'),

            ));

            \DB::table('emails')->insertGetId(array(
                'user_id'       => $idu,
                'email'         => $faker->email,
                'password'      => '$2y$10$8Zq6VLUoieP75',
            ));



            for($j = 0; $j < 3; $j ++) {
                $code = '141-123' . $j;

                $ids = \DB::table('students')->insertGetId(array(
                    'code' => $code,
                    'user_id' => $idu,
                    'program_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7]),
                ));


                for ($k = 0; $k < 5; $k++) {
                    \DB::table('ratings')->insertGetId(array(
                        'value' => $faker->randomElement(['3,4', '4,9', '2,6', '2', '3', '5', '4,2', '3,5']),
                        'period' => $faker->randomElement(['2012-1', '2013-2', '2014-1', '2015-2', '2015-1', '2012-2', '2013-1', '2014-2']),
                        'student_id' => $ids,
                        'subject_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]),
                    ));
                }
            }
        }
    }
}
