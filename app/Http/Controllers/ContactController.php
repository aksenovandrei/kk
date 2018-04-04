<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.main');
    }
    public function store(Request $request){

        $order = new Order();

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->contact_number;
        $order->message = $request->message;

        $order->save();

        $order->sendEmail($order);

        $request->session()->put('userName', $request->name);
        return redirect()->route('thanks');

    }

}

