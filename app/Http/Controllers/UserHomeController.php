<?php

namespace App\Http\Controllers;

use App\Models\extension;
use App\Models\Projects;
use App\Models\Skill;
use App\Models\SpeakingLanguage;
use App\Models\User;
use App\Models\WorkExp;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\DomPDF\Facade\Pdf;


class UserHomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        $skills = Skill::orderBy('percentage', 'DESC')->take(4)->get();
        $sLanguages = SpeakingLanguage::all();
        $user = User::first();
        $works = WorkExp::all();
        $frameworks = extension::where('type', "=", 'Framework')->take(3)->get();
        $editors = extension::where('type', "=", 'Editor')->take(3)->get();
        $operatings = extension::where('type', "=", 'Operating System')->take(3)->get();
        return view('index',[
            'projects' => $projects,
            'skills' => $skills,
            'sLanguages' => $sLanguages,
            'works' => $works,
            'user' => $user,
            'frameworks' => $frameworks,
            'editors' => $editors,
            'operatings' => $operatings,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downloadPDF()
    {
        set_time_limit(-100);
        $projects = Projects::all();
        $skills = Skill::orderBy('percentage', 'DESC')->get();
        $sLanguages = SpeakingLanguage::all();
        $user = User::first();
        $works = WorkExp::all();

        $pdf = Pdf::loadView('pdf', compact('projects', 'skills', 'sLanguages', 'user', 'works'));
        return $pdf->download(strtok($user->fullName, " ")  . '-C.V.pdf');
    }
}
