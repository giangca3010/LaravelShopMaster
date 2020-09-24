@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Permission', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('permissions.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Chọn tên module</label>
                                <select name="module_parent" class="form-control">
                                    <option value="">Chọn tên module</option>
                                    @foreach(config('permissions.table_module') as $modulItem)
                                    <option value="{{$modulItem}}">{{$modulItem}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    @foreach(config('permissions.module_children') as $moduleItemChilrent)
                                    <div class="col-md-3">
                                        <label for="">
                                            <input type="checkbox" value="{{$moduleItemChilrent}}" name="module_chilrent[]">
                                            {{ $moduleItemChilrent }}
                                        </label>
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



