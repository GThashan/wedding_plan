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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phoneNumber1');
            $table->integer('phoneNumber2')->nullable();
            $table->string('address');
            $table->integer('guestCount');
            $table->date('weddingDate');
            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
