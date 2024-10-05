<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
// api 
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FriendController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [UserController::class, 'store']);

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return response()->json(['message' => 'Email verified successfully']);
})->middleware(['auth.session', 'signed'])->name('verification.verify');


//page profile 

Route::get('/users/{id}', [ProfileController::class, 'show']);

//post crud
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('posts', PostController::class);
});



//routes/api.php
























Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
