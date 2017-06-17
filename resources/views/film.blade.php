<!DOCTYPE html>
<html>
<head>
  <title>Cinema XXI</title>
  <style>
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
    }
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
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading" id="main"><h1>Tambah Film</h1></div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST"">
              <!-- {{ csrf_field() }} -->
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
                  <input id="rate" type="text" name="rate_umur" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">Tambah Film</button>
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