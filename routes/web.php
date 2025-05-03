<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\EmailController;

Route::get('/', [HomeController::class, 'index']);
Route::post('/submit', [FormController::class, 'submit'])->name('form.submit');
Route::post('/upload', [UploadController::class, 'store'])->name('upload');
Route::get('/download/{file}', [UploadController::class, 'download'])->name('download');
Route::get('/send-email', [EmailController::class, 'send']);
Route::get('/list', [FormController::class, 'list'])->name('submission.list'); // <- ini tambahan
