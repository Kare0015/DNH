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
        return view ('members/create');
    }


    public function store(Request $request) {

        // Validates form
        $this->validate ( $request, [
            'firstname' => 'required|max:255',
            'prefix' => 'max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'street' => 'required|max:255',
            'number' => 'required|max:255',
            'postalCode' => 'required|max:255',
            'city' => 'required|max:255',
        ] );
        // Creates new Member with the info in the request
        $member = Member::create ( [
            'firstname' => $request ['firstname'],
            'prefix' => $request ['prefix'],
            'surname' => $request ['surname'],
            'email' => $request ['email'],
            'street' => $request ['street'],
            'number' => $request ['number'],
            'postalCode' => $request ['postalCode'],
            'city' => $request ['city'],

        ] );
        // Saves this object in the database
        $member->save ();
        // Redirects to the member.index page
        return redirect('/members');
    }

    public function show($id)
    {
        return view ( 'members/show', [
            'member' => Member::findOrFail($id),
        ] );
    }

    public function destroy($id)
    {
        // Find the member object in the database
        $member = Member::findorfail ( $id );
        // Remove the member from the database
        $member->delete ();
        // Redirect to the member.index page with a success message.
        return redirect ( '/members' )->with( 'success', $member->name.' is verwijderd.' );
    }

}
