<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('Admin.Skills.skills', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'languageName' => 'required',
            'percentage' => 'required',
        ]);

        $skill = new Skill();
        $skill->languageName = $request['languageName'];
        $skill->percentage = $request['percentage'];

        if ($request['main'] != null) {
            $skill->main = $request['main'];
        } else {
            $skill->main = "null";
        }
        $skill->save();

        return redirect(route('skills'));
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
        $request->validate([
            'languageName' => 'required',
            'percentage' => 'required',
        ]);

        // dd($request['main']);

        $skill = Skill::where('id', $id)->first();
        $skill->languageName = $request['languageName'];
        $skill->percentage = $request['percentage'];
        if ($request['main'] != null) {
            $skill->main = $request['main'];
        } else {
            $skill->main = "null";
        }

        $skill->save();

        return redirect(route('skills'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::where('id', $id)->delete();
        return redirect(route('skills'));
    }
}
