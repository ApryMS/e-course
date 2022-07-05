<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_confirmations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->string('name_of_no_rek');
            $table->double('price');
            $table->string('note');
            $table->string('photo_payment');
            $table->string('status_payment');  //konfirmasi
            $table->string('confirm')->default('MENUNGGU'); //konfirmasi
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
        Schema::dropIfExists('payment_confirmations');
    }
}
