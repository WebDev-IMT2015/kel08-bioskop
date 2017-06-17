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
    }
    body
    {
      background-color: black;
    }
    div.form-group
    {
      text-align: center;
      color: white;
      margin-bottom: 12px;
    
    #judul
    {
      width: 200px; /* Full-width */
      font-size: 16px; /* Increase font-size */
      padding: 6px 12px 6px 12px; /* Add some padding */
      border: 1px solid #ddd; /* Add a grey border */
      margin-bottom: 12px; /* Add some space below the input */
    }
    #durasi
    {
      width: 50px; /* Full-width */
      font-size: 16px; /* Increase font-size */
      padding: 6px 12px 6px 40px; /* Add some padding */
      border: 1px solid #ddd; /* Add a grey border */
      margin-bottom: 12px; /* Add some space below the input */
    }
    #rate
    {
      width: 50px; /* Full-width */
      font-size: 16px; /* Increase font-size */
      padding: 6px 12px 6px 40px; /* Add some padding */
      border: 1px solid #ddd; /* Add a grey border */
      margin-bottom: 12px; /* Add some space below the input */
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
                  <input id="rate" type="text" name="rate_umur" required
                  @if(isset($film_edit)) value="{{ $film_edit->rate_umur }}" @endif>
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