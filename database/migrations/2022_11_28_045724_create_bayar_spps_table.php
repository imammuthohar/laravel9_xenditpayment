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
        Schema::create('bayar_spps', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nama');
            $table->string('kelas');
            $table->string('bulan');
            $table->integer('nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_spps');
    }
};
