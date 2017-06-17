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
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default"> -->
				<!-- <div class="panel-heading" id="main"><h1>Tambah Film</h1></div> -->
					<div class="panel-body">
						{{ csrf_field() }}
            <form class="form-horizontal" role="form" method="POST"">
              <h1>Tambah Film</h1>

              <label for="judulbox" class="col-md-4 control-label">Judul Film</label>
              <input id="judul" type="text" name="judul" placeholder="Input Title Movie" required autofocus>
              
              <label for="durasi" class="col-md-4 control-label">Durasi</label>
              <input id="durasi" type="number" name="durasi" required>

              <label for="rate" class="col-md-4 control-label">Rate Umur</label>
              <select id="rate" name="rate_umur" required>
                <option value="semua">Semua Umur</option>
                <option value="dewasa">Dewasa</option>
                <option value="remaja">Remaja</option>
                <option value="anak">Anak - anak</option>
              </select>

              <input type="submit" value="Submit" placeholder="Tambah Film">
            </form>
					</div>
				<!-- </div> -->
			<!-- </div>
		</div>
	</div> -->
</body>
</html>