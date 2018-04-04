<?php

namespace App;

use App\Mail\OrderMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    public function sendEmail($order)
    {
//        dd($order);
        $name = $order->name;
        $email = $order->email;
        $phone = $order->phone;
        $msg = $order->message;

        Mail::to('content.kvartira@gmail.com')->send(new OrderMail($name, $email, $phone, $msg));
    }
}
