<?php
//chứa các đường dẫn được định nghĩa trước
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


/*Route::get('/post', function () { //cach viet 1
	if (Cache::has("post")) { //kiểm tra key: post có hay ko, có thì lấy ra, ko có thì gán
		$post = Cache::get('post');
	}
	else{
		$post = "aaaaa";
		Cache::set("post", $post, 60);
	}
	echo $post; die;
});*/

//cach 2
Route::get('/post1', function(){
	$post = Cache::remember("post", 60, function(){
		return "post";
	});
	echo $post; die;
});

Route::get('/post', "\App\Http\Controllers\PostController@index");

Route::post("/post", "\App\Http\Controllers\PostController@store"); //store: la phuong thuc cua laravel dung Post du lieu khi dung ham creat

Route::get("/book", "\App\Http\Controllers\BookController@index");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
