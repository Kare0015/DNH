<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Transaction;

class TransactionController extends Controller {

    public function store(Request $request) {

        var_dump("indeing");
        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'transactienaam' => 'required|max:255',
            'klantnaam' => 'required|max:255',
            'bedrag' =>  'required|integer|max:255',
            'rubriek' =>  'required|integer|max:255'
        ] );
        // Create new User object with the info in the request
        $transactions = Transaction::create ( [
            'transactienaam' => $request['transactienaam'],
            'bedrag' => $request['bedrag'],
            'klantnaam' => $request['klantnaam'],
            'rubriek' => $request['rubriek']
        ] );
        // Save this object in the database
        $transactions->save();
        // Redirect to the user.index page with a success message.
        return redirect('/transactions/translist');
    }

    public function translist(){
        return view('/transactions/translist');
    }
}
