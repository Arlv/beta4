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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::get('/create','ItemController@vista');
Route::post('/create','ItemController@create');

Route::get('/item/vista','ItemController@read');
Route::get('/update/{id}','ItemController@update'); 


///funcional/////
Route::post('/create2','UsersController@create');
Route::get('/user/vista','UsersController@read');
Route::get('/destroy/{id}','UsersController@destroy');
Route::get('/update/{id}','UsersController@update'); 

Route::resource('users','UsersController');
Route::get('users/{id}/destroy', [
'uses'=> 'UsersController@destroy',
'as' => 'users.destroy'
] );
////////////////

Route::get('/stock/vista','StockController@read');


Route::get('reportes', 'PdfController@index');
Route::get('crear_reporte_porpais/{tipo}', 'PdfController@crear_reporte_porpais');
