<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\SiteDetail;
use App\Models\User;
use App\Models\FeedBack;
use App\Models\Projects;
use App\Models\skill;
use App\Models\WorkExp;
use App\Models\SpeakingLanguage;

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

Route::prefix('users')->controller(App\Http\Controllers\Api\UserApiController::class)->group(function ()
{
    Route::get('/show', 'showAll');
    // Route::put('/update/{user}', 'update');
});

Route::put('/update/{user}', function (User $user)
{
    request()->validate([
        'fullName' => 'required',
        'username' => 'required',
    ]);

    // $user->fullName = request('fullName');
    // $user->username = request('username');

    $success = $user->update([
        'fullName' => request('fullName'),
        'username' => request('username')
    ]);

    return [
        "success" => $success
    ];
});


Route::get('/feedbacks', function ()
{
    return FeedBack::all();
});

Route::get('/projects', function ()
{
    return Projects::all();
});

Route::get('/skills', function ()
{
    return skill::all();
});

Route::get('/work-exp', function ()
{
    return WorkExp::all();
});

Route::get('/speaking-languages', function ()
{
    return SpeakingLanguage::all();
});

Route::put('/speaking-languages/update/{lang}', function (SpeakingLanguage $lang)
{
    request()->validate([
        'languageName' => 'required',
        'level' => 'required',
    ]);

    $success = $user->update([
        'languageName' => request('languageName'),
        'level' => request('level')
    ]);

    return [
        "success" => $success
    ];
});
