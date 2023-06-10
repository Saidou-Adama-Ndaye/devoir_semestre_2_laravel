@extends('frontend.layouts.master')

@section('frontend_title')
    Customer Dashboard Page
@endsection

@section('frontend_content')
    @include('frontend.layouts.inc.breadcrumb', ['page_name' => 'Customer Dashboard'])
    <div class="col-lg-12 col-md-12 m-auto">
        <div class="card p-3">
            <div class="card-header tx-white bg-teal">
                <h4 class="card-title tx-white">Nom du client: {{ $user->name }}</h4>
            </div>
        </div>
    </div>
@endsection
