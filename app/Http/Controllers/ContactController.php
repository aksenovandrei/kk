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
        if (!empty($request->services)) {
            $order->user_order = serialize($request->services);
        }
        $order->sendTelegram($order);
        //сохраняем в БД
        $order->save();
        //отправляем письмо
//        $order->sendEmail($order);
        //записываем в сессию имя клиента
        $request->session()->put('userName', $request->name);

        return redirect()->route('thanks');

    }
}

