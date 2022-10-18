<?php 
namespace App\Order;
use App\Payment\BankPayment;
class OrderDetails
{
    private $mypayment;

    public function __construct(BankPayment $mypayment)
    {
        $this->mypayment =$mypayment;
    }

    public function all()
    {
        $this->mypayment->setDiscount(5);
        return [
            'name'=>'Rajdeep Rangra',

        ];
    }
}
?>