<?php

use Inertia\Inertia;
use function Termwind\render;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;

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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware("auth.redirect");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::get('/', [PostController::class, 'index'])->middleware("auth.redirect");

Route::post('/posts-create', [PostController::class, "store"]);



// Friend controller ===================================================

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/friend-request/accept', [FriendController::class, 'acceptRequest']);
    Route::post('/friend-request/send/{id}', [FriendController::class, 'sendRequest']);
    Route::get('/friend-page', [FriendController::class, 'index']);
});


// like (add) and post (remove) controller===================================================
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/like/add', [LikeController::class, 'store']);
    Route::post('/post/remove', [PostController::class, 'destroy']);
});
// Commment controller===================================================
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/comment/add', [CommentController::class, 'store']);
    Route::post('/comment/delete', [CommentController::class, 'delete']);
});

//Profile controller ===================================================
Route::get("/profileshow/{id}", [ProfileController::class, "show"]);




// 404 page is redirect to home page===================================================
Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');
