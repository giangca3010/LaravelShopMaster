@extends('layoutsShow.master')

@section('title')
    <title>Home page</title>
@endsection

@section('css')
    <link href="{{ asset('home/home.css') }}" rel="stylesheet">
@endsection

@section('js')
    <link href="{{ asset('home/home.css') }}" rel="stylesheet">
@endsection


@section('content')
    <!--/slider-->
    @include('home.component.slider')
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                @include('componentShow.sidebar')

                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                @include('home.component.feature_product')
                <!--features_items-->

                    <!--/category-tab-->
                @include('home.component.categry_tabs')
                <!--/category-tab-->

                    <!--/recommended_items-->
                @include('home.component.recomment_product')
                <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

@endsection

