<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialUpdateRequest;
use Illuminate\Http\Request;

class TestomonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $models     = Testomonial::get();
     return view('backend.layouts.screens.testimonial.index',compact('models'));

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
    public function store(TestimonailRequest $request)
    {
        $model      =   new Testimonial;
        $model->name  =  $request->name;
        $model->designation  = $request->designation;
        $model->description  = $request->description;
        $model->rating      = $request->rating;
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
        $model      = Testimonial::get();
        return view('backend.layouts.screens.testimonial.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialUpdateRequest $request, string $id)
    {
        $model      =   Testimonial :: find($id);
        $model->name  =  $request->name;
        $model->designation  = $request->designation;
        $model->description  = $request->description;
        $model->rating      = $request->rating;
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model    = Testimonial::find($id);
        $model->delete();
        return back();
    }
}
