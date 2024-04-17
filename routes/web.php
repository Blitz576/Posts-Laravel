<?php

// Routes
use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\PostController;


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

//root Route
Route::get('/',function(){
    return view('welcome');
});


//
////Posts Route
//Route::get('/posts',
//   [PostController::class,'index']
//);
//
//
//// Get Post
//Route::get('/posts/{id}',
//// Action
//[PostController::class,'show']
//
//)->where('id', '[0-9]+');


//
//// Create A post
//Route::get('posts/create',
//[PostController::class,'create']
//);
//
//// Store
//Route::post('posts/',
//[PostController::class,'store']
//);
//
//
//// Edit
//Route::get('/posts/{id}/edit',
//    [PostController::class,'edit']
//)->where('id', '[0-9]+');
//
//
//// Update
//Route::put('/posts/{id}/edit',
//    [PostController::class,'edit']
//)->where('id', '[0-9]+');
//
//Route::put('/posts/{id}/edit',
//[PostController::class,'update']
//)->where('id', '[0-9]+');
//
//
//# Delete
//Route::delete('/posts/{id}',
//[PostController::class,'delete']
//)->where('id', '[0-9]+');

// final route
Route::resource('posts',PostController::class);
