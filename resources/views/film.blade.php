<!DOCTYPE html>
<html>
<head>
  <title>Cinema XXI</title>
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
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST"">
              {{ csrf_field() }}
              <h1>Tambah Film</h1>
              <div class="form-group">
                <label for="judulbox" class="col-md-4 control-label">Judul Film</label>
                <div class="col-md-6">
                  <input id="judul" type="text" name="judul" placeholder="Input Title Movie" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="durasi" class="col-md-4 control-label">Durasi</label>
                <div class="col-md-6">
                  <input id="durasi" type="number" name="durasi" required>
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
                  <input type="submit" value="Submit" placeholder="Tambah Film">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>