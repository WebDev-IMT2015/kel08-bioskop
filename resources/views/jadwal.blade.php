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
                        <li class="active"><a href="{{ url('/jadwal')}}">Jadwal</a></li>
                        <li><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
                        <li><a href="{{ url('/dataPenjualan')}}">Laporan Penjualan</a></li>
                        <li><a href="{{ url('/user') }}">Users</a></li>
                        @else
                        <li><a href="{{ url('/pilihbioskop') }}">Pesan Tiket</a></li>
                        <li class="active"><a href="{{ url('/jadwal')}}">Jadwal</a></li>
                        <li><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
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
          <div class="panel-heading" id="main"><h1>Jadwal</h1></div>


          @if(Route::has('login'))
                @if(Auth::check())
                    @if(Auth::user()->type == "admin")

          <!-- Tambah Jadwal -->
          <div class="panel-body">
            @if(isset($jadwal_edit))
              <form action="{{ route('jadwal.update') }}" method="POST">
              <input type="hidden" name="id_jadwal" value="{{ $jadwal_edit->id_jadwal }}">
            @else
              <form method="POST" class="form-horizontal" role="form">
            @endif
              {{ csrf_field() }}

              <div class="form-group">
                <label for='id_studio' class="col-md-4 control-label">Bioskop - Studio</label>

                <div class="col-md-6">
                  <select id="id_studio" name="id_studio" required>
                    @if(isset($bioskop))
                      @if(isset($studio))
                        @foreach($bioskop as $bskp)
                          @foreach($studio as $std)
                            @if($bskp->status == 1 && $std->status == 1 && $bskp->id_bioskop == $std->id_bioskop)
                              <option value="{{ $std->id_studio }}">{{ $bskp->nama }}, {{ $std->jenis}}</option>
                            @endif
                          @endforeach
                        @endforeach
                      @endif
                    @else
                      <option>Belum ada Bioskop...</option>
                    @endif
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="id_film" class="col-md-4 control-label">Film</label>
                <div class="col-md-6">
                  <select id="id_film" name="id_film" required>
                    @if(isset($film))
                      @foreach($film as $flm)
                        <option value="{{ $flm->id_film }}">{{ $flm->judul }}</option>
                      @endforeach
                    @else
                      <option>Belum ada film...</option>
                    @endif
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label for="tgl_tayang" class="col-md-4 control-label">Tanggal Tayang</label>

                <div class="col-md-6">
                  <input type="date" name="tgl_tayang" min="2017-06-20" @if(isset($jadwal_edit)) value='{{$jadwal_edit->tgl_tayang}}' @endif)>
                </div>
              </div>

              <div class="form-group">
                <label for="tgl_berhenti" class="col-md-4 control-label">Tanggal Berhenti Tayang</label>

                <div class="col-md-6">
                  <input type="date" name="tgl_berhenti" min="2017-06-20" @if(isset($jadwal_edit)) value='{{$jadwal_edit->tgl_berhenti}}' @endif>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  @if(isset($jadwal_edit))
                    <button type="submit" class="btn btn-warning">Ubah Jadwal</button>
                  @else
                    <button type="submit" class="btn btn-success">Tambah Jadwal</button>
                  @endif
                </div>
              </div>
            </form>
          </div>

          <!-- Tabel daftar Jadwal -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Bioskop</th>
                              <th style = "text-align: center;">Jenis Studio</th>
                              <th style = "text-align: center;">Film</th>
                              <th style = "text-align: center;">Tanggal Tayang</th>
                              <th style = "text-align: center;">Tanggal Berhenti</th>
                              <th style = "text-align: center;">Ubah / Hapus</th>
                          </tr>
                </thead>
                <tbody>
                  @foreach($jadwal as $jwl)
                    @foreach($bioskop as $bskp)
                      @foreach($studio as $std)
                        @foreach($film as $flm)
                          @if($jwl->status == 1 && $jwl->id_studio == $std->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
                            <tr>
                                        <th style = "text-align: center;">{{ $jwl->id_jadwal}}</th>
                                        <th style = "text-align: center;">{{ $bskp->nama }}</th>
                                        <th style = "text-align: center;">{{ $std->jenis }}</th>
                                        <th style = "text-align: center;">{{ $flm->judul }}</th>
                                        <th style = "text-align: center;">{{ $jwl->tgl_tayang }}</th>
                                        <th style = "text-align: center;">{{ $jwl->tgl_berhenti }}</th>
                                        <th style = "text-align: center;">
                                        <a href="{{ route('jadwal.edit', $jwl->id_jadwal) }}" class="btn btn-xs btn-warning">Ubah</a>
                                        &nbsp;&nbsp;/&nbsp;&nbsp;
                                          <!-- <form action="{{ route('jadwal.delete', $jwl->id_jadwal) }}" method="POST">
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }}
                                          <input type="hidden" name="id_studio" value="DELETE">
                                          <button type="sumbit" class="btn btn-danger">Hapus</button>
                                          </form> -->
                                          <a href="{{ route('jadwal.delete', $jwl->id_jadwal) }}" class="btn btn-xs btn-danger">Hapus</a>
                                        </th>
                                      </tr>
                          @endif
                        @endforeach
                      @endforeach
                    @endforeach
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          @else

          <!-- Tabel daftar Jadwal -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Bioskop</th>
                              <th style = "text-align: center;">Jenis Studio</th>
                              <th style = "text-align: center;">Film</th>
                              <th style = "text-align: center;">Tanggal Tayang</th>
                              <th style = "text-align: center;">Tanggal Berhenti</th>
                          </tr>
                </thead>
                <tbody>
                  @foreach($jadwal as $jwl)
                    @foreach($bioskop as $bskp)
                      @foreach($studio as $std)
                        @foreach($film as $flm)
                          @if($jwl->status == 1 && $jwl->id_studio == $std->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
                            <tr>
                                        <th style = "text-align: center;">{{ $jwl->id_jadwal}}</th>
                                        <th style = "text-align: center;">{{ $bskp->nama }}</th>
                                        <th style = "text-align: center;">{{ $std->jenis }}</th>
                                        <th style = "text-align: center;">{{ $flm->judul }}</th>
                                        <th style = "text-align: center;">{{ $jwl->tgl_tayang }}</th>
                                        <th style = "text-align: center;">{{ $jwl->tgl_berhenti }}</th>
                                      </tr>
                          @endif
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
</footer>
 -->
</body>
</html>