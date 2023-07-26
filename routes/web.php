<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use App\Http\Controllers\CustomerFormController;
use Illuminate\Http\Request;
use App\Models\CustomerRegistration;
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

Route::get('/intro/{name?}/{id?}', function($name, $id = null){
    $data = compact('name', 'id');
    return view('introduction')->with($data);
});

Route::get('/home/{name?}', function($name = null){
    $data = compact('name');
    return view('home')->with($data);
});


// SINGLE ACTION CONTROLLER

Route::get('/greeting', SingleActionController::class);

// SINGLE ACTION CONTROLLER

// RESOURCE CONTROLLER

Route::resource('/photo', ResourceController::class);

// RESOURCE CONTROLLER


Route::get('/no-access' , function(){
    echo "You are not allowed to access this page";
});

Route::get('/login' , function(){
    session()->put('user_id' , 1);
    echo 'You are logged in';
});

Route::get('/logout' , function(){
    session()->forget('user_id');
    echo 'You are logout';
});


Route::get('/registration', [RegistrationController::class , 'index']);
Route::post('/registration', [RegistrationController::class , 'register']);
Route::get('/customer/create' , [CustomerFormController::class , 'render'])->middleware('guard');
Route::post('/customer-form' , [CustomerFormController::class , 'store']);

Route::get('/customer-form' , [CustomerFormController::class , 'view'])->middleware('guard');
Route::get('/customer/delete/{id}' ,[CustomerFormController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}' ,[CustomerFormController::class, 'edit']);
Route::post('/customer-form/update/{id}' ,[CustomerFormController::class, 'update']);

Route::get('/about' , function(){
    return view('layouts.about');
});
Route::get('/greeting' , function(){
    return view('layouts.greeting');
});

Route::get('get-all-session', function(){
   $session = session()->all();
   p($session);
});

Route::get('set-session', function(Request $request){
    $request->session()->put('user_name' , 'Fuzail Siddiqui');
    $request->session()->put('email' , 'fuzailsiddiqui28@gnail.com');
    $request->session()->flash('status' , 'Success');
    return redirect('get-all-session');
 });


 Route::get('destroy-session' , function(){
    session()->forget('user_name');
    return redirect('get-all-session');
 });




