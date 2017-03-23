<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace app toegevoegd om alle leden op te kunnen halen
use App;

class FacturenController extends Controller
{
    public function facturen()
    {
        $members = App\Member::all();
        $totalFacturen = count($members);
        $data = array(
            'members' => $members,
            'totalFacturen' => $totalFacturen
        );

        return view('/facturen/facturen', $data);
    }

    public function facturenOverview()
    {
        $members = App\Member::all();
        return view('/facturen/overview', compact('members'));

    }

    public function enkelefactuur($id)
    {
        $member = App\Member::find($id);
        return view('/facturen/overview', compact('member'));
    }
}

