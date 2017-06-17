@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>

                <div class="panel-body">
                    Hello {{ Auth::user()->name }} <br>
                    Email anda : {{ Auth::user()->email }} <br>
                    Jabatan : {{ Auth::user()->type}}
                    <div class="content">
                        <div class="title m-b-md">
                            CINEMA XXI - ADMIN MODE
                        </div>
                        @if(Route::has('login'))
                            @if(Auth::check())
                                <div class="links">
                                    <a href="{{ url('/film')}}">Film</a><br>
                                    <a href="{{ url('/bioskop')}}">Boskop</a><br>
                                    <a href="https://laravel-news.com">Studio</a><br>
                                    <a href="https://forge.laravel.com">Jadwal</a><br>
                                    <a href="https://github.com/laravel/laravel">Jam Tanyang</a><br>
                                    <a href="https://github.com/laravel/laravel">Laporan Penjualan</a><br>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
