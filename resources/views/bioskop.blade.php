<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
        <li class="active"><a href="{{ url('/bioskop')}}">Bioskop</a></li>
        <li><a href="{{ url('/studio')}}">Studio</a></li>
        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
        <li><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
        <li><a href="{{ url('/datapenjualan')}}">Laporan Penjaualan</a></li>
        <li><a href="{{ url('/user') }}">Users</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <div>
    <div>
      <div>
        <div class="panel panel-default">
          <div class="panel-heading">Bioskop</div>

{{-- Tambah bioskop --}}

          <!-- <div class="panel-heading">Tambah Bioskop</div> -->

          <div class="panel-body">
          @if(isset($bioskop_edit))
            <form action="{{ route('bioskop.update') }}" method="POST">
            <input type="hidden" name="id_bioskop" value="{{ $bioskop_edit->id_bioskop }}">
          @else
            <form class="form-horizontal" role="form" method="POST"">
          @endif
              {{ csrf_field() }}
              <div class="form-group">
                <label for="nama" class="col-md-4 control-label">Nama Bioskop</label>

                <div class="col-md-6">
                  <input id="nama" type="text" name="nama" required autofocus
                  @if(isset($bioskop_edit)) value="{{ $bioskop_edit->nama }}" @endif>
                </div>
              </div>

              <div class="form-group">
                <label for="lokasi" class="col-md-4 control-label">Lokasi Bioskop</label>

                <div class="col-md-6">
                  <input id="lokasi" type="text" name="lokasi" required autofocus
                  @if(isset($bioskop_edit)) value="{{ $bioskop_edit->lokasi }}" @endif>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">

                  @if(isset($bioskop_edit))
                            <button type="submit" class="btn btn-warning">Ubah Bioskop</button>
                          @else
                            <button type="submit" class="btn btn-success">Tambah Bioskop</button>
                          @endif
                </div>
              </div>
            </form>
          </div>

{{-- Tabel daftar bioskop --}}
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Nama Bioskop</th>
                              <th style = "text-align: center;">Lokasi Bioskop</th>
                              <th style = "text-align: center;">Ubah / Hapus</th>
                          </tr>
                </thead>
                <tbody>
                          @foreach($bioskop as $bskp)
                            @if($bskp->status == 1)
                    <tr>
                                <th style = "text-align: center;">{{ $bskp->id_bioskop}}</th>
                                <th style = "text-align: center;">{{ $bskp->nama }}</th>
                                <th style = "text-align: center;">{{ $bskp->lokasi }}</th>
                                <th style = "text-align: center;">
                                <a href="{{ route('bioskop.edit', $bskp->id_bioskop) }}" class="btn btn-xs btn-warning">Ubah</a>
                                &nbsp;&nbsp;/&nbsp;&nbsp;
                                  <!-- <form action="{{ route('bioskop.delete', $bskp->id_bioskop) }}" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <input type="hidden" name="id_bioskop" value="DELETE">
                                  <button type="sumbit" class="btn btn-danger">Hapus</button>
                                  </form> -->
                                  <a href="{{ route('bioskop.delete', $bskp->id_bioskop) }}" class="btn btn-xs btn-danger">Hapus</a>
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
  </div>
</div>
<!-- 
<footer class="container-fluid">
  <h1>Cinema XXI</h1>
</footer> -->

</body>
</html>