<?php
Auth::routes(['verify'=>true]);
Route::get('/', function () {
    return view('frontend/index');
})->name('index');

//backend
Route::post('homeFrontend/media', 'IndexfrontendController@storeMedia')
    ->name('homeFrontend.storeMedia');
Route::resource('homeFrontend', 'IndexfrontendController');

//rota guias
Route::resource('guias', 'GuiasController');

// rota guiatransportes
Route::resource('guiatransportes', 'GuiatransportesController');

//armazens
Route::resource('armazens', 'ArmazensController');

//moradas
Route::resource('moradas', 'MoradasController')->name('*', 'admin');

//Route::get('/admin', 'AdminController@admin')->name('admin');
//rota para a página principal do backend
Route::get('/adminIndex', function (){
    return view('backend/admin_template');
});
Route::get('/editClient', function (){
    return view('backend/editClient');
});

//Route::get('/editIndex', function (){
//    return view('backend/index/index');
//});




//Route::get('/editindex/create', 'IndexfrontendController@create');

//Route::get('/editIndex', 'IndexfrontendController@index');
//Route::put('/editIndex/{id}', 'IndexfrontendController@update');

Route::get('/admin', 'AdminController@admin')
//   ->middleware('is_admin')
    ->name('admin');
//rota para a página de login
Route::get('/loginAdmin', function (){
    return view('backend/loginAdmin');
})->name('loginAdmin') ->middleware('is_admin');


Route::get('/user', 'UserController@index');
Route::get('/user/{user}', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::put('/editClient/{id}', 'UserController@update');
Route::get('/adminIndex/{id}', 'UserController@destroy');

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

Route::get('/resetPassword', function (){
    return view('frontend/resetPassword');
})->name('resetPassword');

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
