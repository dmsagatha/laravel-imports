<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
  public function up()
  {
    Schema::create('csv_data', function (Blueprint $table) {
      $table->id();
      $table->string('csv_filename');
      $table->boolean('csv_header')->default(0);
      $table->json('csv_data');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('csv_data');
  }
};