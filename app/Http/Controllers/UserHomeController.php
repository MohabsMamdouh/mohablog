<?php

namespace App\Http\Controllers;

use App\Models\extension;
use App\Models\Projects;
use App\Models\Skill;
use App\Models\SpeakingLanguage;
use App\Models\User;
use App\Models\WorkExp;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
