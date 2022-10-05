@extends('backend.layouts.master')

@section('title')
    Category Edit
@endsection

@push('admin_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
          integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush

@section('admin_content')
    <div class="row">
        <h1>Category Edit Form</h1>
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
                <form action="{{ route('category.update', $category->slug) }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="category-title">Category Title</label>
                        <input type="text" name="title" value="{{ $category->title }}"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter category title" id="">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category-image" class="form-label">Category Image</label>
                        <input type="file" name="category_image" class="form-control" id="dropify"
                               data-default-file="{{ asset('uploads/category') }}/{{ $category->category_image }}">
                        @error('category_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-check form-switch">
                        <input type="checkbox" name="is_active" class="form-check-input" role="switch" id="activeStatus"
                               @if($category->is_active) checked @endif>
                        <label for="activeStatus" class="form-check-label">Active or inactive</label>
                        @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('admin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#dropify').dropify();
    </script>
@endpush
