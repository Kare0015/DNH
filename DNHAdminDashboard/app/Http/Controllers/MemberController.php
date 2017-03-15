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

    public function create() {
        return view ('members/toevoegen');
    }


    public function store(Request $request) {

        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'voornaam' => 'required|max:255',
            'tussenvoegsel' => 'max:255',
            'achternaam' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'woonplaats' => 'required|max:255',
        ] );
        // Create new User object with the info in the request
        $member = Member::create ( [
            'voornaam' => $request ['voornaam'],
            'tussenvoegsel' => $request ['tussenvoegsel'],
            'achternaam' => $request ['achternaam'],
            'email' => $request ['email'],
            'woonplaats' => $request ['woonplaats'],
        ] );
        // Save this object in the database
        $member->save ();
        // Redirect to the user.index page with a success message.
        return redirect('/members');
    }

}
