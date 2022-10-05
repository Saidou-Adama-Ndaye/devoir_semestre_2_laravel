@extends('backend.layouts.master')

@section('title')
    Category Create
@endsection

@push('admin_style')

@endpush

@section('admin_content')
    <div class="row">
        <h1>Category Create Form</h1>
        <div class="d-flex justify-content-start">
            <a href="{{ route('category.index') }}" class="btn btn-primary">
                <i class="fas fa-backward"></i>
                Back to Categories
            </a>
        </div>
    </div>
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="category-title" class="form-label">Category Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter category title" id="">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="checkbox" name="is_active" class="form-check-input" role="switch" id="activeStatus"
                               checked>
                        <label for="activeStatus" class="form-check-label">Active or inactive</label>
                        @error('is_active')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Store</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')

@endpush
