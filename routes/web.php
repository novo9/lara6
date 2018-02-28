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

use App\Task;
//Route::get('/matrix/register', 'MatrixController@registrtationForm');

//Route::post('/matrix/register', 'MatrixController@register')->name('matrix.register');
//Route::get('account', 'MatrixController@account')->name('matrix.account');

//Route::post('/tasks','TaskController@create');

Route::get('/','TaskController@index');
Route::get('/tasks','TaskController@index');
Route::get('/tasks/create','TaskController@create');
Route::post('/tasks','TaskController@store');
Route::get('/tasks/incomplete','TaskController@incomplete');



/*

Route::get('test',function(){
    $data = ['key1'=>'val1'];
    return view('test',['data'=> $data]);

   // return view('test')->with('data', $data);
});




Route::get('/tasks','TaskController@index');
Route::get('/tasksinc','TaskController@incomplete');
Route::get('/task/{task}','TaskController@show');







Auth::routes();
Route::get('task/create/{text}', 'TaskController@create');
