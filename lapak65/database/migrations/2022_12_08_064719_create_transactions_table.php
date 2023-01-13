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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transactionId');
            $table->string("firstName");
            $table->string("lastName");
            $table->string("email");
            $table->string("company")->nullable();
            $table->string("country");
            $table->string("street");
            $table->string("address")->nullable();
            $table->string("city");
            $table->string("province");
            $table->string("postcode");
            $table->string("phone");
            $table->text("notes")->nullable();
            $table->string("products");
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
        Schema::dropIfExists('transactions');
    }
};
