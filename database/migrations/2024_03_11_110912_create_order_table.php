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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['Pending','Delievered','Out of delievery','Canceled','Accepted'])->default('Pending');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('location_id')->unsigned();
            $table->double('total_price',12,2);
            $table->string('date_of_delivery');

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('location_id')->references('id')->on('locations')->onDelete('cascade');

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
        Schema::dropIfExists('order');
    }
};
