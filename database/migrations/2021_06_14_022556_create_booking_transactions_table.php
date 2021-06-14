<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pod_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("status_id");
            $table->bigInteger("price");
            $table->dateTime("booking_start");
            $table->dateTime("booking_end");
            $table->timestamps();
            $table->foreign('pod_id')->references('id')->on('pods')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_transactions');
    }
}
