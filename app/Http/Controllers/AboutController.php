<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = About::get();
        return view('backend.layouts.screens.about.index', compact('models'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {
        $model = new About;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->completeproject = $request->completeproject;
        $model->statifiedclients = $request->statifiedclients;
        $model->yearofexcellenc = $request->yearofexcellenc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/About'), $imageName);
            $model->image = 'assets/About/'.$imageName;

            $done = $model->save();

            return back();

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Carousel::findOrFail($id);

        return view('backend.layouts.screens.about.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, string $id)
    {
        $model = About::find($id);
        $model->title = $request->title;
        $model->description = $request->description;
        $model->completeproject = $request->completeproject;
        $model->statifiedclients = $request->statifiedclients;
        $model->yearofexcellenc = $request->yearofexcellenc;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/About'), $imageName);
            $model->image = 'assets/About/'.$imageName;

            $done = $model->save();

            return back();

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model     = About::find($id);
        $model->delete();
        return back();

    }
}
