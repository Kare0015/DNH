<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction')->insert([
            'bedrag' => 'Pieter',
            'tussenvoegsel' => 'van de'
            'achternaam' => 'groteboot',
            'woonplaats' => 'Nieuwland',
            'boten' => 5
        ]);
    }
}
