<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

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
        $order->user_order = serialize($request->services);


        $order->save();
//        dd($request);
//        $name = $order->name;
//        $email = $order->email;
//        $phone = $order->phone;
//        $msg = $order->message;
//        $services = $order->user_order;

//        Mail::to('aksenov.andrew@gmail.com')->send(new OrderMail($order->name, $email, $phone, $msg));
        $order->sendEmail($order);

        $request->session()->put('userName', $request->name);
        return redirect()->route('thanks');

    }
}

