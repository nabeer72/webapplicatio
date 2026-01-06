<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Http\Requests\SkillUpdateRequest;
use App\Models\Skill;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Skill::get();
        return view('backend.layouts.screens.skills.index', compact('models'));
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
    public function store(SkillRequest $request)
    {
        $model = new Skill;
        $model->name = $request->name;
        $model->percentage = $request->percentage;
        $done = $model->save();

        return back()->with('success', 'Skill created successfully!');
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
        $model = Skill::findOrFail($id);
        return view('backend.layouts.screens.skills.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillUpdateRequest $request, string $id)
    {
        $model = Skill::findOrFail($id);
        $model->name = $request->name;
        $model->percentage = $request->percentage;
        $model->save();

        return redirect()->route('skill.index')->with('success', 'Skill updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Skill::findOrFail($id);
        $model->delete();

        return back()->with('success', 'Skill deleted successfully!');
    }
}
