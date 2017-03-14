<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace app toegevoegd om alle leden op te kunnen halen
use App;

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

    public function membersIndex() {
      $members = App\Member::all();
        return view('/members/membersIndex', compact('members'));
    }

    public function facturen() {
        $members = App\Member::all();
        $totalFacturen = count($members);
        $data = array(
            'members' => $members,
            'totalFacturen' => $totalFacturen
        );

        return view('/admin/facturen', $data);
    }

    public function facturenOverview(){
        $members = App\Member::all();
        return view('/facturen/overview', compact('members'));

    }
}
