<?php

use App\Http\Controllers\Admin\HomeController;

Route::get('', 'FrontController@blogList')->name('index');


Route::redirect('/login', '/login');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

      // Course Categories
      Route::delete('course-categories/destroy', 'CourseCategoriesController@massDestroy')->name('course-categories.massDestroy');
      Route::resource('course-categories', 'CourseCategoriesController');

      
       // Books
        Route::delete('books/destroy', 'BooksController@massDestroy')->name('books.massDestroy');
        Route::post('books/media', 'BooksController@storeMedia')->name('books.storeMedia');
        Route::post('books/ckmedia', 'BooksController@storeCKEditorImages')->name('books.storeCKEditorImages');
        Route::resource('books', 'BooksController');


    
});


Route::group(['as' => 'frontend.'], function () {

    Route::get('/ads', function () {
        return view('frontend.ads');
    });

    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/', 'FrontController@blogList')->name('blog-list');
        Route::get('/{result}', 'FrontController@blogFilter')->name('blog-filter');
    });

    Route::get('search-result', 'FrontController@searchResult')->name('search-result');
    Route::get('/blog/{blog}', 'FrontController@blogSingle')->name('blog-single');
    
    
});