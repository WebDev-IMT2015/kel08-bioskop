@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>
                @if(Auth::user()->type == 'admin')
                    <div class="panel-body">
                        Welcome {{ Auth::user()->name }} <br>
                        Jabatan : {{ Auth::user()->type}} <br>
                        <div class="content">
                            @if(Route::has('login'))
                                @if(Auth::check())
                                    <div class="links">
                                        <a href="{{ url('/film')}}">Film</a><br>
                                        <a href="{{ url('/bioskop')}}">Bioskop</a><br>
                                        <a href="{{ url('/studio')}}">Studio</a><br>
                                        <a href="https://forge.laravel.com">Jadwal</a><br>
                                        <a href="https://github.com/laravel/laravel">Jam Tanyang</a><br>
                                        <a href="https://github.com/laravel/laravel">Laporan Penjualan</a><br>
                                        <a href="{{ url('/user') }}">Users</a>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                @else
                    <div class="panel-body">
                        Welcome {{ Auth::user()->name }} <br>
                        Jabatan : {{ Auth::user()->type}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
