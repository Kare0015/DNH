<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'firstname' => 'Pieter',
            'prefix' => '',
            'surname' => 'Boot',
            'email' => 'pieter@boot.nl',
            'street' => 'Prins Hendrikweg',
            'number' => '12',
            'postalCode' => '3247DB',
            'city' => 'Vlissingen',
        ]);
    }
}
