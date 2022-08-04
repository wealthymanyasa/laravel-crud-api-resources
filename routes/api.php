<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get all the posts
Route::get('/posts', [PostController::class,'index']);
//create post
Route::post('/post', [PostController::class,'store']);
//get single post
Route::get('/posts/{id}', [PostController::class,'show']);
//update ppost
Route::put('/posts/{id}', [PostController::class,'update']);
//delete post
Route::delete('/posts/{id}', [PostController::class,'destroy']);

