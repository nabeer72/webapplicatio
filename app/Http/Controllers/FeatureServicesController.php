<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeatureServiceRequest;
use App\Http\Requests\FeatureServiceUpdateRequest;
use App\Models\FeatureServices;

class FeatureServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = FeatureServices::get();
        return view('backend.layouts.screens.featureServices.index', compact('models'));
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
    public function store(FeatureServiceRequest $request)
    {
        $model = new FeatureServices;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->icon = $request->icon;
        $model->save();

        return back()->with('success', 'Feature Service created successfully!');
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
        $model = FeatureServices::findOrFail($id);
        return view('backend.layouts.screens.featureServices.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FeatureServiceUpdateRequest $request, string $id)
    {
        $model = FeatureServices::findOrFail($id);
        $model->title = $request->title;
        $model->description = $request->description;
        $model->icon = $request->icon;
        $model->save();

        return redirect()->route('feature_service.index')->with('success', 'Feature Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = FeatureServices::findOrFail($id);
        $model->delete();

        return back()->with('success', 'Feature Service deleted successfully!');
    }
}
