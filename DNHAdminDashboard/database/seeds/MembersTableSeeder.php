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
            'voornaam' => 'Pieter',
            'tussenvoegsel' => '',
            'achternaam' => 'Boot',
            'email' => 'pieter@boot.nl',
            'woonplaats' => 'Nieuwland',
        ]);
    }
}
