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

// front

Route::get('about','\App\Http\Controllers\Homecontroller@about')->name('front.about');

Route::get('blog','\App\Http\Controllers\Homecontroller@blogsidebar')->name('front.blog-sidebar');

Route::get('blog/{id}/viewblog','\App\Http\Controllers\Homecontroller@blogedit')->name('front.blog-singlepage');

Route::post('/savenewslater','\App\Http\Controllers\Homecontroller@savecreate')->name('newslater.save');

Route::post('/appointment','\App\Http\Controllers\Homecontroller@saveappointment')->name('appointment.save');

Route::get('service','\App\Http\Controllers\Homecontroller@service')->name('front.service');

Route::get('department','\App\Http\Controllers\Homecontroller@department')->name('front.department');

Route::get('department/{id}/department-single','\App\Http\Controllers\Homecontroller@departmentedit')->name('front.department-single');

Route::get('doctors','\App\Http\Controllers\Homecontroller@doctors')->name('front.doctors');

Route::get('doctors/{id}/doctor-single','\App\Http\Controllers\Homecontroller@doctorsedit')->name('front.doctors-single');

Route::get('appointment','\App\Http\Controllers\Homecontroller@appointment')->name('front.appointment');

Route::get('contact','\App\Http\Controllers\Homecontroller@contact')->name('front.contact');

Route::post('contact/save','\App\Http\Controllers\Homecontroller@savecontact')->name('front.contact-save');


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

Route::get('adminlte/{id}/service-delete','\App\Http\Controllers\Servicecontroller@delete')->name('service.delete');

// contact

Route::get('adminlte/contact','\App\Http\Controllers\Contactcontroller@listing')->name('contact.listing');

Route::get('adminlte/contact-create','\App\Http\Controllers\Contactcontroller@create')->name('contact.add');

Route::post('adminlte/contact-save-create','\App\Http\Controllers\Contactcontroller@savecreate')->name('contact.save-add');

Route::get('adminlte/{id}/contact-edit','\App\Http\Controllers\Contactcontroller@edit')->name('contact.edit');

Route::post('adminlte/{id}/contact-save-edit','\App\Http\Controllers\Contactcontroller@update')->name('contact.save-edit');

Route::get('adminlte/{id}/contact-delete','\App\Http\Controllers\Contactcontroller@delete')->name('contact.delete');

// pages

Route::get('adminlte/pages','\App\Http\Controllers\Pagescontroller@listing')->name('pages.listing');

Route::get('adminlte/pages-create','\App\Http\Controllers\Pagescontroller@create')->name('pages.add');

Route::post('adminlte/pages-save-create','\App\Http\Controllers\Pagescontroller@savecreate')->name('pages.save-add');

Route::get('adminlte/{id}/pages-edit','\App\Http\Controllers\Pagescontroller@edit')->name('pages.edit');

Route::post('adminlte/{id}/pages-save-edit','\App\Http\Controllers\Pagescontroller@update')->name('pages.save-edit');

Route::get('adminlte/{id}/pages-delete','\App\Http\Controllers\Pagescontroller@delete')->name('pages.delete');

// social

Route::get('adminlte/social','\App\Http\Controllers\Socialcontroller@listing')->name('social.listing');

Route::get('adminlte/social-create','\App\Http\Controllers\Socialcontroller@create')->name('social.add');

Route::post('adminlte/social-savecreate','\App\Http\Controllers\Socialcontroller@savecreate')->name('social.save-add');

Route::get('adminlte/{id}/social-edit','\App\Http\Controllers\Socialcontroller@edit')->name('social.edit');

Route::post('adminlte/{id}/social-save-edit','\App\Http\Controllers\Socialcontroller@update')->name('social.save-edit');

Route::get('adminlte/{id}/social-delete','\App\Http\Controllers\Socialcontroller@delete')->name('social.delete');

// newslater

Route::get('adminlte/newslater','\App\Http\Controllers\Newslatercontroller@listing')->name('newslater.listing');

Route::get('adminlte/{id}/newslater-delete','\App\Http\Controllers\Newslatercontroller@delete')->name('newslater.delete');

// appointment

Route::get('adminlte/appointment','\App\Http\Controllers\Appointmentcontroller@listing')->name('appointment.listing');

Route::get('adminlte/{id}/appointment-delete','\App\Http\Controllers\Appointmentcontroller@delete')->name('appointment.delete');

// // Achievement

Route::get('adminlte/achievement','\App\Http\Controllers\Achievementcontroller@listing')->name('achievement.listing');

Route::get('adminlte/achievement-add','\App\Http\Controllers\Achievementcontroller@create')->name('achievement.add');

Route::post('adminlte/achievement-saveadd','\App\Http\Controllers\Achievementcontroller@savecreate')->name('achievement.save-add');

Route::get('adminlte/{id}/achievement-edit','\App\Http\Controllers\Achievementcontroller@edit')->name('achievement.edit');

Route::post('adminlte/{id}/achievement-saveedit','\App\Http\Controllers\Achievementcontroller@update')->name('achievement.save-edit');

Route::get('adminlte/{id}/achievement-delete','\App\Http\Controllers\Achievementcontroller@delete')->name('achievement.delete');
