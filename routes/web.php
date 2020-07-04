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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });
Route::get('/index', 'PagesController@index')->name('dashboard');


Route::get('/fees', 'PagesController@fees')->name('cashiering.fees');
Route::get('/registration', 'PagesController@registration')->name('cashiering.registration');

//Student of Account
Route::get('/soa', 'PagesController@soa')->name('studentAccount.soa');
Route::get('/studentAccount.studentList', 'PagesController@studentList')->name('studentAccount.studentList');
Route::get('/subsidiary', 'PagesController@subsidiary')->name('studentAccount.subsidiary');
Route::get('/summary', 'PagesController@summary')->name('studentAccount.summary');

//Students
Route::get('/dashboard', 'PagesController@dashboard')->name('students.dashboard');
Route::get('/list', 'PagesController@list')->name('students.list');
Route::get('/addPayor', 'PagesController@addPayor')->name('students.addPayor');
Route::get('/records', 'PagesController@records')->name('students.records');

//library
Route::get('/manageBooks', 'PagesController@manageBooks')->name('library.manageBooks');
Route::get('/borrow', 'PagesController@borrow')->name('library.borrow');
Route::get('/return', 'PagesController@return')->name('library.return');
Route::get('/monitoring', 'PagesController@monitoring')->name('library.monitoring');

//teachears
Route::get('/manageTeachers', 'PagesController@manageTeachers')->name('teachers.manageTeachers');
Route::get('/faculties', 'PagesController@faculties')->name('teachers.faculties');
Route::get('/personnel', 'PagesController@personnel')->name('teachers.personnel');

//course
Route::get('/manageCourse', 'PagesController@manageCourse')->name('course.manageCourse');
Route::get('/course', 'PagesController@course')->name('course.course');

//events
Route::get('/manageEvents', 'PagesController@manageEvents')->name('events.manage');
Route::get('/addEvent', 'PagesController@addEvent')->name('events.addEvent');
Route::get('/upcomingEvents', 'PagesController@upcomingEvents')->name('events.upcomingEvents');

//messages
Route::get('/feedback', 'PagesController@feedback')->name('messages.feedback');
Route::get('/email', 'PagesController@email')->name('messages.email');
Route::get('/sms', 'PagesController@sms')->name('messages.sms');