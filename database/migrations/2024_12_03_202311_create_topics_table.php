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
        Schema::create('topics', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
     
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('description')->nullable();
            $table->string('detail')->nullable();
            $table->string('instruction')->nullable();
            $table->string('video')->nullable();
            $table->string('type');
            $table->string('url')->unique();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->integer('point')->default('0');
            $table->longText('post')->nullable();
            $table->string('file_1')->nullable();
            $table->string('file_2')->nullable();
            $table->string('link_1')->nullable();
            $table->string('link_2')->nullable();
            $table->string('resource_1')->nullable();
            $table->string('resource_2')->nullable();
            $table->string('resource_3')->nullable();
            $table->string('resource_4')->nullable();
            $table->time('time')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
