<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
  public function up()
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->string('namecat')->unique();
      $table->string('description');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('categories');
  }
};