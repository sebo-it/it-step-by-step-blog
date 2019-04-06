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

Route::get('/test', function () {
    return view('test');
});

Route::get('/', [
    'uses' => 'BlogPostsController@index',
    'as' => 'blogPosts.index'
]);

Route::get('/create', [
    'uses' => 'BlogPostsController@create',
    'as' => 'blogPosts.create'
]);

Route::post('/store', [
    'uses' => 'BlogPostsController@store',
    'as' => 'blogPosts.store'
]);

Route::get('/{id}/edit', [
    'uses' => 'BlogPostsController@edit',
    'as' => 'blogPosts.edit'
]);

Route::put('/{id}/update', [
    'uses' => 'BlogPostsController@update',
    'as' => 'blogPosts.update'
]);

Route::patch('/{id}/update', [
    'uses' => 'BlogPostsController@update',
    'as' => 'blogPosts.update'
]);

Route::delete('/{id}/destroy', [
    'uses' => 'BlogPostsController@destroy',
    'as' => 'blogPosts.destroy'
]);

Route::get('/{id}/show', [
    'uses' => 'BlogPostsController@show',
    'as' => 'blogPosts.show'
]);

////////KATEGORIE/////////

Route::get('/categories', [
    'uses' => 'CategoriesController@index',
    'as' => 'categories.index'
]);

Route::get('/categories/{categoryName}', [
    'uses' => 'CategoriesController@postsOfCategory',
    'as' => 'categories.posts'
]);

Route::get('/category/create', [
    'uses' => 'CategoriesController@create',
    'as' => 'categories.create'
]);

Route::post('/category/store', [
    'uses' => 'CategoriesController@store',
    'as' => 'categories.store'
]);

Route::get('/category/{id}/edit', [
    'uses' => 'CategoriesController@edit',
    'as' => 'categories.edit'
]);

Route::put('/category/{id}/update', [
    'uses' => 'CategoriesController@update',
    'as' => 'categories.update'
]);

Route::patch('/category/{id}/update', [
    'uses' => 'CategoriesController@update',
    'as' => 'categories.update'
]);

Route::delete('/category/{id}/destroy', [
    'uses' => 'CategoriesController@destroy',
    'as' => 'categories.destroy'
]);
////////Komentarz/////////
Route::post('/{id}/store', [
    'uses' => 'CommentsController@store',
    'as' => 'comments.store'
]);

////////KONTAKT///////////
Route::get('/contact', [
    'uses' => function(){return view('contact.index');},
    'as' => 'contact.index'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
