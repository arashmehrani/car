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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string(' percent')->nullable();
            $table->string(' coupon')->nullable();
            $table->string(' address')->nullable();
            $table->string(' location')->nullable();
            $table->string(' phone')->nullable();
            $table->unsignedBigInteger(' user_id')->nullable();
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
        Schema::dropIfExists('offers');
    }
};
