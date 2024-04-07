<?php


use App\Http\Controllers\biencontroller;
use App\Http\Controllers\bienscontroller;
use App\Http\Controllers\optioncontroller;
use App\Http\Controllers\homecontroller;
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
route::get('/', [homecontroller::class,'index'])->name('home');
route::get('/list_bien',[bienscontroller::class,'index'])->name('list_bien');
route::get('/list_bien/detail/{bien}',[bienscontroller::class,'show'])->name('detail');

Route::prefix('/admin')->name('admin.')->group(
    function(){
   
        route::resource('bien',biencontroller::class)->except('show');
        route::resource('option',optioncontroller::class)->except('show');
        
        
}
);
