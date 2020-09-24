@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Menus', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('menu-add')
                            <a href="{{route('menus.create')}}" class="btn btn-success float-right m-2">Add</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Menu</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($menus as $menu)
                                <tr>
                                    <th scope="row">{{$menu->id}}</th>
                                    <td>{{$menu->name}}</td>
                                    <td>
                                        @can('menu-edit')
                                            <a href="{{route('menus.edit', [ 'id' => $menu -> id ])}}"
                                               class="btn btn-default">Edit</a>
                                        @endcan
                                        @can('menu-delete')
                                            <a data-url="{{route('menus.delete',[ 'id' => $menu -> id ])}}"
                                               class="btn btn-danger action_delete">Delete</a>
                                        @endcan
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$menus->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



