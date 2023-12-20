<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashbordController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ErrorController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\Admin\UserController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [HomeController::class,'Index']);
Route::post('/message', [HomeController::class,'Message']);
Route::get('/user', [HomeController::class,'User']);
Route::get('/login', [AuthController::class, 'Login']);
Route::get('/forgot', [AuthController::class, 'Forgot']);
Route::post('/admin_log', [AuthController::class, 'Login_check']);
//Route::post('/next', [AuthController::class, 'Next']);


Route::group([ 'middleware' => 'admin' ], function(){
    Route::get('/dashbord', [DashbordController::class, 'Index']);
    Route::get('/logout', [AuthController::class, 'Logout']);
    Route::get('/error404', [ErrorController::class, 'Notfound']);
    Route::controller(UserController::class)->group(function () {
        Route::get('/userlist', 'ListAction');
        Route::get('/createuser', 'CreateUserAction');
        Route::post('/add', 'RegAction');
    });
    Route::controller(SettingsController::class)->group(function () {
        Route::get('/settings/{id}', 'BasicAction');
        Route::post('/update/{id}', 'UpdateAction');
        Route::post('/insert/{id}', 'InsertAction');
        Route::post('/delete/{id}/{sl}', 'DeleteAction');
    });
    Route::controller(ErrorController::class)->group(function(){
        Route::get('/error404', ' Notfound');
    });
    Route::controller(MessageController::class)->group(function () {
        Route::get('/show/{id}', 'SelectAction');
        Route::post('/mms/{id}', 'FetchAction');
    });
});