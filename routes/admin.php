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

Route::controller(App\Http\Controllers\Admin\HomeController::class)->group(function ()
{
    // Dashboard
    Route::get('/home', 'index')->name('home');
});

Route::prefix('personal')->name('info.')->controller(App\Http\Controllers\Admin\PersonalController::class)->group(function ()
{
    // Update Persenol Info
    Route::get('/show', 'show')->name('show');
    Route::get('/edit', 'edit')->name('edit');
    Route::post('/update', 'update')->name('update');

    // Update Profile Image
    Route::post('/updateProfileImage', 'updateProfileImage')->name('image');
});


Route::prefix('skills')->name('skills.')->controller(App\Http\Controllers\Admin\SkillsController::class)->group(function ()
{
    // Show Skill
    Route::get('/show', 'index')->name('show');

    // Add New Skill
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    // Update Skill
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');

    // Delete Skill
    Route::get('/{id}/delete', 'destroy')->name('delete');
});


Route::prefix('projects')->name('projects.')->controller(App\Http\Controllers\Admin\ProjectController::class)->group(function ()
{
    // Show Projects
    Route::get('show', 'index')->name('show');

    // Add New Project
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    // Update Project
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');

    // Delete Project
    Route::get('/{id}/delete', 'destroy')->name('delete');
});

Route::prefix('works')->name('works.')->controller(App\Http\Controllers\Admin\workcontroller::class)->group(function ()
{
    // Show Work Experiences
    Route::get('/show', 'index')->name('show');

    // Add New Work Experience
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    // Update Work Experience
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');

    // Delete Work Experience
    Route::get('/{id}/delete', 'destroy')->name('delete');
});


Route::prefix('speaking-language')->name('langs.')->controller(App\Http\Controllers\Admin\LanguageController::class)->group(function ()
{
    // Show Speaking Language
    Route::get('/show', 'index')->name('show');

    // Add New Speaking Language
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    // Update Speaking Language
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/{id}/update', 'update')->name('update');

    // Delete Speaking Language
    Route::get('/{id}/delete', 'destroy')->name('delete');
});
