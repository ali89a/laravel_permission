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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->namespace('AccessControl')->prefix('access-control')->group(function () {

    Route::group(['middleware' => ['permission:access_control_user_controller_index|access_control_user_controller_create|access_control_user_controller_store']], function () {

        Route::resource('user', 'UserController');

    });


    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::resource('matrix', 'AclController');
    Route::post('change-role-permission', 'AclController@change_role_permission');

//        Route::get('role-user-matrix', 'AclController@role_user_matrix')->name('role-user-matrix');
//        Route::post('role-user-matrix', 'AclController@store_role_user_matrix')->name('role-user-matrix.store');
//        Route::get('user-permission-matrix', 'AclController@user_permission_matrix')->name('user-permission-matrix');
//        Route::post('user-permission-matrix', 'AclController@store_user_permission_matrix')->name('user-permission-matrix.store');


//        Route::resource('oauth-access', 'OAuthAccessController');
//        Route::resource('route-permit', 'RoutePermitController');
//        Route::post('update-permit-status', 'RoutePermitController@update_permit_status');
//        Route::resource('sidebar-map', 'SidebarMapController')->except('create', 'destroy', 'show');
//        Route::post('change-sidebar-order', 'SidebarMapController@change_sidebar_order');
    //Route::get('route-logs', 'AclController@route_logs');

});
