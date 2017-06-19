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
        <li><a href="{{ url('/bioskop')}}">Bioskop</a></li>
        <li><a href="{{ url('/studio')}}">Studio</a></li>
        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
        <li><a href="{{ url('/jamtayang')}}">Jam Tayang</a></li>
        <li class="active"><a href="{{ url('/datapenjualan')}}">Laporan Penjaualan</a></li>
        <li><a href="{{ url('/user') }}">Users</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <h2>Data Penjualan Bulan ini</h2>
      <div>           
      <table class="table table-hover">
        <thead>
          <tr class="active">
            <th>No</th>
            <th>Tanggal</th>
            <th>Bioskop</th>
            <th>Studio</th>
            <th>Film</th>
            <th>Jumlah Ticket</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pesanan as $psn)
            @foreach($jam as $jm)
              @foreach($bioskop as $bio)
                @foreach($studio as $stu)
                  @foreach($film as $fil)

                    @if($psn->id_jtf == $jm->id_jtf && $jm->id_studio == $stu->id_studio && $stu->id_bioskop == $bio->id_bioskop && $fil->id_film == $jm->id_film)
                      <tr>
                        <th>{{ $psn->id_order }}</th>
                        <th>{{ $psn->tlg_pesan }}</th>
                        <th>{{ $bio->nama }}</th>
                        <th>{{ $stu->jenis }}</th>
                        <th>{{ $fil->judul }}</th>
                        <th>{{ $psn->jumlah_tiket }}</th>
                        <th>Rp. {{ (int) $psn->jumlah_tiket*(int)$jm->harga }}</th>
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
  </div>
</div>
<!-- 
<footer class="container-fluid">
  <h1>Cinema XXI</h1>
</footer> -->

</body>
</html>