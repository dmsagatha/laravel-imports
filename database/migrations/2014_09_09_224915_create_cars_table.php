<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
  public function up()
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->id();
      $table->string('brand')->unique();
      $table->string('color');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('cars');
  }
};