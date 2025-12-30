@extends('backend.layouts.mainpage.layout')

@section('dashboard')
<div class="pagetitle mb-3">
    <h1>Carousel</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Carousel</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Carousel List</h5>
        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
            <i class="fa fa-plus me-1"></i> Add Carousel
        </button>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Sub Description</th>
                        <th>Video Link</th>
                        <th>Image</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($models as $model)
                    <tr>
                        <td class="cell">{{ $loop->iteration }}</td>
                        <td class="cell">{{ $model['title'] }}</td>
                        <td class="cell">{{ $model['subtitle'] }}</td>
                        <td class="cell">{{ $model['description'] }}</td>
                        <td class="cell">{{ $model['subdescription'] }}</td>
                        <td class="cell">
                            <a href="{{ $model['videolink'] }}" target="_blank">
                                {{ $model['videolink'] }}
                            </a>
                        </td>
                        <td class="cell">
                            <img src="{{asset($model->image) }}" width="40" height="40">
                        </td>
                        <td class="cell">
                            <a class="btn btn-sm btn-success" href="#">Edit</a>
                        </td>
                        <td class="cell">
                            <a class="btn btn-sm btn-danger" href="{{ route('carousel-delete',$model->id) }}">Delete</a>
                        </td>
                    </tr>
                    @empty

                    <tr>
                        <td colspan="10"><strong>No record found...</strong></td>
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
                <h5 class="modal-title"><i class="fa fa-image me-2"></i>Add Carousel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    style="filter: invert(22%) sepia(96%) saturate(7431%) hue-rotate(1deg) brightness(92%) contrast(94%);"></button>
            </div>

            <!-- Modal Body -->
            <form class="row g-3 p-4" method="POST" action='{{ route("carousel.store") }}'
                enctype="multipart/form-data">

                @csrf
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="title">
                    <small class="text-danger" style="font-size: 12px"></small>
                </div>
                <div class="col-md-6">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input name="subtitle" type="text" class="form-control" id="subtitle">
                    <small class="text-danger" style="font-size: 12px">{{ $errors->has('title') ?
                        $errors->first('title') : '' }}</small>
                </div>
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                    <small class="text-danger" style="font-size: 12px">{{ $errors->has('title') ?
                        $errors->first('title') : '' }}</small>
                </div>
                <div class="col-md-12">
                    <label for="subdescription" class="form-label">Sub Description</label>
                    <textarea name="subdescription" id="subdescription" cols="30" rows="3" class="form-control"></textarea>
                    <small class="text-danger" style="font-size: 12px">{{ $errors->has('title') ?
                        $errors->first('title') : '' }}</small>
                </div>
                <div class="col-md-12">
                    <label for="videolink" class="form-label">video Link</label>
                    <input name="videolink" id="videolink" cols="30" rows="3" class="form-control"></textarea>
                    <small class="text-danger" style="font-size: 12px">{{ $errors->has('title') ?
                        $errors->first('title') : '' }}</small>
                </div>
                <div class="col-md-5">
                    <label for="image" class="form-label">Image</label>
                    <input name="image" class="form-control" type="file" id="image">
                    <small class="text-danger" style="font-size: 12px">{{ $errors->has('title') ?
                        $errors->first('title') : '' }}</small>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary bx-pull-right btn-sm">
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
