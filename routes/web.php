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

// Route::get('admin', function () {
// 	echo "Selamat Datang Admin";  
// })->middleware('auth');

Route::get('k', function () {
	$kategori = App\Kategori::where('id_kategori', '=', 1)->first();
	echo "Produk untuk Kategori"." ".$kategori->nama_kategori.":";
	foreach ($kategori->produk as $data) {
		echo "<li>".$data->nama_produk."</li>";
	}
});

// Route::resource('produk', 'ProdukController');



Route::group(['middleware'=>'auth'], function(){
	Route::resource('produk', 'ProdukController');

	// Route::resource('create', 'ProdukController@create');

	Route::get('admin', function () {
		echo "Selamat Datang Admin";  
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index');
