<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\{Car, User, Category};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    Category::query()->delete();
    User::query()->delete();
    Car::query()->delete();

    DB::table('cars')->insert([
      ['brand' => 'BAW',        'color' => 'Negro'],
      ['brand' => 'Cadillac',   'color' => 'Rojo'],
      ['brand' => 'Ford',       'color' => 'Blanco'],
      ['brand' => 'Jaguar',     'color' => 'Rosa'],
      ['brand' => 'Maserati',   'color' => 'Gris'],
      ['brand' => 'Toyota',     'color' => 'Azul'],
      ['brand' => 'Volkswagen', 'color' => 'Plateado']
    ]);
    
    User::create([
      'name'     => 'Super Admin',
      'email'    => 'superadmin@admin.net',
      'car_id'   => '3',
      'password' => Hash::make('superadmin')
    ]);

    // User::factory()->count(100)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);

    // Category::factory()->count(30)->create();
  }
}