<?php

namespace App\Http\Controllers;
use App\Payment\BankPayment;
use App\Order\OrderDetails;
use Illuminate\Http\Request;
use GetDb;

class PaymentController extends Controller
{
    public function store(OrderDetails $order,BankPayment $pay)
    {
        $order = $order->all();

        $data = $pay->charge(1900);
     
        foreach($data as $data)
        {
           
            echo $data;
        }
    }

   
}
