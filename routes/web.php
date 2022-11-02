<?php

use App\Http\Controllers\photoController;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

// Route::get('/portfolio', function () {
//     return view('portfolio', [
//         'photos' => Photo::index()
//     ]);
// });
Route::get('/portfolio', [photoController::class, 'index']);


Route::get('/aboutus', function () {
    return view('aboutus');
});