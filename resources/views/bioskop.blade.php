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
	    #nama
	    {
		    width: 100%; /* Full-width */
		    font-size: 16px; /* Increase font-size */
		    padding: 12px 20px 12px 40px; /* Add some padding */
		    border: 1px solid #ddd; /* Add a grey border */
		    margin-bottom: 12px; /* Add some space below the input */
		}
		#lokasi
	    {
		    width: 100%; /* Full-width */
		    font-size: 16px; /* Increase font-size */
		    padding: 12px 20px 12px 40px; /* Add some padding */
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
					<!-- <div class="panel-heading">Tambah Bioskop</div> -->
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST"">
							{{ csrf_field() }}
							<h1>Tambah Bioskop</h1>
							<div class="form-group">
								<label for="nama" class="col-md-4 control-label">Nama Bioskop</label>

								<div class="col-md-6">
									<input id="nama" type="text" name="nama" required autofocus>
								</div>
							</div>

							<div class="form-group">
								<label for="lokasi" class="col-md-4 control-label">Lokasi Bioskop</label>

								<div class="col-md-6">
									<input id="lokasi" type="text" name="lokasi" required autofocus>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<input type="submit" value="Submit" placeholder="Tambah Bioskop">
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