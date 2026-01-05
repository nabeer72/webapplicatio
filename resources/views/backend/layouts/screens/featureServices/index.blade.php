@extends('backend.layouts.mainpage.layout')

@section('dashboard')
    <div class="pagetitle mb-3">
        <h3>Feature Services</h3>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Feature Services</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Feature Services List</h5>
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                <i class="fa fa-plus me-1"></i> Add Feature Service
            </button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($models as $model)
                            <tr>
                                <td class="cell">{{ $loop->iteration }}</td>
                                <td class="cell"><i class="{{ $model->icon }}"></i> ({{ $model->icon }})</td>
                                <td class="cell">{{ $model->title }}</td>
                                <td class="cell">{{ $model->description }}</td>
                                <td class="cell">
                                    <a class="btn btn-sm btn-success"
                                        href="{{ route('feature_service.edit', $model->id) }}">Edit</a>
                                </td>
                                <td class="cell">
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('feature_service-delete', $model->id) }}">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"><strong>No record found...</strong></td>
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
                        <i class="fa fa-plus me-2"></i> Add Feature Service
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        style="filter: invert(22%) sepia(96%) saturate(7431%) hue-rotate(1deg) brightness(92%) contrast(94%);"></button>
                </div>

                <!-- Modal Body -->
                <form class="p-4" method="post" action="{{ route('feature_service.store') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="title" class="form-label fw-semibold">Title</label>
                            <input name="title" type="text" class="form-control form-control-sm border border-secondary"
                                id="title" placeholder="Enter title" required>
                        </div>
                        <div class="col-md-6">
                            <label for="icon" class="form-label fw-semibold">Icon Class (e.g., bi bi-brush)</label>
                            <input name="icon" type="text" class="form-control form-control-sm border border-secondary"
                                id="icon" placeholder="Enter icon class" required>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea name="description" class="form-control form-control-sm border border-secondary"
                                id="description" rows="3" placeholder="Enter description" required></textarea>
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