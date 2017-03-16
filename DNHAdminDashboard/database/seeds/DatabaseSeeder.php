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
         $this->call(MembersTableSeeder::class);
        $this->command->info('Members Table seeded groetjes giorgio');
//         $this->call(UsersTableSeeder::class);
//        $this->command->info('User Table seeded weer groetjes  giorgio');
        $this->call(BoatsTableSeeder::class);
        $this->command->info('Boats Table seeded, groetjes Allison');
    }
}
