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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->string('workshop')->nullable();
            $table->string('type')->nullable();
            $table->unsignedInteger('km_now')->nullable();
            $table->unsignedInteger('km_next')->nullable();
            $table->date('time_now')->nullable();
            $table->date('time_next')->nullable();
            $table->json('meta')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('plate_id')->nullable();
            $table->boolean('passed')->nullable();
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
        Schema::dropIfExists('services');
    }
};
