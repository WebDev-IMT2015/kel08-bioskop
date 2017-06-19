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
        <li class="active"><a href="{{ url('/film')}}">Film</a></li>
        <li><a href="{{ url('/bioskop')}}">Bioskop</a></li>
        <li><a href="{{ url('/studio')}}">Studio</a></li>
        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
        <li><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
        <li><a href="{{ url('/datapenjualan')}}">Laporan Penjualan</a></li>
        <li><a href="{{ url('/user') }}">Users</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      @if(Route::has('login'))
        @if(Auth::check())
          @if(Auth::user()->type == "admin")
          <div>
            <div>
              <div>
                <div class="panel panel-default" align="center">
                  <div class="panel-heading" id="main"><h1>Film</h1></div>

        <!-- Tambah film -->
                  <div class="panel-body">
                  @if(isset($film_edit))
                    <form action="{{ route('film.update') }}" method="POST">
                    <input type="hidden" name="id_film" value="{{ $film_edit->id_film }}">
                  @else
                    <form class="form-horizontal" role="form" method="POST"">
                  @endif
                      {{ csrf_field() }}
                      <div class="form-group">

                        <label for="judulbox" class="col-md-4 control-label">Judul Film</label>

                        <div class="col-md-6">
                          <input id="judul" type="text" name="judul" placeholder="Masukan judul film" required autofocus 
                          @if(isset($film_edit)) value="{{ $film_edit->judul }}" @endif>
                        </div>

                      </div>

                      <div class="form-group">

                        <label for="durasi" class="col-md-4 control-label">Durasi</label>

                        <div class="col-md-6">
                          <input id="durasi" type="number" name="durasi" required
                          @if(isset($film_edit)) value="{{ $film_edit->durasi }}" @endif>
                        </div>

                      </div>

                      <div class="form-group">

                        <label for="rate" class="col-md-4 control-label">Rate Umur</label>

                        <div class="col-md-6">
                          <select id="rate" name="rate_umur" required>
                            <option value="semua">Semua Umur</option>
                            <option value="dewasa">Dewasa</option>
                            <option value="remaja">Remaja</option>
                            <option value="anak">Anak - anak</option>
                          </select>
                        </div>

                      </div>

                      <div class="form-group">

                        <div class="col-md-6 col-md-offset-4">
                        @if(isset($film_edit))
                          <button type="submit" class="btn btn-warning">Ubah Film</button>
                        @else
                          <button type="submit" class="btn btn-success">Tambah Film</button>
                        @endif
                        </div>

                      </div>

                    </form>
                  </div>

        <!-- Tabel daftar film -->
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" >
                        <thead>
                          <tr>
                            <th style = "text-align: center;">Id</th>
                            <th style = "text-align: center;">Judul Film</th>
                            <th style = "text-align: center;">Durasi Film</th>
                            <th style = "text-align: center;">Rate Film</th>
                            <th style = "text-align: center;">Ubah / Hapus</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($film as $flm)
                            @if($flm->status == 1)
                            <tr>
                              <th style = "text-align: center;">{{ $flm->id_film }}</th>
                              <th style = "text-align: center;">{{ $flm->judul }}</th>
                              <th style = "text-align: center;">{{ $flm->durasi }} menit</th>
                              <th style = "text-align: center;">{{ $flm->rate_umur }}</th>
                              <th style = "text-align: center;">
                              <a href="{{ route('film.edit', $flm->id_film) }}" class="btn btn-xs btn-warning">Ubah</a>
                              &nbsp;&nbsp;/&nbsp;&nbsp;
                                <a href="{{ route('film.delete', $flm->id_film) }}" class="btn btn-xs btn-danger">Hapus</a>
                              </th>
                            </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div> 
                  </div>
                  
                </div>
              </div>
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
<!-- 
<footer class="container-fluid">
  <h1>Cinema XXI</h1>
</footer> -->

</body>
</html>