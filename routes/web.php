<?php

use App\Http\Controllers\Mycontroller;
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

Route::get('/', function () {
    return view('main');
});

Route::get('/zihad', function () {
    return "welcome zihad in 'LARAVEL WORLD' :)";
});

Route::get('/no_user', [Mycontroller::class, 'index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user-detail', 'UserDetailController');
Route::middleware('auth')->group(function (){
    Route::resource('education', 'EducationController');
    Route::resource('experience', 'ExperienceController');
    Route::resource('skill', 'SkillController');

});
