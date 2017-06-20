<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cinema XXI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 700px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    /*footer {
      background-color: #555;
      color: white;
      padding: 4px;
    }*/
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 700px) {
      .sidenav {
        height: auto;
        padding: 10px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="{{ url('/home') }}" class="navbar-brand">Cinema XXI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
        @if(Route::has('login'))
                    @if(Auth::check())
                        @if(Auth::user()->type == "admin")
                        <li><a href="{{ url('/film')}}">Film</a></li>
                        <li><a href="{{ url('/bioskop')}}">Bioskop</a></li>
                        <li><a href="{{ url('/studio')}}">Studio</a></li>
                        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
                        <li class="active"><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
                        <li><a href="{{ url('/datapenjualan')}}">Laporan Penjualan</a></li>
                        <li><a href="{{ url('/user') }}">Users</a></li>
                        @else
                        <li><a href="{{ url('/pilihbioskop') }}">Pesan Tiket</a></li>
                        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
                        <li class="active"><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
                        @endif
                    @endif
                @endif
      </ul><br>
    </div>

    <div class="col-sm-9">
      <div>
    <div>
      <div>
        <div class="panel panel-default" align="center">
          <div class="panel-heading" id="main"><h1>Jam Tayang</h1></div>

			@if(Route::has('login'))
                @if(Auth::check())
                    @if(Auth::user()->type == "admin")
          {{-- Tambah jam tayang --}}
          <div class="panel-body">
            @if(isset($jam_tayang_edit))
              <form action="{{ route('jamtayang.update') }}" method="POST">
              <input type="hidden" name="id_jtf" value="{{ $jam_tayang_edit->id_jtf }}">
              <input type="hidden" name="jadwal" value="{{ $jam_tayang_edit->id_jadwal }}{{$jam_tayang_edit->id_studio}}{{$jam_tayang_edit->id_film}}">
            @else
              <form method="POST" class="form-horizontal" role="form">
            @endif
            {{ csrf_field() }}

            @if(!isset($jam_tayang_edit))
            <div class="form-group">
              <label for="id_jadwal" class="col-md-4 control-label">Jadwal Film</label>

              <div class="col-md-6">
                <select id="id_jadwal" name="jadwal" required>
                  @if(isset($jadwal))
                    @if(isset($bioskop))
                      @if(isset($studio))
                        @if(isset($film))

                          @foreach($jadwal as $jwl)
                            @foreach($bioskop as $bskp)
                              @foreach($studio as $std)
                                @foreach($film as $flm)

                                  @if($jwl->status == 1 && $std->id_studio == $jwl->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
                                    <option value="{{ $jwl->id_jadwal }}{{ $jwl->id_studio }}{{ $jwl->id_film }},">
                                      {{ $bskp->nama }} ({{ $std->jenis }}) - {{ $flm->judul }} - ({{ $jwl->tgl_tayang }} s/d {{ $jwl->tgl_berhenti }})
                                    </option>
                                  @endif

                                @endforeach
                              @endforeach
                            @endforeach
                          @endforeach

                        @endif
                      @endif
                    @endif
                    @else
                    <option>Belum ada jadwal...</option>
                  @endif
                </select>
              </div>    
            </div>
            @endif

            <div class="form-group">
              <label for="harga" class="col-md-4 control-label">Harga Tiket</label>

              <div class="col-md-6">
                <input type="number" name="harga" id="harga" required min="0" @if(isset($jam_tayang_edit)) value="{{ $jam_tayang_edit->harga }}" @endif>
              </div>
            </div>

            <div class="form-group">
              <label for="jam" class="col-md-4 control-label">Jam Tayang</label>

              <div class="col-md-6">
                <input type="text" name="jam" id="jam" required placeholder="ex. 10.00" @if(isset($jam_tayang_edit)) value="{{ $jam_tayang_edit->jam }}" @endif>
              </div>
            </div>

            <div class="form-group">
              <label for="tgl" class="col-md-4 control-label">Tanggal Tayang</label>

              <div class="col-md-6">
                <input type="date" name="tgl" id="tgl" required min="2017-06-20" @if(isset($jam_tayang_edit)) value="{{ $jam_tayang_edit->tgl_tayang }}" @endif>
              </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  @if(isset($jam_tayang_edit))
                    <button type="submit" class="btn btn-warning">Ubah Jadwal</button>
                  @else
                    <button type="submit" class="btn btn-success">Tambah Jadwal</button>
                  @endif
                </div>
              </div>

            </form>
          </div>

          {{-- daftar jam tayang --}}
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Bioskop</th>
                              <th style = "text-align: center;">Jenis Studio</th>
                              <th style = "text-align: center;">Film</th>
                              <th style = "text-align: center;">Harga</th>
                              <th style = "text-align: center;">Jam Tayang</th>
                              <th style = "text-align: center;">Tanggal Tayang</th>
                              <th style = "text-align: center;">Ubah / Hapus</th>
                          </tr>
                </thead>
                <tbody>
                  @foreach($jamtayang as $jt)
                    @foreach($jadwal as $jwl)
                      @foreach($bioskop as $bskp)
                        @foreach($studio as $std)
                          @foreach($film as $flm)
                            @if($jt->id_jadwal == $jwl->id_jadwal && $jwl->id_studio == $std->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
                              <tr>
                                          <th style = "text-align: center;">{{ $jt->id_jtf }}</th>
                                          <th style = "text-align: center;">{{ $bskp->nama }}</th>
                                          <th style = "text-align: center;">{{ $std->jenis }}</th>
                                          <th style = "text-align: center;">{{ $flm->judul }}</th>
                                          <th style = "text-align: center;">Rp. {{ $jt->harga }}</th>
                                          <th style = "text-align: center;">Pukul {{ $jt->jam }}</th>
                                          <th style = "text-align: center;">{{ $jt->tgl_tayang }}</th>
                                          <th style = "text-align: center;">
                                          <a href="{{ route('jamtayang.edit', $jt->id_jtf) }}" class="btn btn-xs btn-warning">Ubah</a>
                                          &nbsp;&nbsp;/&nbsp;&nbsp;
                                          <a href="{{ route('jamtayang.delete', $jt->id_jtf) }}" class="btn btn-xs btn-danger">Hapus</a>
                                          </th>
                                        </tr>
                            @endif
                          @endforeach
                        @endforeach
                      @endforeach
                    @endforeach
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          	@else

          		{{-- daftar jam tayang --}}
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Bioskop</th>
                              <th style = "text-align: center;">Jenis Studio</th>
                              <th style = "text-align: center;">Film</th>
                              <th style = "text-align: center;">Harga</th>
                              <th style = "text-align: center;">Jam Tayang</th>
                              <th style = "text-align: center;">Tanggal Tayang</th>
                          </tr>
                </thead>
                <tbody>
                  @foreach($jamtayang as $jt)
                    @foreach($jadwal as $jwl)
                      @foreach($bioskop as $bskp)
                        @foreach($studio as $std)
                          @foreach($film as $flm)
                            @if($jt->id_jadwal == $jwl->id_jadwal && $jwl->id_studio == $std->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
                              <tr>
                                          <th style = "text-align: center;">{{ $jt->id_jtf }}</th>
                                          <th style = "text-align: center;">{{ $bskp->nama }}</th>
                                          <th style = "text-align: center;">{{ $std->jenis }}</th>
                                          <th style = "text-align: center;">{{ $flm->judul }}</th>
                                          <th style = "text-align: center;">Rp. {{ $jt->harga }}</th>
                                          <th style = "text-align: center;">Pukul {{ $jt->jam }}</th>
                                          <th style = "text-align: center;">{{ $jt->tgl_tayang }}</th>
                                        </tr>
                            @endif
                          @endforeach
                        @endforeach
                      @endforeach
                    @endforeach
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          	@endif
          	@else
          <script>
              window.location.href = '{{ url('/') }}';
            </script>
        @endif

    @endif

        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- 
<footer class="container-fluid">
  <h1>Cinema XXI</h1>
</footer> -->

</body>
</html>