@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>
                @if(Route::has('login'))
                    @if(Auth::check())
                        @if(Auth::user()->type == "admin")
                            <div class="panel-body">
                                Welcome {{ Auth::user()->name }} <br>
                                Jabatan : {{ Auth::user()->type}} <br>
                                <div class="content">
                                    <a href="{{ url('/user') }}">Users</a><br>
                                    <a href="{{ url('/film')}}">Film</a><br>
                                    <a href="{{ url('/bioskop')}}">Bioskop</a><br>
                                    <a href="{{ url('/studio')}}">Studio</a><br>
                                    <a href="{{ url('/jadwal')}}">Jadwal</a><br>
                                    <a href="{{ url('/jamtayang')}}">Jam Tayang</a><br>
                                    <a href="{{ url('/datapenjualan')}}">Laporan Penjualan</a><br>
                                </div>
                            </div>
                        @else
                            <div class="panel-body">
                                Welcome {{ Auth::user()->name }} <br>
                                Jabatan : {{ Auth::user()->type}}<br>
                                <a href="{{ url('/pilihbioskop') }}">Bioskop</a><br>
                            </div>
                        @endif
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
