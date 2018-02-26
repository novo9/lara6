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

Route::get('/', function () {
    return view('posts.index');
});



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
