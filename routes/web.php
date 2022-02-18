<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserContent;
use Illuminate\Support\Facades\Auth;
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
    if (Auth::user()){
        redirect('/home');
    }

    return view('welcome');
});

// alternate route for loged in users to see the homepage.
Route::get('/welcome', function(){
    return view('welcome');
});

// Other system routes defined
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('/user_sessions', 'UserContent');

// pracice dashboard urls
// Route::get('/practice_dashboard', 'Practice/DashboardController');
// this is just a conteporary fix for what I need, 
// Route::get('practice_dashboard', function(){
//     // we can define a few things we need to get the practice dashboard and directly pass them to this view.

//     return view('practice_dashboard');
// });

Route::resource('practice_dashboard', 'PracticeDasboardController');
Route::resource('modules', 'ModulesController');
Route::post('update_module_status', 'ModulesController@update_module_status');

// course route.
Route::resource('courses', 'CourseController');
Route::resource('course_module', 'CourseModuleController');