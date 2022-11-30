<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        
               
        'id_payment',
        'user_id',
        'external_id',
        'is_high',
        'status',
        'merchant_name',
        'amount',
        'created',
        'updated',
        'description',
        'paid_amount', 
        'payment_method',
        'bank_code',
        'currency',
        'initial_amount',
        'paid_at', 
        'payment_channel',
        'payment_destination', 
        'success_redirect_url',
        'failure_redirect_url',

    ];
}
