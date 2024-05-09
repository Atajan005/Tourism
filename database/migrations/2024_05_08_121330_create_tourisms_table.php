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
        Schema::create('tourisms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')->references('id')->on('locations')->cascadeOnDelete();
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->unsignedBigInteger('hotel_id')->index();
            $table->foreign('hotel_id')->references('id')->on('hotels')->cascadeOnDelete();
            $table->string('address');
            $table->string('image');
            $table->time('time');
            $table->integer('price')->default(0);
            $table->string('author');
            $table->string('phone');
            $table->string('name_tm');
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('description_tm');
            $table->string('description_ru')->nullable();
            $table->string('description_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourisms');
    }
};
