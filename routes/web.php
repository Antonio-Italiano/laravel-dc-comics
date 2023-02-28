<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;
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

// for characters
Route::get('/characters', [PageController::class, 'characters'])->name('characters');

// for comics
Route::get('/', [PageController::class, 'comics'])->name('comics');


// for movies
Route::get('/movies', [PageController::class, 'movies'])->name('movies');

// for tv
Route::get('/tv', [PageController::class, 'tv'])->name('tv');

// for games
Route::get('/games', [PageController::class, 'games'])->name('games');

// for collectibles
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');

// for videos
Route::get('/videos', [PageController::class, 'videos'])->name('videos');

// for fans
Route::get('/fans', [PageController::class, 'fans'])->name('fans');

// for news
Route::get('/news', [PageController::class, 'news'])->name('news');

// for shop
Route::get('/shop', [PageController::class, 'shop'])->name('shop');


// routes for comics details
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');


// Route::get('/comics/{index}', function ($index) {
//     $comics = config('comics');
//     return view('comic', ['comic' => $comics[$index]]);
//  })->name('comic');