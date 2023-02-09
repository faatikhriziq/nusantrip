<?php

use App\Http\Livewire\Hotels;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DetailTour;
use App\Http\Livewire\Admin\Hotel;
use App\Http\Livewire\DetailHotel;
use App\Http\Livewire\Admin\Wisata;
use App\Http\Livewire\Admin\AddHotel;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AddWisata;
use App\Http\Livewire\Admin\EditHotel;
use App\Http\Livewire\Wisata as Tours;
use App\Http\Livewire\Admin\EditWisata;
use App\Http\Controllers\TourController;
use App\Http\Livewire\Admin\KategoriWisata;
use App\Http\Controllers\CategoryController;
/*
 *
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
    return view('home');
});

Route::get('/tour',Tours::class)->name('tour');
Route::get('/hotels',Hotels::class)->name('hotel');
Route::get('/detail-tour/{tour_id}',DetailTour::class)->name('detail-tour');
Route::get('/detail-hotel/{hotel_id}',DetailHotel::class)->name('hotel-tour');


Route::group(['middleware' => ['auth', 'level:admin']], function () {
    Route::get('dashboard',Dashboard::class)->name('dashboard');
    Route::get('kategori-wisata',KategoriWisata::class)->name('kategori-wisata');
    Route::get('wisata', Wisata::class);
    Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
    Route::get('cities', 'DependentDropdownController@cities')->name('cities');
    Route::get('districts', 'DependentDropdownController@districts')->name('districts');
    Route::get('villages', 'DependentDropdownController@villages')->name('villages');
    Route::post('/getkabupaten', [WisataController::class, 'getkabupaten'])->name('getkabupaten');

    Route::post('/add-category-tour', [CategoryController::class,'store']);
    Route::get('/add-wisata',AddWisata::class);
    Route::get('/edit-wisata/{tour_id}',EditWisata::class);
    Route::get('/hotel',Hotel::class)->name('hotel');
    Route::get('/add-hotel',AddHotel::class)->name('add-hotel');
    Route::get('/edit-hotel/{hotel_id}',EditHotel::class)->name('add-hotel');
    // Route::post('/getkabupaten', [FormController::class, 'getkabupaten'])->name('getkabupaten');
});
Route::group(['middleware' => ['auth', 'level:custumer']], function () {


});
