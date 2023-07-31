<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/hello', function(){
//     return view('hello');
// });

// Route::get('/', [TaskController::class, 'index']);
// Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.detail');


Route::get('/', function(){
    $data = [
        "title" => "Dashboard"
    ];

    return view('Contents.dashboard', $data);
});

Route::get('/tables', [UserController::class, 'index']);
