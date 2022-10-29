<?php

use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/timeline', \App\Http\Livewire\Timeline\Show::class)->name('timeline');
    Route::get('/followers', \App\Http\Livewire\Followers\Show::class)->name('followers');
    Route::get('/following', \App\Http\Livewire\Following\Show::class)->name('following');
    Route::get('/postTweet', \App\Http\Livewire\Timeline\Form::class)->name('postTweet');
    Route::get('/profile/{username}', \App\Http\Livewire\Profile\Show::class)->name('profile');
    Route::get('/list_profiles', \App\Http\Livewire\Profile\ListProfiles::class)->name('list_profiles');
});

require __DIR__.'/auth.php';
