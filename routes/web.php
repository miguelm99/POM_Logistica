<?php
Auth::routes();
Route::get('/', function () {
    return view('frontend/index');
})->name('index');

//backend
//Route::get('/admin', 'AdminController@admin')->name('admin');
//rota para a página principal do backend
Route::get('/adminIndex', function (){
    return view('backend/admin_template');
});
Route::get('/editClient', function (){
    return view('backend/editClient');
});

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
//rota para a página de login
Route::get('/loginAdmin', function (){
    return view('backend/loginAdmin');
})->name('loginAdmin');


Route::get('/user', 'UserController@index');
Route::get('/user/{user}', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::put('/editClient/{id}', 'UserController@update');

//Route::get('/user', 'UserController@store');
//Route::get('/user/{user}/edit', 'UserController@edit');
/*
Route::get('backend/editClient', function (){
    return view('backend/testes', [
        'user'=> \App\User::take(3)->latest()->get()
    ]);
});*/

Route::resource('clientes', 'ClientesController');




//frontend
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/loginCliente', function (){
    return view('frontend/login');
})->name('loginCliente');
Route::get('/client', 'AdminController@client')
    ->middleware('is_admin')
    ->name('client');
Route::get('/registCliente', function (){
    return view('frontend/registar');
})->name('registCliente');

//Route::get('/index', function (){
//    return view('frontend/index');
//});

//Route::post ( '/login', 'MainController@login' );
//Route::post ( 'registar', 'MainController@register' );
//Route::get ( '/logout', 'MainController@logout' );
