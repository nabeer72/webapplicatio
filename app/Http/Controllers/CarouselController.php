<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarouselRequest;
use App\Http\Requests\CarouselUpdateRequest;
use App\Models\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Carousel::get();

        return view('backend.layouts.screens.hero.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('backend.layouts.screens.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselRequest $request)
    {

        $model = new Carousel;
        $model->title = $request->title;
        $model->subtitle = $request->subtitle;
        $model->videolink = $request->videolink;
        $model->description = $request->description;
        $model->subdescription = $request->subdescription;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/carousel'), $imageName);
            $model->image = 'assets/carousel/'.$imageName; // relative path for asset()
        }

        $done = $model->save();
        if ($done) {
            flash('your detail is update sucessfully......');

        } else {
            flash('your detail is not update.......');
        }

        return back()->with('success', 'Carousel created successfully!');
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

        return view('backend.layouts.screens.hero.edit', compact('model'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselUpdateRequest $request, $id)
    {
        $model = Carousel::findOrFail($id);

        $model->title = $request->title;
        $model->subtitle = $request->subtitle;
        $model->videolink = $request->videolink;
        $model->description = $request->description;
        $model->subdescription = $request->subdescription;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $filePath = $image->move(public_path('assets/Carousel'), $imageName);
            $model->image = 'assets/Carousel/'.$imageName;
        }

        $model->save();

        // Redirect back to index with a success message
        return redirect()->route('carousel.index')->with('success', 'Carousel updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Carousel::find($id);
        $model->delete();

        return back();
    }
}
