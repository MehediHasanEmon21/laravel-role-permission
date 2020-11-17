@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justissety-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul class="list-group">

                            <li class="list-group-item">
                                <a href="">Dashboard</a>
                            </li>
                            @isset(auth()->user()->role->permission['permission']['role']['list'])
                                <li class="list-group-item">
                                    <a href="{{ route('role.index') }}">Roles</a>
                                </li>
                            @endisset

                            @isset(auth()->user()->role->permission['permission']['permission']['list'])
                                <li class="list-group-item">
                                    <a href="{{ route('permission.index') }}">Permission</a>
                                </li>
                            @endisset

                            @isset(auth()->user()->role->permission['permission']['user']['list'])
                                <li class="list-group-item">
                                    <a href="{{ route('user.index') }}">Users</a>
                                </li>
                            @endisset
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
