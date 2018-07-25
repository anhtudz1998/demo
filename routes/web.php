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

Route::get('/', function () {
	return view('welcome');
});
Route::get('getForm', function () {
	dd('sdafasdf');
	return view('welcome');
});
Route::get('KhoaHoc', function () {
	return ('Xin chào các bạn');
});
Route::get('KhoaHoc/laravel', function () {
	echo "<h1>Khóa học laravel</h1>";
});
// truyền tham số trên route

Route::get('HoTen/{ten}',function($ten){
	echo "Tên của bạn là :  ".$ten;
});
Route::get('Laravel/{ngay}',function($ngay){
	echo "Ngô Xuân Tú :" .$ngay;
})->where(['ngay'=>'[0-9a-zA-Z]']);
// Định danh 
Route::get('Route1',['as'=>'MyRoute',function(){
	echo "Xin chao cac ban";
}]);


Route::get('Route2',function(){
	echo "Day la route 2";
})->name('MyRoute2');


Route::get('GoiTen',function(){
	return redirect()->route('MyRoute');
});
//Group
Route::group(['prefix'=>'MyGroup'],function(){
	// Gọi Route User 1 : domain/MyGroup/User1
	Route::get('User1',function(){
		echo "User1";
	});
	Route::get('User2',function(){
		echo "User2";
	});
	Route::get('User3',function(){
		echo "User3";
	});

});
// Goi controller
Route::get('Goicontroller','MyController@Xinchao');
Route::get('ThamSo/{ten}','MyController@KhoaHoc');

// URL 
Route::get('MyRequest','MyController@GetURL');
// Gui nhan du lieu voi request
Route::post('postForm',['as'=>'postForm','users'=>'MyController@postForm']);
Route::get('getForm',['as'=>'getForm','users'=>'MyController@getForm']);

