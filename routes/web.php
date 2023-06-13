<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\frontendDashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\kategoriProdukController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Bonjuar";
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'akbar',
        'umur' => 19,
        'email' => 'syayid.m.akbar@mail.com'
    ]);
});

Route::get('/nf', function () {
    return view('nf');
});

route::get('/kolesterol', function () {
    return view('kolesterol');
});


route::get('/input', [InputController::class, 'index']);
route::post('/output', [InputController::class, 'output'])
    ->name('output');

// route tampilan admin/backend
route::prefix('admin')->group(function () { //syantaq untuk
    route::get('/dashboard', [DashbordController::class, 'index']);
    route::get('/produk', [ProdukController::class, 'index']);
    route::get('/produk', [ProdukController::class, 'index']);
    route::get('/produk/create', [ProdukController::class, 'create']);
    route::get('/produk/store', [ProdukController::class, 'store']);
    route::get('/produk/pesanan', [PesananController::class, 'index']);
    route::get('/produk/kategoriProduk', [kategoriProdukController::class, 'index']);
});


// route tampilan frontend
route::prefix('frontend')->group(function () {
    route::get('/dashboard_frontend', [frontendDashboardController::class, 'index']);
    route::get('/about', [AboutController::class, 'index']);
});
