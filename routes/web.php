<?php

use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\RootController;
use App\Http\Controllers\Installer\InstallerController;
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

Route::prefix('install')->name('installer.')->middleware(['web'])->group(function () {
    Route::get('/', [InstallerController::class, 'index'])->name('index');
    Route::get('/requirement', [InstallerController::class, 'requirement'])->name('requirement');
    Route::get('/permission', [InstallerController::class, 'permission'])->name('permission');
    Route::get('/license', [InstallerController::class, 'license'])->name('license');
    Route::post('/license', [InstallerController::class, 'licenseStore'])->name('licenseStore');
    Route::get('/site', [InstallerController::class, 'site'])->name('site');
    Route::post('/site', [InstallerController::class, 'siteStore'])->name('siteStore');
    Route::get('/database', [InstallerController::class, 'database'])->name('database');
    Route::post('/database', [InstallerController::class, 'databaseStore'])->name('databaseStore');
    Route::get('/final', [InstallerController::class, 'final'])->name('final');
    Route::get('/final-store', [InstallerController::class, 'finalStore'])->name('finalStore');
});

Route::get('/', [RootController::class, 'index'])->middleware(['installed'])->name('home');
Route::prefix('payment')->name('payment.')->middleware(['installed'])->group(function () {
    Route::get('/{paymentGateway:slug}/pay/{order}', [PaymentController::class, 'index'])->name('index');
    Route::post('/{order}/pay', [PaymentController::class, 'payment'])->name('store');
    Route::match(['get', 'post'], '/{paymentGateway:slug}/{order}/success', [PaymentController::class, 'success'])->name('success');
    Route::match(['get', 'post'], '/{paymentGateway:slug}/{order}/fail', [PaymentController::class, 'fail'])->name('fail');
    Route::match(['get', 'post'], '/{paymentGateway:slug}/{order}/cancel', [PaymentController::class, 'cancel'])->name('cancel');
    Route::get('/successful/{order}', [PaymentController::class, 'successful'])->name('successful');
});

Route::get('/clearer', function(){
    \Illuminate\Support\Facades\Artisan::call('view:clear');
                $result = \Illuminate\Support\Facades\Artisan::output();
                dump($result);

                \Illuminate\Support\Facades\Artisan::call('route:clear');
                $result = \Illuminate\Support\Facades\Artisan::output();
                dump($result);

                \Illuminate\Support\Facades\Artisan::call('cache:clear');
                $result = \Illuminate\Support\Facades\Artisan::output();
                dump($result);

                \Illuminate\Support\Facades\Artisan::call('config:clear');
                $result = \Illuminate\Support\Facades\Artisan::output();
                dump($result);

                \Illuminate\Support\Facades\Artisan::call('config:cache');
                $result = \Illuminate\Support\Facades\Artisan::output();
                dump($result);
})->name('call.run');

Route::get('/link', function(){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
                $result = \Illuminate\Support\Facades\Artisan::output();
                dump($result);
})->name('call.link');
