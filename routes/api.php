<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers\Api')->group(function ()
{
    Route::prefix('users')->controller(UserApiController::class)->group(function ()
    {
        Route::get('show-all', 'showAll');
        Route::put('update/{user}', 'update');
    });

    Route::prefix('speaking-languages')->controller(SpeakingLanguageApiController::class)->group(function ()
    {
        Route::get('show-all ', 'showAll');

        Route::post('create', 'create');

        Route::put('update/{lang}', 'update');

        Route::put('delete/{lang}', 'delete');
    });


    Route::prefix('skills')->controller(SkillsApiController::class)->group(function ()
    {
        Route::get('show-all', 'showAll');

        Route::get('show/{skill}', 'show');

        Route::post('create', 'create');

        Route::put('update/{skill}', 'update');

        Route::put('delete/{skill}', 'delete');
    });

    Route::prefix('projects')->controller(ProjectsApiController::class)->group(function ()
    {
        Route::get('show-all', 'showAll');

        Route::get('show/{project}', 'show');

        Route::post('create', 'create');

        Route::put('update/{project}', 'update');

        Route::put('delete/{project}', 'delete');
    });

    Route::prefix('work-exps')->controller(WorkExpsApiController::class)->group(function ()
    {
        Route::get('show-all', 'showAll');

        Route::get('show/{work}', 'show');

        Route::post('create', 'create');

        Route::put('update/{work}', 'update');

        Route::put('delete/{work}', 'delete');
    });

    Route::prefix('feedbacks')->controller(FeedbackApiController::class)->group(function ()
    {
        Route::get('show-all', 'showAll');

        Route::get('show/{feed}', 'show');

        Route::post('create', 'create');

        Route::put('update/{feed}', 'update');

        Route::put('delete/{feed}', 'delete');
    });
});
