<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillsController;

Route::get('/defaultroot', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth','admin');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/skills', [SkillsController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/certificate', [CertificateController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::resource('homes', HomeController::class);
Route::resource('abouts', AboutController::class);

Route::resource('/admin/dashboard/skill', AdminSkillController::class);
Route::resource('/admin/dashboard/certificate', AdminCertificateController::class);

require __DIR__.'/auth.php';
