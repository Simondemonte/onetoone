<?php
use App\User;
use App\Address;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert', function(){
	$user = User::findOrFail(1);
	$address = new Address(['name' => 'JL.Panjang Sekali Gak Nyampe2.']);
	
	$user->address()->save($address);
});
	
Route::get('/update', function(){
	 //$address = Address:where('user_id', 1)->first();
	//$Address = Address:where('user_id', '=', 1)->first();
	$address = Address::whereUserId(1)->first();
	
	$address->name = "JL.Pendek Sekali, langsung nyampe";
	$address->save();
});