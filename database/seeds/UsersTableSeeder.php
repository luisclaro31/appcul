<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->insert(array(
            'identification'=> '1140847048',
            'first_name'    => 'HECTOR LUIS',
            'last_name'     => 'CLARO GAIBAO',
            'email'         => '1140847048',
            'password'      => \Hash::make('$2y$10$8Zq6VLUoieP75'),

        ));


    }
}
