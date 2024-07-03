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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
           // $table->String("user_name");
            $table->String("transaction_id")->constrained()->casdeonDelete();
            $table->String("product_id");
            $table->String("user_id")->constrained()->casdeonDelete();
            $table->String("email");
            $table->String("phone");
            $table->String("address");

            $table->bigInteger("price");
            $table->String("quantity");
            $table->String("image");

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
        Schema::dropIfExists('orders');
    }
};
