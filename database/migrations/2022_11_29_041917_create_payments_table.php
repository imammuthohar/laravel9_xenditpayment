<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); 
            $table->string('id_payment');
            $table->string('user_id');
            $table->string('external_id');
            $table->string('is_high');
            $table->string('status');
            $table->string('merchant_name');
            $table->integer('amount');
            $table->string('created');
            $table->string('updated');
            $table->string('description');
            $table->integer('paid_amount'); 
            $table->string('payment_method');
            $table->string('bank_code');
            $table->string('currency');
            $table->string('initial_amount');
            $table->string('paid_at'); 
            $table->string('payment_channel');
            $table->string('payment_destination'); 
            $table->string('success_redirect_url');
            $table->string('failure_redirect_url');
            $table->timestamps();

            // $table->string('id_payment');
            // $table->string('external_id');
            // $table->string('user_id');
            // $table->string('is_high');
            // $table->string('payment_method');
            // $table->string('status');
            // $table->string('merchant_name');
            // $table->integer('amount');
            // $table->integer('paid_amount');
            // $table->string('bank_code');
            // $table->string('paid_at');
            // $table->string('payer_email');
            // $table->string('description');
            // $table->string('adjusted_received_amount');
            // $table->string('fees_paid_amount');
            // $table->string('updated');
            // $table->string('created');
            // $table->string('currency');
            // $table->string('payment_channel');
            // $table->string('payment_destination');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
