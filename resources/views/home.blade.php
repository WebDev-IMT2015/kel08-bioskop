@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>
                @if(Auth::user()->type == "admin")
                    <div class="panel-body">
                        Welcome {{ Auth::user()->name }} <br>
                        Jabatan : {{ Auth::user()->type}} <br>
                        <div class="content">
                            @if(Route::has('login'))
                                @if(Auth::check())
                                    <div class="links">
                                        @if(  {{ Auth::user()->type}} == "admin")
                                            <a href="{{ url('/film')}}">Film</a><br>
                                            <a href="{{ url('/bioskop')}}">Bioskop</a><br>
                                            <a href="{{ url('/studio')}}">Studio</a><br>
                                        @else
                                            <a href="/pilihbioskop">Bioskop</a><br>
                                        @endif
                                        <a href="{{ url('/jadwal')}}">Jadwal</a><br>
                                        <a href="https://github.com/laravel/laravel">Jam Tayang</a><br>
                                        <a href="https://github.com/laravel/laravel">Laporan Penjualan</a><br>
                                        @if(  {{ Auth::user()->type}} == admin)
                                            <a href="{{ url('/user') }}">Users</a>
                                        @endif

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
