<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Order;
use App\Models\User;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




Route::get('/',[HomeController::class,'index']);
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/logout',[HomeController::class,'destroy']);





Route::get('/edit_profile',[UserController::class,'edit_profile']);
Route::post('/update_profile/{id}',[UserController::class,'update_profile']);
// Route::get('/changepassword',[HomeController::class,'changepassword']);
Route::get('/change-password', [UserController::class, 'changePassword'])->name('change-password');
Route::post('/update_password/{id}',[UserController::class,'updatePassword']);
Route::get('/allemp',[UserController::class,'allemp']);
Route::get('/allcus',[UserController::class,'allcus']);
Route::get('/editemp/{id}',[UserController::class,'editEmployee']);
// Route::get('/deleteemp',[UserController::class,'deleteemp']);
Route::get('/createEmp',[UserController::class,'createEmp']);
Route::post('/create_employee',[UserController::class,'create_employee']);



Route::get('/emporders',[OrderController::class,'empOrders']);
Route::get('/allorders',[OrderController::class,'allOrders']);
Route::get('/order',[OrderController::class,'order']);
Route::post('/makeOrder',[OrderController::class,'makeOrder']);
Route::get('/orders',[OrderController::class,'my_orders']);
Route::get('/done/{id}',[OrderController::class,'done']);