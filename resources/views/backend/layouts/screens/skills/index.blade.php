@extends('backend.layouts.mainpage.layout')

@section('dashboard')
    <div class="pagetitle mb-3">
        <h3>Skills</h3>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Skills</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Skills List</h5>
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="fa fa-plus me-1"></i> Add Skill
            </button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Percentage</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($models as $model)
                            <tr>
                                <td class="cell">{{ $loop->iteration }}</td>
                                <td class="cell">{{ $model->name }}</td>
                                <td class="cell">{{ $model->percentage }}%</td>
                                <td class="cell">
                                    <a class="btn btn-sm btn-success" href="{{ route('skill.edit', $model->id) }}">Edit</a>
                                </td>
                                <td class="cell">
                                    <a class="btn btn-sm btn-danger" href="{{ route('skill-delete', $model->id) }}">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"><strong>No record found...</strong></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-lg border-0">

                <!-- Modal Header -->
                <div class="modal-header bg-dark text-white border-bottom-0">
                    <h4 class="modal-title fw-bold">
                        <i class="fa fa-plus me-2"></i> Add Skill
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        style="filter: invert(22%) sepia(96%) saturate(7431%) hue-rotate(1deg) brightness(92%) contrast(94%);"></button>
                </div>

                <!-- Modal Body -->
                <form class="p-4" method="post" action="{{ route('skill.store') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">Skill Name</label>
                            <input name="name" type="text" class="form-control form-control-sm border border-secondary"
                                id="name" placeholder="Enter skill name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="percentage" class="form-label fw-semibold">Percentage (0-100)</label>
                            <input name="percentage" type="number" min="0" max="100"
                                class="form-control form-control-sm border border-secondary" id="percentage"
                                placeholder="Enter percentage" required>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary btn-sm px-4">
                            <i class="fa fa-plus me-1"></i> Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection