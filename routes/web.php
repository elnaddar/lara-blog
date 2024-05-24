<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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
    return view('welcome');
});

Route::get('/posts', [PostsController::class, "index"]) -> name('posts.index');
Route::get('/posts/create', [PostsController::class, "create"]) -> name("posts.create");
Route::post('/posts', [PostsController::class, "store"]) -> name("posts.store");
Route::get('/posts/{post}', [PostsController::class, "show"]) -> name('posts.show');
Route::get('/posts/{post}/edit', [PostsController::class, "edit"]) -> name('posts.edit');
Route::put('/posts/{post}', [PostsController::class, "update"]) -> name('posts.update');
