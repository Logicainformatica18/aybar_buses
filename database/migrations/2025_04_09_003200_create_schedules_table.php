<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->bigInteger('bus_id')->unsigned();
            $table->foreign('bus_id')->references('id')->on('buses');

            $table->date('date');
            $table->time('time');
            $table->string('status')->default('active'); // active, finished, canceled

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
