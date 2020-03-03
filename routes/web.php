<?php


Route::get('/', function () {
    return view('frontend/index');
});

Auth::routes();

//backend
//Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/adminIndex', function (){
    return view('backend/admin_template');
});
Route::get('/backend/loginAdmin', function (){
    return view('/backend/loginAdmin');
});

/*Route::get('/admin', function (){
    return view('backend/loginAdmin');
})->middleware('auth');*/
//Admin
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');


Route::resource('clientes', 'ClientesController');


//frontend
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', function (){
    return view('frontend/index');
});
