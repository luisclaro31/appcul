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
        $this->call(UsersTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(DataSniesTableSeeder::class);
    }
}
