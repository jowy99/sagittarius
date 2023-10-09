<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opinions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->tinyInteger('rate');
            $table->text('comment');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('opinions');
    }
};
