<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace app toegevoegd om alle leden op te kunnen halen
use App;
use App\Member;

class MemberController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $members = App\Member::all();
        return view('/members/index', compact('members'));
    }

    public function create(Request $request) {

        $member = new Member;

        $member->voornaam = $request->input('voornaam');
        $member->achternaam = $request->input('achternaam');
        $member->woonplaats = $request->input('woonplaats');
        $member->boten = $request->input('boten');
        $member->save();


        return redirect('/members/index', compact('index')); //
    }

}
