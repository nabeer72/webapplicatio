@extends('backend.layouts.mainpage.layout')

@section('dashboard')
    <div class="pagetitle mb-3">
        <h3>Edit Feature Service</h3>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('feature_service.index') }}">Feature Services</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Edit Feature Service</h5>
        </div>
        <div class="card-body mt-3">
            <form method="post" action="{{ route('feature_service-update', $model->id) }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="title" class="form-label fw-semibold">Title</label>
                        <input name="title" type="text" class="form-control border border-secondary" id="title"
                            value="{{ $model->title }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="icon" class="form-label fw-semibold">Icon Class (e.g., bi bi-brush)</label>
                        <input name="icon" type="text" class="form-control border border-secondary" id="icon"
                            value="{{ $model->icon }}" required>
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label fw-semibold">Description</label>
                        <textarea name="description" class="form-control border border-secondary" id="description" rows="4"
                            required>{{ $model->description }}</textarea>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <a href="{{ route('feature_service.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-primary px-4">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection