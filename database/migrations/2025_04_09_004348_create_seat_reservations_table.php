<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat_reservations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('id')->on('schedules');

            $table->integer('seat_number')->unique();
            $table->string('customer_name');
            $table->string('dni')->nullable();
            $table->string('phone')->nullable();

            $table->bigInteger('user_id')->unsigned(); // who reserved the seat
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_reservations');
    }
};
