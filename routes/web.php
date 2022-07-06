<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Models\Stakeholder;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/products', function() {
    return view('products', [
        'title' => 'Products'
    ]);
});

Route::get('/events', [EventController::class,'index']);

Route::get('/Kajian+KWU+:+"+WIRAUSAHA+SEBAGAI+PELUANG+MEMAKNAI+BERKAH+RAMADHAN+"', [EventController::class, 'detail_event']);

Route::get('/about+us', [AboutController::class,'index']);

Route::get('/tentang+organisasi', [AboutController::class,'aboutOrganization']);

Route::get('/tentang+jimmonshop', [AboutController::class,'aboutJimmonshop']);

Route::get('/customer+services', [AboutController::class,'customer_services']);

// sss
