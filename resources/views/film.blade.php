<!DOCTYPE html>
<html>
<head>
  <title>Cinema XXI</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <style>
    #main
    {
      text-align: center;
      color: white;

  <style>
    input[type=text], select {
        width: 100%;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }
    input[type=number], select {
        width: 100%;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    div.form-group
    {
      text-align: center;
      color: white;
      margin-bottom: 12px;
    
    #judul

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    .panel-body

    {
        width: 40%
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px 80px 10px 80px;
        margin: 10px 35% 10px 35%;
    }
    h1
    {
      text-align: center;
    }
    body
    {
      background-color: black;
    }
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
    }
  </style> -->
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
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
                        <!-- <form action="{{ route('film.delete', $flm->id_film) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="id_film" value="DELETE">
                        <button type="sumbit" class="btn btn-danger">Hapus</button>
                        </form> -->
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
</body>
</html>