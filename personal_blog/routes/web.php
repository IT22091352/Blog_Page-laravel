<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index'])->name("home");

//admin
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/{post_id}/delete', [AdminController::class, 'delete'])->name('admin.delete');
    Route::post('/{post_id}/update', [AdminController::class, 'update'])->name('admin.update');
});
