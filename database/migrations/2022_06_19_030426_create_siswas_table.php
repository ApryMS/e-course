<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('payment_method_id')->constrained();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('wa_number');
            $table->string('no_ortu')->nullable();
            $table->string('from_school');
            $table->string('province');
            $table->string('regency');
            $table->string('payment_status')->default('MENUNGGU'); //lUNAS/MENUNGGU
            $table->string('siswa_status')->default('MENUNGGU'); //TERDAFTAR/MENUNGGU
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
        Schema::dropIfExists('siswas');
    }
}
