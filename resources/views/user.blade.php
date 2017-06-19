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
    h2
    {
      text-align: center;
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
        <li><a href="{{ url('/datapenjualan')}}">Laporan Penjaualan</a></li>
        <li class="active"><a href="{{ url('/user') }}">Users</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9">
      <div>
    <div>
      <div>
        <div class="panel panel-default">
          <div class="panel-heading">
          <h2>Users</h2>
        </div>

        {{-- Tambah User --}}
        <div class="panel-body">
          @if(isset($user_edit))
            <form action="{{ route('user.update') }}" method="POST">
            <input type="hidden" name="id" value="{{ $user_edit->id }}">
          @else
            <form class="form-horizontal" role="form" method="POST"">
          @endif
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text" name="name" required autofocus
                  @if(isset($user_edit)) value="{{ $user_edit->name }}" @endif>
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-mail</label>

                <div class="col-md-6">
                  <input id="email" type="email" name="email" required autofocus
                  @if(isset($user_edit)) value="{{ $user_edit->email }}" @endif>
                </div>
              </div>

              @if(!isset($user_edit))
                <div class="form-group">
                  <label for="password" class="col-md-4 control-label">Password</label>

                  <div class="col-md-6">
                    <input id="password" type="password" name="password" required autofocus>
                  </div>
                </div>
              @endif

              <div class="form-group">
                <label for="type" class="col-md-4 control-label">Type</label>

                <div class="col-md-6">  
                                  <select name="type" class="form-control">
                                      <option value="admin">Admin</option>
                                      <option value="customerservice">Customer Service</option>
                                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">

                  @if(isset($user_edit))
                            <button type="submit" class="btn btn-warning">Ubah User</button>
                          @else
                            <button type="submit" class="btn btn-success">Tambah User</button>
                          @endif
                </div>
              </div>
            </form>
        </div>

        {{-- table daftar User --}}

        <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                              <th style = "text-align: center;">Id</th>
                              <th style = "text-align: center;">Nama User</th>
                              <th style = "text-align: center;">Email User</th>
                              <th style = "text-align: center;">Jabatan</th>
                              <th style = "text-align: center;">Ubah / Hapus</th>
                          </tr>
                </thead>
                <tbody>
                          @foreach($user as $us)
                            @if($us->status == 1)
                    <tr>
                                <th style = "text-align: center;">{{ $us->id}}</th>
                                <th style = "text-align: center;">{{ $us->name }}</th>
                                <th style = "text-align: center;">{{ $us->email }}</th>
                                <th style = "text-align: center;">{{ $us->type }}</th>
                                <th style = "text-align: center;">
                                <a href="{{ route('user.edit', $us->id) }}" class="btn btn-xs btn-warning">Ubah</a>
                                &nbsp;&nbsp;/&nbsp;&nbsp;
                                  <!-- <form action="{{ route('user.delete', $us->id) }}" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <input type="hidden" name="id" value="DELETE">
                                  <button type="sumbit" class="btn btn-danger">Hapus</button>
                                  </form> -->
                                  <a href="{{ route('user.delete', $us->id) }}" class="btn btn-xs btn-danger">Hapus</a>
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