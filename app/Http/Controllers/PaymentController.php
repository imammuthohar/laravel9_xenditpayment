<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
// require 'vendor/autoload.php';

use Xendit\Xendit;

class PaymentController extends Controller
{
    public function webhook(Request $request) {

        
        print_r($request->all());

$create_payment = new Payment ();
// $create_payment->id_payment    =$request->id;
// $create_payment->external_id   =$request->external_id;
// $create_payment->user_id       =$request->user_id; 
// $create_payment->is_high       =$request->is_high;
// $create_payment->payment_method=$request->payment_method;
// $create_payment->status        =$request->status;
// $create_payment->merchant_name =$request->merchant_name;
// $create_payment->amount        =$request->amount;
// $create_payment->paid_amount   =$request->paid_amount;
// $create_payment->bank_code     =$request->bank_code;
// $create_payment->paid_at       =$request->paid_at;
// $create_payment->payer_email   =$request->payer_email;
// $create_payment->description   =$request->description;
// $create_payment->adjusted_received_amount =$request->adjusted_received_amount;
// $create_payment->fees_paid_amount         =$request->fees_paid_amount;
// $create_payment->updated                  =$request->updated;
// $create_payment->created                  =$request->created;
// $create_payment->currency                 =$request->currency;
// $create_payment->payment_channel          =$request->payment_channel;
// $create_payment->payment_destination      =$request->payment_destination;

$create_payment->id_payment=$request->id;
$create_payment->user_id=$request->user_id;
$create_payment->external_id=$request->external_id;
$create_payment->is_high=$request->is_high;
$create_payment->status=$request->status;
$create_payment->merchant_name=$request->merchant_name;
$create_payment->amount=$request->amount;
$create_payment->created=$request->created; 
$create_payment->updated=$request->updated; 
$create_payment->description=$request->description;
$create_payment->paid_amount=$request->paid_amount;
$create_payment->payment_method=$request->payment_method; 
$create_payment->bank_code=$request->bank_code;
$create_payment->currency=$request->currency;
$create_payment->initial_amount=$request->initial_amount;
$create_payment->paid_at=$request->paid_at;
$create_payment->payment_channel=$request->payment_channel;
$create_payment->payment_destination=$request->payment_destination;
$create_payment->success_redirect_url=$request->success_redirect_url; 
$create_payment->failure_redirect_url=$request->failure_redirect_url; 
$create_payment->save();


  }
}
