<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\KategoriController;
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

Route::controller(FrontPageController::class)->group(function(){
    // menu beranda
    Route::get('/','Beranda')->name('beranda');
    // menu profile
    Route::get('/profile/sejarah','Sejarah')->name('profile.sejarah');
    Route::get('/profile/visi-misi-tujuan','VisiMisiTujuan')->name('profile.visi');
    Route::get('/profile/struktur-organisasi','StrukturOrganisasi')->name('profile.struktur');
    // menu informasi pengujian
    Route::get('/informasi-pengujian/pengujian-tarik', 'Tarik')->name('informasiPengujian.tarik');
    Route::get('/informasi-pengujian/kuat-tekan', 'Tekan')->name('informasiPengujian.tekan');
    Route::get('/informasi-pengujian/batu-bara', 'Batubara')->name('informasiPengujian.batubara');
    Route::get('/informasi-pengujian/xrd', 'Xrd')->name('informasiPengujian.xrd');
    Route::get('/informasi-pengujian/kekerasan-bahan', 'Kekerasan')->name('informasiPengujian.kekerasan');
    // menu tentang kami
    Route::get('/tentang-kami/laboratorium', 'Laboratorium')->name('tentangKami.laboratorium');
    Route::get('/tentang-kami/fasilitas', 'Fasilitas')->name('tentangKami.fasilitas');
    Route::get('/tentang-kami/galeri', 'Galeri')->name('tentangKami.galeri');
    // menu hubungi kami
    Route::get('hubungi-kami','Hubungi')->name('hubungiKami');
    // menu download
    Route::get('download','Download')->name('front.download');

});

Route::controller(AuthController::class)->group(function(){
    Route::get('/admin/login','LoginPage')->name('admin.login');
});

Route::controller(AdminDashboardController::class)->group(function(){
    Route::get('/dashboard/home','Index')->name('admin.dashboard.home');
});

Route::controller(KategoriController::class)->group(function(){
    Route::get('/dashboard/kategori-berita/all','index')->name('admin.dashboard.berita.kategori-berita.all');
    Route::post('/dashboard/kategori-berita/store', 'store')->name('admin.dashboard.berita.kategori-berita.store');
    Route::delete('/dashboard/kategori-berita/{kategori}','destroy')->name('admin.dashboard.berita.kategori-berita.destroy');
    Route::patch('/dashboard/kategori-berita/{kategori}/update','update')->name('admin.dashboard.berita.kategori-berita.update');
});
