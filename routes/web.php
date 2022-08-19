<?php

use Illuminate\Support\Facades\Route;

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

Route::get('adminlte','\App\Http\Controllers\Admincontroller@index')->name('admit');

Route::get('/','\App\Http\Controllers\Homecontroller@index')->name('front');

// about us
Route::get('adminlte/about','\App\Http\Controllers\Aboutcontroller@listing')->name('about.listing');

Route::get('adminlte/about-create','\App\Http\Controllers\Aboutcontroller@create')->name('about.add');


// blog

Route::get('adminlte/blog','\App\Http\Controllers\Blogcontroller@listing')->name('blog.listing');

Route::get('adminlte/blog-create','\App\Http\Controllers\Blogcontroller@create')->name('blog.add');

Route::post('adminlte/blog-save-create','\App\Http\Controllers\Blogcontroller@savecreate')->name('blog.save-add');

// categories

Route::get('adminlte/categories','\App\Http\Controllers\Categoriescontroller@listing')->name('categories.listing');

Route::get('adminlte/categories-add','\App\Http\Controllers\Categoriescontroller@create')->name('categories.add');

Route::post('adminlte/categories-saveadd','\App\Http\Controllers\Categoriescontroller@savecreate')->name('categories.save-add');

Route::get('adminlte/{id}/categories-edit','\App\Http\Controllers\Categoriescontroller@edit')->name('categories.edit');

Route::post('adminlte/categories-save-edit','\App\Http\Controllers\Categoriescontroller@update')->name('categories.save-edit');

Route::get('adminlte/{id}/  categories-delete','\App\Http\Controllers\Categoriescontroller@delete')->name('categories.delete');

// tags

Route::get('adminlte/tags','\App\Http\Controllers\Tagscontroller@listing')->name('tag.listing');

Route::get('adminlte/tags-add','\App\Http\Controllers\Tagscontroller@create')->name('tag.add');

Route::post('adminlte/tags-add','\App\Http\Controllers\Tagscontroller@savecreate')->name('tag.save-add');

Route::get('adminlte/{id}/tags-edit','\App\Http\Controllers\Tagscontroller@edit')->name('tag.edit');

Route::post('adminlte/tags-save-edit','\App\Http\Controllers\Tagscontroller@update')->name('tag.save-edit');

Route::get('adminlte/{id}/tags-delete','\App\Http\Controllers\Tagscontroller@delete')->name('tag.delete');
