<?php

use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\NewsPost;
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
    $posts = NewsPost::orderBy('created_at', 'DESC')->paginate(5);
    return view('welcome', [
        'posts' => $posts,
    ]);
})->name('welcome');

Route::get('/tech', function () {
    $posts = NewsPost::where('category', 'tech')->orderBy('created_at', 'DESC')->paginate(5);
    return view('tech', [
        'posts' => $posts,
    ]);
})->name('tech');

Route::get('/national', function () {
    $posts = NewsPost::where('category', 'national')->orderBy('created_at', 'DESC')->paginate(5);
    return view('national', [
        'posts' => $posts,
    ]);
})->name('national');

Route::get('/international', function () {
    $posts = NewsPost::where('category', 'international')->orderBy('created_at', 'DESC')->paginate(5);
    return view('international', [
        'posts' => $posts,
    ]);
})->name('international');

// news posts routes
Route::get('/news', [NewsPostController::class, 'index']);
Route::get('/news/create/post', [NewsPostController::class, 'create']);
Route::post('/news/create/post', [NewsPostController::class, 'store']);
Route::get('/news/{newsPost}', [NewsPostController::class, 'show']);
Route::get('/news/{newsPost}/edit', [NewsPostController::class, 'edit']);
Route::put('/news/{newsPost}/edit', [NewsPostController::class, 'update']);
Route::delete('/news/{newsPost}', [NewsPostController::class, 'destroy']);


Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contactPost');


Route::view('/contact', 'contact');

Route::resource('newsPost', 'App\Http\Controllers\NewsPostController');

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    $posts = NewsPost::paginate(10);
    return view('Dashboard', [
        'posts' => $posts,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
