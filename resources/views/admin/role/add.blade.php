@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link href="{{asset('admins/role/add/add.css')}}" rel="stylesheet">
@endsection

@section('js')
    <script src="{{asset('admins/role/add/add.js')}}"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Roles', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <form action="{{ route('roles.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{--                            <div class="form-group">--}}
                            {{--                                <label>Tên vai trò</label>--}}
                            {{--                                <input value="{{ old('name') }}" type="text" class="form-control" name="name"--}}
                            {{--                                       placeholder="Nhập tên vai trò">--}}
                            {{--                            </div>--}}
                            <div class="form-group">
                                <label>Tên vai trò</label>
                                <input class="form-control" value="{{ old('name') }}" name="name">
                            </div>
                            <div class="form-group">
                                <label>Mô tả vai trò</label>
                                <textarea class="form-control" name="display_name" rows="4">
                                </textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="row">

                                    @foreach($permissionParent as $permissionParentItem)
                                        <div class="card border-primary mb-3 col-md-12">
                                            <div class="card-header">
                                                <label for="">
                                                    <input type="checkbox" value="" class="checkbox_wrapper">
                                                </label>
                                                {{$permissionParentItem->name}}
                                            </div>
                                            <div class="row">
                                                @foreach($permissionParentItem->permissionChildren as $permissionChildrenItem)

                                                    <div class="card-body text-primary col-md-3">
                                                        <h5 class="card-title">
                                                            <label for="">
                                                                <input type="checkbox" class="checkbox_children"
                                                                       name="permission_id[]"
                                                                       value="{{$permissionChildrenItem->id}}">
                                                            </label>
                                                            {{$permissionChildrenItem->name}}
                                                        </h5>
                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    @endforeach


                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection



