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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('is_active')->default(false);
            $table->string('form_view')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('prize_pool')->nullable();
            $table->string('prize_pool2')->nullable();
            $table->string('prize_pool3')->nullable();
            $table->string('secret_code')->nullable();
            $table->string('entry_fee')->nullable();
            $table->unsignedBigInteger('first_place_registration_id')->nullable();
            $table->unsignedBigInteger('second_place_registration_id')->nullable();
            $table->unsignedBigInteger('third_place_registration_id')->nullable();

            $table->foreign('first_place_registration_id')->references('id')->on('registrations')->onDelete('set null');
            $table->foreign('second_place_registration_id')->references('id')->on('registrations')->onDelete('set null');
            $table->foreign('third_place_registration_id')->references('id')->on('registrations')->onDelete('set null');

            $table->enum('type', ['CS_Solo', 'CS_Duo', 'CS_Squad', 'FM_Solo', 'FM_Duo', 'FM_Squad']);
//
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
