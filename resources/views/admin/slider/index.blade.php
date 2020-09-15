@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admins/product/index/list.css')}}">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('admins/product/index/list.js') }}"></script>
@endsection



@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Menus', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('slider.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Slider</th>
                                <th scope="col">Description</th>
                                <th scope="col">Hinh anh</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sliders as $sliderItem)
                                <tr>
                                    <th scope="row">{{$sliderItem->id}}</th>
                                    <td>{{$sliderItem->name}}</td>
                                    <td>{{$sliderItem->Description}}</td>
                                    <td>
                                        <img  alt="">
                                        <img class="product_image_150_100" src="{{$sliderItem->image_path}}">
                                    </td>
                                    <td>
                                        <a href="{{ route('slider.edit', ['id'=>$sliderItem->id]) }}"
                                           class="btn btn-default">Edit</a>
                                        <a data-url="{{ route('slider.delete', ['id'=>$sliderItem->id]) }}"
                                           class="btn btn-danger action_delete">Delete</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$sliders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



