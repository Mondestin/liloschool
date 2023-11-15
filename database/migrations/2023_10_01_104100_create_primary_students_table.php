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
        Schema::create('primary_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stNumber');
            $table->string('avatar')->default('avatar.png');
            $table->string('stName');
            $table->string('stSurname');
            $table->date('stDob');
            $table->boolean('stStatus');
            $table->string('stGender');
            $table->string('stAddress');
            $table->string('stLevel');
            $table->string('stClaCode');
            $table->string('stPhone');
            $table->string('stEmail');
            $table->string('stTown');
            $table->string('stArea');
            $table->date('stDateJoin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primary_students');
    }
};
