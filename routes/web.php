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

Route::get('login', function () {
    return view('login');
});

Route::get('portofolio', function () {
    return view('portofolio');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('home', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('artikel', function () {
	$cruds = DB::table('cruds')->get();
    $categories = DB::table('categories')->get();
    return view('artikel', ['cruds' => $cruds], ['categories'=>$categories]);
});
Route::get('artikel/filter/{id}', function ($id) {
    $crudsFilter = DB::table('cruds')->where('qty', $id)->get();
    $categories = DB::table('categories')->get();
    return view('artikelFilter', ['crudsFilter' => $crudsFilter], ['categories'=>$categories]);
});
Route::get('create', function () {
    return view('create');
});
Route::get('cruds', function () {
    return view('cruds');
});
Route::get('crudpost', function () {
    return view('crudpost');
});
Route::get('dataqty', function () {
    return view('dataqty');
});
Route::get('createqty', function () {
    return view('createqty');
});
Route::get('editqty', function () {
    return view('editqty');
});


Auth::routes();

Route::resource('cruds','CrudController');

Route::resource('categories','CategorieController');

Route::get('/membership', 'role@index')->name('lihatdata');


Route::get('/home', 'HomeController@index')->name('home');
