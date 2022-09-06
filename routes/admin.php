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

Route::controller(App\Http\Controllers\HomeController::class)->group(function ()
{
    // Dashboard
    Route::get('/home', 'index')->name('home');
});

Route::controller(App\Http\Controllers\PersonalController::class)->group(function ()
{
    // Update Persenol Info
    Route::get('/edit', 'edit')->name('editInfo');
    Route::post('/update', 'update')->name('updateInfo');

    // Update Profile Image
    Route::post('/updateProfileImage', 'updateProfileImage')->name('updateProfileImage');
});


Route::controller(App\Http\Controllers\SkillsController::class)->group(function ()
{
    // Show Skill
    Route::get('/skills/show', 'index')->name('skills');

    // Add New Skill
    Route::get('/skills/create', 'create')->name('createSkills');
    Route::post('/skills/store', 'store')->name('storeSkills');

    // Update Skill
    Route::get('/skills/{id}/edit', 'edit')->name('editSkill');
    Route::post('/skills/{id}/update', 'update')->name('updateSkills');

    // Delete Skill
    Route::get('/skills/{id}/delete', 'destroy')->name('deleteSkill');
});


Route::controller(App\Http\Controllers\ProjectController::class)->group(function ()
{
    // Show Projects
    Route::get('/projects/show', 'index')->name('showProjects');

    // Add New Project
    Route::get('/projects/create', 'create')->name('createProject');
    Route::post('/projects/store', 'store')->name('storeProject');

    // Update Project
    Route::get('/projects/{id}/edit', 'edit')->name('editProject');
    Route::post('/projects/{id}/update', 'update')->name('updateProject');

    // Delete Project
    Route::get('/projects/{id}/delete', 'destroy')->name('deleteProject');
});

Route::controller(App\Http\Controllers\workcontroller::class)->group(function ()
{
    // Show Work Experiences
    Route::get('/works/show', 'index')->name('showWorks');

    // Add New Work Experience
    Route::get('/works/create', 'create')->name('createWork');
    Route::post('/works/store', 'store')->name('storeWork');

    // Update Work Experience
    Route::get('/works/{id}/edit', 'edit')->name('editWork');
    Route::post('/works/{id}/update', 'update')->name('updateWork');

    // Delete Work Experience
    Route::get('works/{id}/delete', 'destroy')->name('deleteWork');
});


Route::controller(App\Http\Controllers\LanguageController::class)->group(function ()
{
    // Show Speaking Language
    Route::get('/speaking-language/show', 'index')->name('showLangs');

    // Add New Speaking Language
    Route::get('/speaking-language/create', 'create')->name('createLangs');
    Route::post('/speaking-language/store', 'store')->name('storeLangs');

    // Update Speaking Language
    Route::get('/speaking-language/{id}/edit', 'edit')->name('editLangs');
    Route::post('/speaking-language/{id}/update', 'update')->name('updateLangs');

    // Delete Speaking Language
    Route::get('speaking-language/{id}/delete', 'destroy')->name('deleteLangs');
});
