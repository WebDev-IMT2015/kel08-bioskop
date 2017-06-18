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
    .row.content {height: 630px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 4px;
    }
    
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
      <a class="navbar-brand">Cinema XXI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ url('/film')}}">Film</a></li>
        <li><a href="{{ url('/bioskop')}}">Bioskop</a></li>
        <li><a href="{{ url('/studio')}}">Studio</a></li>
        <li><a href="{{ url('/jadwal')}}">Jadwal</a></li>
        <li><a href="#section3">Jam Tayang</a></li>
        <li class="active"><a>Laporan Penjaualan</a></li>
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
            <th>Pelanggan</th>
            <th>Film</th>
            <th>Jumlah Ticket</th>
            <th>Total Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <th>10-10-2017</th>
            <th>Calvin</th>
            <th>Pirate of Carribean</th>
            <th>1</th>
            <th>50000</th>
          </tr>
          <tr>
            <th>2</th>
            <th>10-10-2017</th>
            <th>Calvin</th>
            <th>Pirate of Carribean</th>
            <th>1</th>
            <th>50000</th>
          </tr>
          <tr>
            <th>3</th>
            <th>10-10-2017</th>
            <th>Calvin</th>
            <th>Pirate of Carribean</th>
            <th>1</th>
            <th>50000</th>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <h1>Cinema XXI</h1>
</footer>

</body>
</html>