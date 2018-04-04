<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $phone;
    protected $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $msg)
    {

        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->msg = $msg;
//        dd($this->msg);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        dd(111);
        return $this->view('emails.orderToEmail')
            ->with(
                [
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'msg' => $this->msg,
                ]
            )
            ->subject('Заявка с сайта Контент Квартира');
    }
}
