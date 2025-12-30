<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarouselRequest;
use App\Models\Carousel;
use Illuminate\Http\Request;

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


    $model = new Carousel();
    $model->title = $request->title;
    $model->subtitle = $request->subtitle;
     $model->videolink = $request->videolink;
    $model->description = $request->description;
    $model->subdescription = $request->subdescription;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/carousel'), $imageName);
        $model->image = 'assets/carousel/' . $imageName; // relative path for asset()
    }

 $model->save();

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory(string $id)
    {
        $model   = Carousel::find($id);
        $model->delete();
        return back();
    }
}
