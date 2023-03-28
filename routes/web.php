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
