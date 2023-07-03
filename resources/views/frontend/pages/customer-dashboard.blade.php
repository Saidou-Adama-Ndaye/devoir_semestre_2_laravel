@extends('frontend.layouts.master')

@section('frontend_title')
    Customer Dashboard Page
@endsection

@section('frontend_content')
    @include('frontend.layouts.inc.breadcrumb', ['page_name' => 'Customer Dashboard'])
    <div class="col-lg-12 col-md-12 m-auto">
    <div class="card p-3">
        <div class="card-header tx-white bg-teal" style="font-family: cursive;">
            <h4 class="card-title tx-white" style="font-family: cursive;">Bienvenue, <span class="user-name">{{ $user->name }}</span> !</h4>
        </div>
            <div class="card-body">
            <div class="row ">    
            <p class="card-text col-md-6">Nous sommes ravis de vous accueillir sur notre site. Profitez de nos services et découvrez notre menu varié.</p>
            <div class="text-center col-md-6">
                <a href="{{ route('shop.page') }}" class="btn btn-danger btn-lg">Voir le menu</a>
            </div>
            </div>
        </div>
    </div>
    </div>
@endsection
