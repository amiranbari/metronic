<?php

Route::prefix('panel')->middleware('web')->as('panel.')->group(function () {

    //login & logout
    Route::get('/login', 'App\Http\Controllers\Panel\AuthController@loginPage');
    Route::post('/login', 'App\Http\Controllers\Panel\AuthController@login')->name('login');

    Route::get('/logout', 'App\Http\Controllers\Panel\AuthController@logout')->name('logout');

    //authenticated user can
    Route::middleware(['auth:admin', 'permission'])->group(function () {
        //Dashboard
        Route::get('/', 'App\Http\Controllers\Panel\DashboardController@index')->name('index');

        //managers
        Route::resource('managers', 'App\Http\Controllers\Panel\ManagerController')->except(['edit', 'update', 'show']);


        Route::prefix('users')->as('users.')->group(function () {

            //permissions
            Route::get('{user}/permissions', 'App\Http\Controllers\Panel\UserController@permissions')->name('permissions');
            Route::post('{user}/permissions', 'App\Http\Controllers\Panel\UserController@setPermissions')->name('store.permissions');

            //roles
            Route::post('{user}/roles', 'App\Http\Controllers\Panel\UserController@setRoles')->name('store.roles');

        });

        //roles
        Route::resource('roles', 'App\Http\Controllers\Panel\RoleController')->except(['destroy', 'edit']);
    });

});




