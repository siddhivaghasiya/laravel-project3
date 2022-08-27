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

Route::get('adminlte/{id}/blog-edit','\App\Http\Controllers\Blogcontroller@edit')->name('blog.edit');

Route::post('adminlte/blog-save-edit','\App\Http\Controllers\Blogcontroller@update')->name('blog.save-edit');

Route::get('adminlte/{id}/blog-delete','\App\Http\Controllers\Blogcontroller@delete')->name('blog.delete');


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

// department

Route::get('adminlte/department','\App\Http\Controllers\Departmentcontroller@listing')->name('department.listing');

Route::get('adminlte/department-create','\App\Http\Controllers\Departmentcontroller@create')->name('department.create');

Route::post('adminlte/department-savecreate','\App\Http\Controllers\Departmentcontroller@savecreate')->name('department.save-create');

Route::get('adminlte/{id}/department-edit','\App\Http\Controllers\Departmentcontroller@edit')->name('department.edit');

Route::post('adminlte/{id}/department-edit','\App\Http\Controllers\Departmentcontroller@update')->name('department.save-edit');

Route::get('adminlte/{id}/department-delete','\App\Http\Controllers\Departmentcontroller@delete')->name('department.delete');

// Doctors

Route::get('adminlte/doctors','\App\Http\Controllers\Doctorscontroller@listing')->name('doctors.listing');

Route::get('adminlte/doctors-create','\App\Http\Controllers\Doctorscontroller@create')->name('doctors.add');

Route::post('adminlte/doctors-savecreate','\App\Http\Controllers\Doctorscontroller@savecreate')->name('doctors.save-add');

Route::get('adminlte/{id}/doctors-edit','\App\Http\Controllers\Doctorscontroller@edit')->name('doctors.edit');

Route::post('adminlte/{id}/doctors-saveedit','\App\Http\Controllers\Doctorscontroller@update')->name('doctors.save-edit');

Route::get('adminlte/{id}/doctors-delete','\App\Http\Controllers\Doctorscontroller@delete')->name('doctors.delete');

// Service

Route::get('adminlte/service','\App\Http\Controllers\Servicecontroller@listing')->name('service.listing');

Route::get('adminlte/service-add','\App\Http\Controllers\Servicecontroller@create')->name('service.add');

Route::post('adminlte/service-save-add','\App\Http\Controllers\Servicecontroller@savecreate')->name('service.save-add');

Route::get('adminlte/{id}/service-edit','\App\Http\Controllers\Servicecontroller@edit')->name('service.edit');

Route::post('adminlte/{id}/service-save-edit','\App\Http\Controllers\Servicecontroller@update')->name('service.save-edit');





