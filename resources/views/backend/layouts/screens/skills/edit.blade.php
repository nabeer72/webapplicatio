@extends('backend.layouts.mainpage.layout')

@section('dashboard')
    <div class="pagetitle mb-3">
        <h3>Edit Skill</h3>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('skill.index') }}">Skills</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Edit Skill</h5>
        </div>
        <div class="card-body mt-3">
            <form method="post" action="{{ route('skill-update', $model->id) }}">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-semibold">Skill Name</label>
                        <input name="name" type="text" class="form-control border border-secondary" id="name"
                            value="{{ $model->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="percentage" class="form-label fw-semibold">Percentage (0-100)</label>
                        <input name="percentage" type="number" min="0" max="100"
                            class="form-control border border-secondary" id="percentage" value="{{ $model->percentage }}"
                            required>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <a href="{{ route('skill.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-primary px-4">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection