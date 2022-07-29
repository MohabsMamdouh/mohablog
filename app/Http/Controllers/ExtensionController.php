<?php

namespace App\Http\Controllers;

use App\Models\extension;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frameworks = extension::where('type', "=", 'Framework')->take(3)->get();
        $editors = extension::where('type', "=", 'Editor')->take(3)->get();
        $operatings = extension::where('type', "=", 'Operating System')->take(3)->get();
        return view('Admin.Extensions.Extensions', compact('frameworks', 'editors', 'operatings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Extensions.create');
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
            'ExtensionsName' => 'required',
            'Type' => 'required',
        ]);

        $extension = new extension();
        $extension->name = $request['ExtensionsName'];
        $extension->type = $request['Type'];

        $extension->save();

        return redirect(route('showExtensions'));
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
        $ext = extension::where('id', $id)->first();
        return view('Admin.Extensions.edit', compact('ext'));
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
            'ExtensionsName' => 'required',
            'Type' => 'required',
        ]);

        $ext = extension::where('id', $id)->first();
        $ext->name = $request['ExtensionsName'];
        $ext->type = $request['Type'];

        $ext->save();

        return redirect(route('showExtensions'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ext = extension::where('id', $id)->delete();
        return redirect(route('showExtensions'));
    }
}
