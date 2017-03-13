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
            'achternaam' => 'Boot',
            'woonplaats' => 'Nieuwland',
            'boten' => 5
        ]);
    }
}
