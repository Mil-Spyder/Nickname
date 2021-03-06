<?php

use App\Http\Controllers\NicknameController;
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

Route::get('',[NicknameController::class,'index'])->name('home');
Route::get('/teacher/create',[NicknameController::class,'create'])->name('teacher.create');
Route::post('/teacher/create',[NicknameController::class,'store'])->name('teacher.store');
Route::get('/teacher/{id}',[NicknameController::class,'show'])->name('teacher.show');

Route::match(['get', 'post'], '/teacher/update/{id}', [NicknameController::class, 'update'])->name('teacher.update');

// Supprimer un enseignant
Route::get('/teacher/delete/{teacherId}', [NicknameController::class, 'delete'])->name('teacher.delete');





/*

//routing using the controller
Route::get('', '\App\Http\Controllers\NicknameController@index');

//basic routing
Route::get('', function () {
    return view('home');
});



example
Route::get('/', function () {
    return view('welcome');
});

//json datas
Route::get('/surnom', function () {
    return response()->json([
        'name' => 'Name',
        'nickname' => 'Simpman'
    ]);
});
//basic routing
Route::get('/details', function () {
    return view('details');
});
*/