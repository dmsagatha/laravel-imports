<?php

use App\Http\Controllers\Imports\ImportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/**
 * https://github.com/LaravelDaily/Laravel-8-Import-CSV
 * Revisar: Laravel Excel: Import with Relationships
 * https://www.youtube.com/watch?v=n2WOag1G7Zg
 */
Route::controller(ImportController::class)->group(function () {
  Route::get('/daily-usuarios', 'getImport')->name('import');
  Route::post('/import_parse', 'parseImport')->name('import_parse');
  Route::post('/import_process', 'processImport')->name('import_process');
});

require __DIR__.'/auth.php';