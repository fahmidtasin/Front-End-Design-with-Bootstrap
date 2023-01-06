<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/',[FrontController::class, 'blogPage'])->name('blog_page');
Route::get('/details',[FrontController::class, 'blogDetails'])->name('details_page');

