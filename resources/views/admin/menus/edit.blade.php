@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Edit', 'key' => 'Edit'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('menus.update', [ 'id' => $menuFollowIdEdit->id ])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên menus</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Nhập tên menu"
                                    value="{{$menuFollowIdEdit->name}}">
                            </div>

                            <div class="form-group">
                                <label>Chọn menus cha</label>
                                <select name="parent_id" class="form-control">
                                    <option value="0">Chọn menu cha</option>
                                    {!! $optionSelect !!}
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



