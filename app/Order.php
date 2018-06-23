<?php

namespace App;

use App\Mail\OrderMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    private $token = '561353685:AAGFOFWVKy8flKuJMKfXkYQ5uGRqHVFBl4Y';
    private $chat_id_list = [350981322, 613584674];

    public function sendEmail($order)
    {
        $name = $order->name;
        $email = $order->email;
        $phone = $order->phone;
        $msg = $order->message;
        $services = unserialize($order->user_order);

        Mail::to('aksenov.andrew@gmail.com')->send(new OrderMail($name, $email, $phone, $msg, $services));
    }

    public function sendTelegram($order)
    {
        $name = $order->name;
        $email = $order->email;
        $phone = $order->phone;
        $msg = $order->message;
        if (!empty($order->user_order)) {
            $services = unserialize($order->user_order);
            $services = implode("\n-", $services);
//dd($services);
        } else {
            $services = 'Ничего не выбрано';
        }
        $messageToTelegram = "Новая заявка на сайте! \nE-mail: $email \nТелефон: $phone \n Имя: $name \nСообщение: $msg \nУслуги:\n-$services";

        $x = count($this->chat_id_list);
        for ($i=0; $i<$x; $i++){
            $chat_id = $this->chat_id_list[$i];
            file_get_contents('https://api.telegram.org/bot'. $this->token .'/sendMessage?chat_id='. $chat_id .'&text=' . urlencode($messageToTelegram));
        }
    }
}
