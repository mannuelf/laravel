<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('php/{name}', function ($name) {
    echo 'Hello There ' . $name;
});

Route::post('test', function () {
	echo 'POST';
});

Route::get('test', function() {
	echo '<form method="POST" action="test">';
	echo '<input type="submit" value="submit">';
	echo '<input type="hidden" value="DELETE" name="_method">';
	echo '</form>';
});

Route::put('test', function () {
	echo 'PUT';
});

Route::delete('test', function () {
	echo 'DELETE';
});

/*
 * Routes
 * Route::post(); // create an item
 * Route::get();  // Read an item
 * Route::put();  // Update an item
 * Route::delete(); // delete an item
*/

/*
Route::get('customer/{id}', function ($id) {
    $customer = App\Customer::find($id);
    echo $customer->name;
});

Route::get('patron', function() {
    $patron = App\Patrons::find();
    echo $patron->name;
});

Route::get('customer_name', function() {
    $customer = App\Customer::where('name', '=', 'Mannuel')->first();
    echo $customer->id;
});

Route::get('orders', function() {
   $orders = App\Orders::all();
    foreach($orders as $order) {
        echo $order->name . "<br />";
    }
});
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
