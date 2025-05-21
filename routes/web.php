<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\LoginController;
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

// landing page
Route::get('/', function () {
    return view('h_landing');
});
// login
Route::get('/login',function(){
    return view('pengguna.h_login');
})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware'=>['auth','ceklevel:admin,user,owner']],function(){
    //home
    Route::get('/cars', [MobilController::class, 'indexx'])->name('cars'); //menampilkan data
    //about
    Route::get('/about', function () {
        return view('h_about');
    });
    Route::get('/activity', [RentalController::class, 'indexra'])->name('activity'); //tampil data
    Route::get('/detail/{id}', [RentalController::class, 'detail'])->name('detail'); //menampilkan data detail rental
      
});
Route::group(['middleware'=>['auth','ceklevel:admin']],function(){
    //activity admin
    Route::get('/activityadmin', [RentalController::class, 'indexr'])->name('indexr'); //tampil data
    Route::get('/hapusx/{id}', [RentalController::class, 'hapusx'])->name('hapusx'); //hapus data
    Route::get('/showx/{id}', [RentalController::class, 'showx'])->name('showx'); //menampilkan data update
    Route::post('/updatex/{id}', [RentalController::class, 'updatex'])->name('updatex'); //update data
});

Route::group(['middleware'=>['auth','ceklevel:owner,admin']],function(){
    // carsadmin
    Route::get('/carsadmin', [MobilController::class, 'index'])->name('mobil'); //halaman carsadmin
    Route::post('/store', [MobilController::class, 'store'])->name('store'); //simpan data carsadmin
    Route::get('/hapus/{id}', [MobilController::class, 'hapus'])->name('hapus'); //hapus data
    Route::post('/update/{id}', [MobilController::class, 'update'])->name('update'); //update data
    Route::get('/show/{id}', [MobilController::class, 'show'])->name('show'); //menampilkan data update  
    //activity
    
    Route::get('/showr/{id}', [MobilController::class, 'showr'])->name('showr'); //menampilkan data cars yang dipesan ke input rental
    Route::post('/input', [RentalController::class, 'input'])->name('input'); //simpan data input rental   
});



