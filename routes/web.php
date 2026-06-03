<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

/* publik */

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/service', [ServiceController::class, 'index'])
    ->name('service');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitPengaduan'])->name('contact.store');

Route::get('/services', [ServiceController::class, 'index'])
    ->name('services.index');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/service/checkup', function () {
    return view('service.checkup');
})->name('service.checkup');

Route::get('/service/inpatient', function () {
    return view('service.inpatient');
})->name('service.inpatient');

Route::get('/service/vaccination', function () {
    return view('service.vaccination');
})->name('service.vaccination');

Route::get('/service/dentistry', function () {
    return view('service.dentistry');
})->name('service.dentistry');

Route::get('/service/surgery', function () {
    return view('service.surgery');
})->name('service.surgery');

Route::get('/service/laboratory', function () {
    return view('service.laboratory');
})->name('service.laboratory');

/* news publik */

Route::get('/news', [NewsController::class, 'publicIndex'])
    ->name('news.public');

Route::get('/news/{slug}', [NewsController::class, 'showPublic'])
    ->name('news.detail');

/* breeze */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

/* admin cms */

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('admin/news', NewsController::class);

});

require __DIR__.'/auth.php';