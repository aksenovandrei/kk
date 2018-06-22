<?php

namespace App;

use App\Mail\OrderMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    public function sendEmail($order)
    {
        $name = $order->name;
        $email = $order->email;
        $phone = $order->phone;
        $msg = $order->message;
        $services = unserialize($order->user_order);

        Mail::to('aksenov.andrew@gmail.com')->send(new OrderMail($name, $email, $phone, $msg,$services));
    }
}
