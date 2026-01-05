@extends('backend.layouts.mainpage.layout')

@section('dashboard')

<section class="section mt-1">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-sm">

                <div class="card-body">
                    <form action="{{ route('about-update', $model->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="row g-3">
                            <!-- Title & Subtitle in one row -->
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Title</label>
                                <input type="text" name="title" class="form-control border border-secondary p-2"
                                    value="{{ $model->title }}" required>
                            </div>


                            <!-- Description & Sub Description -->

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Complete Project</label>
                                <input type="text" name="completeproject"
                                    class="form-control border border-secondary p-2"
                                    value="{{ $model->completeproject }}">
                            </div>

                            <!-- Video Link -->
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Statified Clients</label>
                                <input type="text" name="statifiedclients"
                                    class="form-control border border-secondary p-2"
                                    value="{{ $model->statifiedclients }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Year Of Excellence</label>
                                <input type="text" name="yearofexcellence"
                                    class="form-control border border-secondary p-2"
                                    value="{{ $model->yearofexcellence }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea name="description" rows="3"
                                    class="form-control border border-secondary p-2">{{ $model->description }}</textarea>
                            </div>
                            <!-- Image Upload -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Upload Image</label>
                                <input type="file" name="image" class="form-control border border-secondary p-2">
                                <small class="text-muted">Leave empty to keep current image</small>
                            </div>
                            <div class="col-md-6 text-center">
                                <label class="form-label fw-semibold d-block">Current Image</label>
                                <img src="{{ asset($model->image) }}" class="img-thumbnail" style="max-height: 120px;">
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-end mt-3">
                                <button type="submit" class="btn btn-success btn-sm px-4">
                                    <i class="fa fa-save me-1"></i> Update
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
