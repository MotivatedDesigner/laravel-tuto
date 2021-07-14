<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/', function (  ) {
    return view('index');
});

// Route::get('/login', [UserController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{post}', [PostController::class, 'update']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store']);
// Route::view();

Route::get('/projects',[ProjectController::class, 'index']);

Route::get('projects/{project}', [ProjectController::class, 'edit']); 

Route::put('projects/{project}', [ProjectController::class, 'update']); 
