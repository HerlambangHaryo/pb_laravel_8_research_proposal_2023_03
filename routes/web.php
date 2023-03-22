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
