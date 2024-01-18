<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Models\Content;
use App\Models\User;



use App\Http\Controllers\PageController;
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
        // In your controller or view composer
        $user=User::all();
        $content = Content::first();

    return view('welcome')->with('content',$content)->with('user',$user);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('/pages', [PageController::class, 'store'])->name('pages.store');
    Route::get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');
});
Route::put('/content/update', [PageController::class, 'updateContent'])->name('content.update');
