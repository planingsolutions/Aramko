<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Front\MainPageController;


/*
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('descriptionOfeachProject/{id}', [MainPageController::class,'desprojects'])->name('descriptionOfeachProject');
    Route::get('Projects', [MainPageController::class,'AllProjects'])->name('Projects');
    Route::get('jobs', [MainPageController::class,'jobsform'])->name('jobs');

    Route::get('', [MainPageController::class,'index']);


});

Route::get('', [MainPageController::class,'index']);



Route::get('login/lang/{lang}', [LanguageController::class, 'swap'])->name('language');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__ . '/frontend/');
});


// Route::group(['namespace' => 'Front', 'as' => 'front.'], function () {
//     include_route_files(__DIR__.'/front/');
// });


/*
 * Backend Routes
 * Namespaces indicate folder structure
 */

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */

    include_route_files(__DIR__ . '/backend/');
});




