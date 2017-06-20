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
        <li><a href="{{ url('/film')}}">Film</a></li>
        <li><a href="{{ url('/bioskop')}}">Bioskop</a></li>
        <li class="active"><a href="{{ url('/studio')}}">Studio</a></li>
        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
        <li><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
        <li><a href="{{ url('/datapenjualan')}}">Laporan Penjualan</a></li>
        <li><a href="{{ url('/user') }}">Users</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <div>
    <div>
      <div>
        <div class="panel panel-default" align="center">
          <div class="panel-heading" id="main">
            <h1>Studio</h1>
          </div>

          @if(Route::has('login'))
                @if(Auth::check())
                    @if(Auth::user()->type == "admin")

          {{-- Tambah Studio --}}
          <div class="panel-body">
            @if(isset($studio_edit))
              <form action="{{ route('studio.update') }}" method="POST">
              <input type="hidden" name="id_studio" value="{{ $studio_edit->id_studio }}">
            @else
              <form class="form-horizontal" role="form" method="POST"">
            @endif
              {{ csrf_field() }}

              @if(!isset($studio_edit))
              <div class="form-group">
                <label for="bioskop" class="col-md-4 control-label">Bioskop</label>

                <div class="col-md-6">
                  <select id="bioskop" name="id_bioskop" required>
                    @if(isset($bioskop))
                      @foreach($bioskop as $bskp)
                        <option value="{{ $bskp->id_bioskop }}">{{ $bskp->nama }}</option>
                      @endforeach
                    @else
                      <option>Belum ada Bioskop</option>
                    @endif
                  </select>
                </div>
              </div>
              @endif

              <div class="form-group">
                <label for="jenis" class="col-md-4 control-label">Jenis Studio</label>

                <div class="col-md-6">
                  <select id="jenis" name="jenis" required>
                    <option value="reguler">Reguler</option>
                    <option value="sphereX">SphereX</option>
                  </select>
                </div>
              </div>

              {{-- <div class="form-group">
                <label for="Jumlah" class="col-md-4 control-label ">Jumlah Kursi</label>

                <div class="col-md-6">
                  <input type="number" name="jumlah_kursi" id="jumlah"
                  @if(isset($studio_edit)) value="{{ $studio_edit->jumlah_kursi }}" @endif>
                </div>
              </div> --}}

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  @if(isset($studio_edit))
                            <button type="submit" class="btn btn-warning">Ubah Studio</button>
                          @else
                            <button type="submit" class="btn btn-success">Tambah Studio</button>
                          @endif
                </div>
              </div>

            </form>
          </div>

{{-- Tabel daftar studio --}}
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Lokasi Studio</th>
                              <th style = "text-align: center;">Jenis Studio</th>
                              <th style = "text-align: center;">Jumlah Kursi</th>
                              <th style = "text-align: center;">Ubah / Hapus</th>
                          </tr>
                </thead>
                <tbody>
                            @foreach($studio as $std)
                              @foreach($bioskop as $bskp)
                                @if($std->status == 1 && $std->id_bioskop==$bskp->id_bioskop)
                        <tr>
                                    <th style = "text-align: center;">{{ $std->id_studio}}</th>
                                    <th style = "text-align: center;">{{ $bskp->nama }}</th>
                                    <th style = "text-align: center;">{{ $std->jenis }}</th>
                                    <th style = "text-align: center;">{{ $std->jumlah_kursi }}</th>
                                    <th style = "text-align: center;">
                                    <a href="{{ route('studio.edit', $std->id_studio) }}" class="btn btn-xs btn-warning">Ubah</a>
                                    &nbsp;&nbsp;/&nbsp;&nbsp;
                                      <!-- <form action="{{ route('studio.delete', $std->id_studio) }}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                      <input type="hidden" name="id_studio" value="DELETE">
                                      <button type="sumbit" class="btn btn-danger">Hapus</button>
                                      </form> -->
                                      <a href="{{ route('studio.delete', $std->id_studio) }}" class="btn btn-xs btn-danger">Hapus</a>
                                    </th>
                                  </tr>
                                @endif
                              @endforeach
                            @endforeach
                        </tbody>
              </table>
            </div>
          </div>

          @else
          <script>
              window.location.href = '{{ url('/home') }}';
            </script>

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