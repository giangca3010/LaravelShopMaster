
@extends('layouts.admin')

@section('title')
    <title>Add Product</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/product/list/list.css')}}">
@endsection


@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Product', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $productItem)
                                <tr>
                                    <th scope="row">{{$productItem -> id}}</th>
                                    <td>{{$productItem -> name}}</td>
                                    <td>{{ number_format($productItem -> price) }}</td> {{--format tien te--}}
                                    <td>
                                        <img class="product_image_150_100" src="{{$productItem -> feature_image_path}}" alt="">
                                    </td>
                                    <td>{{optional($productItem->category)->name}}</td> {{--optional neu khong co category thi tra ve null--}}

                                    <td>
                                        <a href="{{route('product.edit', ['id'=>$productItem->id])}}"
                                           class="btn btn-default">Edit</a>
                                        <a href="#"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



