<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/admin_login', function () {
        return view('admin/auth/admin-login');
    });
    Route::get('/home', 'HomeController@index');


    /*admin*/
    /*Route::group(['namespace' => 'Admin', 'as' => 'admin::', 'prefix' =>'admin', 'middleware' => ['auth', 'role:super-admin|admin']],function(){
        Route::get('/',['middleware' => ['permission:manage-admins'],'as' => 'dashboard','uses'=> 'DashboardController@index']);
    });*/
    Route::group(['namespace' => 'Admin', 'as' => 'admin::', 'prefix' =>'admin', 'middleware' => ['auth','role:super-admin|admin']],function(){

        Route::get('/dashboard',['as' => 'dashboard','uses'=> 'DashboardController@dashboard']);
        Route::get('/',function(){
            return redirect()->route('admin::dashboard');
        });

        /*Courses*/
        Route::get('/category/level',['as' => 'course.level', 'uses' => 'CourseController@level']);
        Route::get('/category/course',['as' => 'course.index', 'uses' => 'CourseController@index']);
        Route::get('/category/specialization',['as' => 'course.specialization', 'uses' => 'CourseController@specialization']);
        Route::get('/category/subject',['as' => 'course.subject', 'uses' => 'CourseController@subject']);

        /*Pages*/
        Route::get('/pages',['as' => 'pages', 'uses' => 'PagesController@index']);
        Route::get('/pages/add',['as' => 'pages.add', 'uses' => 'PagesController@addPage']);

        /*My Account*/
        Route::get('/my-account',['as' => 'myAccount','uses' => 'UserController@myAccount']);
        Route::post('/my-account',['as' => 'myAccount.update','uses' => 'UserController@update']);

        Route::get('/logout',['as' => 'logout','uses' => 'UserController@logout']);
    });
    /*Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
        Route::get('/', 'AdminController@welcome');
        Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
    });*/

});
