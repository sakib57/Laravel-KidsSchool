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
    return view('user/user_home');
})->name('base');

Route::get('locale/{locale}',function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cartoons-limited', 'HomeController@create_cartoon_view_limited')->name('view.cartoon_limited');
Route::get('/education-video-limited', 'HomeController@create_edu_view_limited')->name('view.v_edu_limited');
Route::get('/cartoons', 'HomeController@create_cartoon_view')->name('view.cartoon');
Route::get('/education-video', 'HomeController@create_education_view')->name('view.education');
Route::get('/video_page', 'HomeController@create_video_page')->name('view.video.page');

Route::get('/user_exam','ExamsController@exam')->name('user.exam');
Route::get('/exam_start/{id}','HomeController@exam_start')->name('exam.start');
Route::post('/exam_class','HomeController@exam_class')->name('exam.class');
Route::post('/exam_result','HomeController@exam_result')->name('exam.result');


/*======================================= All Admin routes =================================*/
Route::prefix('admin')->group(function(){


	Route::get('/admins', 'AdminController@create')->name('admin.admins');
	Route::get('/books_add', 'BooksController@index')->name('admin.books.add');
	Route::get('/books_manage', 'BooksController@create')->name('admin.books.manage');

	Route::get('/videos_add', 'VideosController@add_video')->name('admin.videos.add');
	Route::get('/videos_manage', 'VideosController@create_video')->name('admin.videos.manage');

	Route::get('/question_add', 'ExamsController@create_question')->name('admin.question.add');
	Route::get('/question_manage', 'ExamsController@manage_question')->name('admin.question.manage');
	Route::post('/question_store', 'ExamsController@question_store')->name('admin.question.store');





    Route::get('/users', 'AdminController@show_user')->name('admin.user');
	Route::get('/users_delete/{id}', 'AdminController@delete_user')->name('user.delete');
	Route::get('/video_delete/{id}', 'AdminController@delete_video')->name('video.delete');
	Route::get('/question_delete/{id}', 'AdminController@delete_question')->name('question.delete');


	Route::get('/pdf_view/{file}','BooksController@show_pdf')->name('admin.view.pdf');
	Route::get('/question_view/{file}','ExamsController@show_question')->name('admin.view.question');


	Route::post('/store', 'AdminController@store')->name('admin.store');
	Route::post('/books_store', 'BooksController@store')->name('admin.book.store');

	Route::post('/videos_store', 'VideosController@store')->name('admin.video.store');
	Route::post('/exams_store', 'ExamsController@store')->name('admin.exam.store');



	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

});
