<?php

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
    
    //-----------------------------------------------------------    
        Route::resource('Dashboard', DashboardController::class);  
    //-----------------------------------------------------------   
            Route::get('Peneliti/{Peneliti}/deletedata', 'PenelitiController@deletedata')
                ->name('Peneliti.deletedata');  
        Route::resource('Peneliti', PenelitiController::class);  
    //-----------------------------------------------------------  
            Route::get('Perguruan_tinggi/{Perguruan_tinggi}/deletedata', 'Perguruan_tinggiController@deletedata')
                ->name('Perguruan_tinggi.deletedata');  
        Route::resource('Perguruan_tinggi', Perguruan_tinggiController::class);  
    //-----------------------------------------------------------  
            Route::get('Pengalaman_penelitian/Peneliti/{Peneliti}', 'Pengalaman_penelitianController@Peneliti')
                ->name('Pengalaman_penelitian.Peneliti');  
            Route::get('Pengalaman_penelitian/{Pengalaman_penelitian}/deletedata', 'Pengalaman_penelitianController@deletedata')
                ->name('Pengalaman_penelitian.deletedata');  
        Route::resource('Pengalaman_penelitian', Pengalaman_penelitianController::class); 
    //-----------------------------------------------------------  
            Route::get('Pengalaman_pengabdian/Peneliti/{Peneliti}', 'Pengalaman_pengabdianController@Peneliti')
                ->name('Pengalaman_pengabdian.Peneliti');  
            Route::get('Pengalaman_pengabdian/{Pengalaman_pengabdian}/deletedata', 'Pengalaman_pengabdianController@deletedata')
                ->name('Pengalaman_pengabdian.deletedata');  
        Route::resource('Pengalaman_pengabdian', Pengalaman_pengabdianController::class); 
    //-----------------------------------------------------------  
            Route::get('Publikasi_artikel/Peneliti/{Peneliti}', 'Publikasi_artikelController@Peneliti')
                ->name('Publikasi_artikel.Peneliti');  
            Route::get('Publikasi_artikel/{Publikasi_artikel}/deletedata', 'Publikasi_artikelController@deletedata')
                ->name('Publikasi_artikel.deletedata');  
        Route::resource('Publikasi_artikel', Publikasi_artikelController::class); 
    //-----------------------------------------------------------  
            Route::get('Pemakalah_seminar/Peneliti/{Peneliti}', 'Pemakalah_seminarController@Peneliti')
                ->name('Pemakalah_seminar.Peneliti');  
            Route::get('Pemakalah_seminar/{Pemakalah_seminar}/deletedata', 'Pemakalah_seminarController@deletedata')
                ->name('Pemakalah_seminar.deletedata');  
        Route::resource('Pemakalah_seminar', Pemakalah_seminarController::class); 
    //-----------------------------------------------------------  
            Route::get('Karya_buku/Peneliti/{Peneliti}', 'Karya_bukuController@Peneliti')
                ->name('Karya_buku.Peneliti');  
            Route::get('Karya_buku/{Karya_buku}/deletedata', 'Karya_bukuController@deletedata')
                ->name('Karya_buku.deletedata');  
        Route::resource('Karya_buku', Karya_bukuController::class); 
    //-----------------------------------------------------------  
            Route::get('Perolehan_hki/Peneliti/{Peneliti}', 'Perolehan_hkiController@Peneliti')
                ->name('Perolehan_hki.Peneliti');  
            Route::get('Perolehan_hki/{Perolehan_hki}/deletedata', 'Perolehan_hkiController@deletedata')
                ->name('Perolehan_hki.deletedata');  
        Route::resource('Perolehan_hki', Perolehan_hkiController::class); 
    //-----------------------------------------------------------  
            Route::get('Kebijakan_publik/Peneliti/{Peneliti}', 'Kebijakan_publikController@Peneliti')
                ->name('Kebijakan_publik.Peneliti');  
            Route::get('Kebijakan_publik/{Kebijakan_publik}/deletedata', 'Kebijakan_publikController@deletedata')
                ->name('Kebijakan_publik.deletedata');  
        Route::resource('Kebijakan_publik', Kebijakan_publikController::class); 
    //-----------------------------------------------------------  
            Route::get('Penghargaan/Peneliti/{Peneliti}', 'PenghargaanController@Peneliti')
                ->name('Penghargaan.Peneliti');  
            Route::get('Penghargaan/{Penghargaan}/deletedata', 'PenghargaanController@deletedata')
                ->name('Penghargaan.deletedata');  
        Route::resource('Penghargaan', PenghargaanController::class); 
    //-----------------------------------------------------------  
            Route::get('Penelitian/{Penelitian}/deletedata', 'PenelitianController@deletedata')
                ->name('Penelitian.deletedata');  
        Route::resource('Penelitian', PenelitianController::class); 
    //-----------------------------------------------------------  
            Route::get('Jadwal_penelitian/{Jadwal_penelitian}/deletedata', 'Jadwal_penelitianController@deletedata')
                ->name('Jadwal_penelitian.deletedata');  
        Route::resource('Jadwal_penelitian', Jadwal_penelitianController::class); 
    //-----------------------------------------------------------  
            Route::get('Mata_kuliah/Peneliti/{Peneliti}', 'Mata_kuliahController@Peneliti')
                ->name('Mata_kuliah.Peneliti');  
            Route::get('Mata_kuliah/{Mata_kuliah}/deletedata', 'Mata_kuliahController@deletedata')
                ->name('Mata_kuliah.deletedata');  
        Route::resource('Mata_kuliah', Mata_kuliahController::class); 
    //-----------------------------------------------------------   
            Route::get('Penulis_publikasi_artikel/{Penulis_publikasi_artikel}/deletedata', 'Penulis_publikasi_artikelController@deletedata')
                ->name('Penulis_publikasi_artikel.deletedata');  
        Route::resource('Penulis_publikasi_artikel', Penulis_publikasi_artikelController::class); 
    //-----------------------------------------------------------  
            Route::get('Publikasi/{Publikasi}/deletedata', 'PublikasiController@deletedata')
                ->name('Publikasi.deletedata');  
        Route::resource('Publikasi', PublikasiController::class); 
    //-----------------------------------------------------------  
            Route::get('Penulis_karya_buku/{Penulis_karya_buku}/deletedata', 'Penulis_karya_bukuController@deletedata')
            ->name('Penulis_karya_buku.deletedata');  
        Route::resource('Penulis_karya_buku', Penulis_karya_bukuController::class); 
    //-----------------------------------------------------------  
            Route::get('Buku/{Buku}/deletedata', 'BukuController@deletedata')
                ->name('Buku.deletedata');  
        Route::resource('Buku', BukuController::class); 
    //-----------------------------------------------------------  
        Route::resource('Print', PrintController::class); 
    //-----------------------------------------------------------   
            Route::get('Latar_belakang/Penelitian/{Penelitian}', 'Latar_belakangController@Penelitian')
                ->name('Latar_belakang.Penelitian');  
            Route::get('Latar_belakang/{Latar_belakang}/deletedata', 'Latar_belakangController@deletedata')
                ->name('Latar_belakang.deletedata');  
        Route::resource('Latar_belakang', Latar_belakangController::class); 
    //-----------------------------------------------------------  
            Route::get('Ringkasan/Penelitian/{Penelitian}', 'RingkasanController@Penelitian')
                ->name('Ringkasan.Penelitian');  
            Route::get('Ringkasan/{Ringkasan}/deletedata', 'RingkasanController@deletedata')
                ->name('Ringkasan.deletedata');  
        Route::resource('Ringkasan', RingkasanController::class); 
    //-----------------------------------------------------------  
            Route::get('Tinjauan_pustaka/Penelitian/{Penelitian}', 'Tinjauan_pustakaController@Penelitian')
                ->name('Tinjauan_pustaka.Penelitian');  
            Route::get('Tinjauan_pustaka/{Tinjauan_pustaka}/deletedata', 'Tinjauan_pustakaController@deletedata')
                ->name('Tinjauan_pustaka.deletedata');  
        Route::resource('Tinjauan_pustaka', Tinjauan_pustakaController::class); 
    //-----------------------------------------------------------  
            Route::get('Metode_penelitian/Penelitian/{Penelitian}', 'Metode_penelitianController@Penelitian')
                ->name('Metode_penelitian.Penelitian');  
            Route::get('Metode_penelitian/{Metode_penelitian}/deletedata', 'Metode_penelitianController@deletedata')
                ->name('Metode_penelitian.deletedata');  
        Route::resource('Metode_penelitian', Metode_penelitianController::class); 
    //-----------------------------------------------------------  
            Route::get('Jadwal_penelitian/Penelitian/{Penelitian}', 'Jadwal_penelitianController@Penelitian')
                ->name('Jadwal_penelitian.Penelitian');  
            Route::get('Jadwal_penelitian/{Jadwal_penelitian}/deletedata', 'Jadwal_penelitianController@deletedata')
                ->name('Jadwal_penelitian.deletedata');  
        Route::resource('Jadwal_penelitian', Jadwal_penelitianController::class); 
    //-----------------------------------------------------------  
            Route::get('Anggaran_penelitian/Penelitian/{Penelitian}', 'Anggaran_penelitianController@Penelitian')
                ->name('Anggaran_penelitian.Penelitian');  
            Route::get('Anggaran_penelitian/{Anggaran_penelitian}/deletedata', 'Anggaran_penelitianController@deletedata')
                ->name('Anggaran_penelitian.deletedata');  
        Route::resource('Anggaran_penelitian', Anggaran_penelitianController::class); 
    //-----------------------------------------------------------  
            Route::get('Daftar_pustaka/Penelitian/{Penelitian}', 'Daftar_pustakaController@Penelitian')
                ->name('Daftar_pustaka.Penelitian');  
            Route::get('Daftar_pustaka/{Daftar_pustaka}/deletedata', 'Daftar_pustakaController@deletedata')
                ->name('Daftar_pustaka.deletedata');  
        Route::resource('Daftar_pustaka', Daftar_pustakaController::class); 
    //-----------------------------------------------------------  
            Route::get('Halaman_pengesahan/Penelitian/{Penelitian}', 'Halaman_pengesahanController@Penelitian')
                ->name('Halaman_pengesahan.Penelitian');  
            Route::get('Halaman_pengesahan/{Halaman_pengesahan}/deletedata', 'Halaman_pengesahanController@deletedata')
                ->name('Halaman_pengesahan.deletedata');  
        Route::resource('Halaman_pengesahan', Halaman_pengesahanController::class); 
    //-----------------------------------------------------------  
    
 
 
Route::get('/', function () {
    return redirect()->route('login');
});


 





//route resource
// Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
