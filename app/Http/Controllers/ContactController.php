<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.main');
    }
    public function store(Request $request){

        $userName = $request->input('name');


        $request->session()->put('userName', $userName);
        return redirect()->route('thanks');

    }
}
