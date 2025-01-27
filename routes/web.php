<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\FasilitasController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard Admin'
    ]);
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/adminkamar',[KamarController::class,'dashboard'])->name('admin.dashboardkamar');
Route::post('/storekamar',[KamarController::class, 'storekamar'])->name('storekamar');
Route::get('/deletekamar/{idKamar}',[KamarController::class, 'deletekamar'])->name('deletekamar');
Route::post('/updatekamar/{idKamar}',[KamarController::class, 'updatekamar'])->name('updatekamar');

Route::get('/adminpenghuni',[PenghuniController::class, 'index'])->name('admin.indexpenghuni');
Route::post('/storepenghuni',[PenghuniController::class,'storepenghuni'])->name('storepenghuni');
Route::get('/deletepenghuni/{idPenghuni}',[PenghuniController::class, 'deletepenghuni'])->name('deletepenghuni');
Route::post('/updatepenghuni/{idPenghuni}',[PenghuniController::class, 'updatepenghuni'])->name('updatepenghuni');



Route::get('/adminfasilitas', [FasilitasController::class, 'index'])->name('admin.indexfasilitas');
Route::post('/storefasilitas', [FasilitasController::class, 'storefasilitas'])->name('admin.storefasilitas');
Route::put('/updatefasilitas/{id}', [FasilitasController::class, 'updatefasilitas'])->name('admin.updatefasilitas');
Route::delete('/destroyfasilitas/{idFailitas}', [FasilitasController::class, 'destroyfasilitas'])->name('admin.destroyfasilitas');
