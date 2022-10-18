<?php 
namespace App\Payment;
use Illuminate\Support\Str;

class BankPayment{

    private $currency;
    private $discount;
 
    public function __construct($currency)
    {
        $this->currency =$currency;
    }

    
    
    public function setDiscount($ammount)
    {
        $this->discount = $ammount;
    }

    public function charge($ammount)
    {
        // Charge From Bank;
        return [
            'ammount'=>$ammount-$this->discount,
            'confirmation_name'=>Str::random(),
            'currency'=>$this->currency,
            'discount'=>$this->discount
            
        ];
       
    }
}
?>