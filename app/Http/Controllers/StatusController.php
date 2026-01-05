<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Http\Requests\StatusUpdateRequest;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Status::get();
        return view('backend.layouts.screens.status.index', compact('models'));
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
    public function store(StatusRequest $request)
    {
        $model = new Status;
        $model->number = $request->number;
        $model->label = $request->label;
        $model->description = $request->description;
        $model->save();

        return back()->with('success', 'Stat created successfully!');
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
        $model = Status::findOrFail($id);
        return view('backend.layouts.screens.status.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StatusUpdateRequest $request, string $id)
    {
        $model = Status::findOrFail($id);
        $model->number = $request->number;
        $model->label = $request->label;
        $model->description = $request->description;
        $model->save();

        return redirect()->route('status.index')->with('success', 'Stat updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Status::findOrFail($id);
        $model->delete();

        return back()->with('success', 'Stat deleted successfully!');
    }
}
