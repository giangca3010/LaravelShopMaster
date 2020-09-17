@extends('layouts.admin')

@section('title')
    <title>Settings</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/setting/index.css')}}">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'Settings', 'key' => 'List'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-group float-right">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Action
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('settings.create') . '?type=Text'}} ">Text</a></li>
                                <li><a href="{{route('settings.create') . '?type=Textarea'}} ">Textarea</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Config key</th>
                                <th scope="col">Config value</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($settings as $settingItem)
                                <tr>
                                    <th scope="row">{{ $settingItem->id }}</th>
                                    <td>{{ $settingItem->config_key }}</td>
                                    <td>{{ $settingItem->config_value }}</td>
                                    <td>
                                        <a href="{{ route('settings.edit', ['id'=>$settingItem->id]) . '?type=' . $settingItem->type }}"
                                           class="btn btn-default">Edit</a>
                                        <a href=""
                                           data-url="{{ route('settings.delete', ['id'=>$settingItem->id]) }}"
                                           class="btn btn-danger action_delete">Delete</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$settings->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



