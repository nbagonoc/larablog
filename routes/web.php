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

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    //dashboard
    Route::get('/dashboard',[
        'uses' => 'DashboardController@index',
        'as' => 'dashboard'
    ]);
    
    //category
    Route::get('/category/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::post('/category/store',[
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::get('/categories',[
        'uses' => 'CategoriesController@index',
        'as' => 'category.index'
    ]);
    
    Route::get('/category/edit/{id}',[
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    Route::post('/category/update/{id}',[
        'uses' => 'CategoriesController@update',
        'as' => 'category.update '
    ]);

    Route::get('/category/delete/{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);
    
    //post 
    Route::get('/post/create',[
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);
    
    Route::post('/post/store',[
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

    Route::get('/posts',[
        'uses' => 'PostsController@index',
        'as' => 'post.index'
    ]);

    Route::get('/post/show/{id}',[
        'uses' => 'PostsController@show',
        'as' => 'post.show'
    ]);

});

