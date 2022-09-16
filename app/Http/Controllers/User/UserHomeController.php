<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

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
     * It gets all the projects, skills, speaking languages, work experiences, and the user from the
     * database and then returns the index view with all the data
     *
     * @return The index view is being returned.
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

    /**
     * It gets all the data from the database and passes it to the view
     *
     * @return The view pdf.blade.php
     */
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
     * It takes the data from the database and passes it to the view, then it loads the view and
     * downloads it as a pdf
     *
     * @return a pdf file.
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
