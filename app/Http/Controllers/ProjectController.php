<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Skill;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        return view('Admin.Projects.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.projects.create');
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
            'projectName' => 'required',
            'URL' => 'required',
            'caption' => 'required',
            'TechnologyStack' => 'required',
            'endDate' => 'required',
        ]);

        $project = new Projects();
        $project->name = $request['projectName'];
        $project->url = $request['URL'];
        $project->caption = $request['caption'];
        $project->techmologyStack = $request['TechnologyStack'];
        $project->endDate = $request['endDate'];

        $project->save();

        return redirect(route('showProjects'));
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
        $project = Projects::where('id', $id)->first();
        return view('Admin.projects.edit', compact('project'));
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
            'projectName' => 'required',
            'URL' => 'required',
            'caption' => 'required',
            'TechnologyStack' => 'required',
            'endDate' => 'required',
        ]);

        // dd($request['projectName']);

        $p = Projects::where('id', $id)->first();

        $p->name = $request['projectName'];
        $p->url = $request['URL'];
        $p->caption = $request['caption'];
        $p->techmologyStack = $request['TechnologyStack'];
        $p->endDate = $request['endDate'];

        $p->save();

        return redirect(route('showProjects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Projects::where('id', $id)->delete();
        return redirect(route('showProjects'));
    }
}
