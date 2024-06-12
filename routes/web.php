<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', [PageController::class, 'landing'])->middleware('guest');

Route::get('/login', [AuthenticateController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthenticateController::class, 'register'])->name('register')->middleware('guest');
Route::post('/auth/register', [AuthenticateController::class, 'userRegister']);
Route::post('/auth/login', [AuthenticateController::class, 'userLogin']);
Route::post('/auth/logout', [AuthenticateController::class, 'logout'])->middleware('auth');

Route::get('/panel/dashboard', [PanelController::class, 'dashboard'])->middleware('auth');
Route::get('/panel/form', [PanelController::class, 'form'])->middleware('auth');

Route::resource('/panel/student', StudentController::class)->middleware('auth');
Route::get('/konfirm', function(){
    $data['status'] = 1;
    User::where('id', $_GET['data'])->update($data);

    return redirect('/panel/student')->with('success','data berhasil di konfirmasi');
});