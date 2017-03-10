<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    public function facturen() {

        // deze data moet uit de dataabase komen.
        return view('/admin/facturen', [
            'leden' => array(
                '1' => array(
                    'voornaam' => 'Giorgio',
                    'achternaam' => 'Joziasse',
                    'woonplaats' => 'Middelburg',
                    'boten' => 5,
                    'totaalbedrag' => 344
                ),
                '2' => array(
                    'voornaam' => 'Bas',
                    'achternaam' => 'Karelse',
                    'woonplaats' => 'Middelburg',
                    'boten' => 1,
                    'totaalbedrag' => 788
                ),
            )
        ]);
    }
}
