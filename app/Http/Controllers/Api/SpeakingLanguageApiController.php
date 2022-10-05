<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SpeakingLanguage;

class SpeakingLanguageApiController extends Controller
{
    public function showAll()
    {
        return SpeakingLanguage::all();
    }

    public function create()
    {
        request()->validate([
            'languageName' => 'required',
            'level' => 'required',
        ]);

        $success = SpeakingLanguage::create([
            'languageName' => request('languageName'),
            'level' => request('level')
        ]);

        return [
            "success" => $success
        ];
    }

    public function update(SpeakingLanguage $lang)
    {
        request()->validate([
            'languageName' => 'required',
            'level' => 'required',
        ]);

        $success = $lang->update([
            'languageName' => request('languageName'),
            'level' => request('level')
        ]);

        return [
            "success" => $success
        ];
    }

    public function delete(SpeakingLanguage $lang)
    {
        $success = $lang->delete();

        return [
            "success" => $success
        ];
    }
}
