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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('dob');
            $table->string('address');
            $table->string('number');
            $table->string('title')->nullable();
            $table->longText('personalIntroduction');
            $table->string('image')->nullable();
            $table->string('words')->nullable();
            $table->string('email');
            $table->string('fathersName')->nullable();
            $table->string('mothersName')->nullable();
            $table->string('grandfather')->nullable();
            $table->string('grandmother')->nullable();
            $table->string('spouse')->nullable();
            $table->longText('education')->nullable();
            $table->longText('achievement')->nullable();
            $table->longText('training')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('hobby')->nullable();
            $table->longText('skills')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
