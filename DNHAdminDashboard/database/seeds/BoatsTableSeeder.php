<?php

use Illuminate\Database\Seeder;

class BoatsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('boats')->insert([
            [
            'boatname' => 'Titanic',
            'boatlength' => 12,
            ],[
                'boatname' => 'De Vliegende Hollander',
                'boatlength' => 8,
            ]
        ]);
    }
}
