<?php

namespace App\Http\Controllers;

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
        $projects = Projects::orderBy('endDate', 'DESC')->get();
        $skills = Skill::all();
        $sLanguages = SpeakingLanguage::all();
        $user = User::first();
        $works = WorkExp::all();
        return view('index',[
            'projects' => $projects,
            'skills' => $skills,
            'sLanguages' => $sLanguages,
            'works' => $works,
            'user' => $user,
        ]);
    }

    public function pdfview()
    {
        $projects = Projects::orderBy('endDate', 'DESC')->get();
        $skills = Skill::all();
        $sLanguages = SpeakingLanguage::all();
        $user = User::first();
        $works = WorkExp::all();

        return view('pdf', compact('projects', 'skills', 'sLanguages', 'user', 'works'));
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
        $projects = Projects::orderBy('endDate', 'DESC')->get();
        $skills = Skill::all();
        $sLanguages = SpeakingLanguage::all();
        $user = User::first();
        $works = WorkExp::all();

        $pdf = Pdf::loadView('pdf', compact('projects', 'skills', 'sLanguages', 'user', 'works'));

        $strArray = explode(' ',$user->fullName);
        $firstName = $strArray[0];
        $lastName = $strArray[1];
        return $pdf->download($firstName . '-' . $lastName  . '-C.V.pdf');
    }
}
