<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('guest.index');
});


Route::get("/gettest", function() {
	return view("guest.form");
});
Route::post("/test",function(Request $req){
	$data=[
			"name"=>$req->post()["name"]

	];
	// return $data;
	return view("guest.table",["newdata"=>$data,]);
	// return $req->post()["name"];
})->name("testpost");