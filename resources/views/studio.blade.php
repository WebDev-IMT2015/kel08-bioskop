<!DOCTYPE html>
<html>
<head>
	<title>Cinema XXI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default" align="center">
					<div class="panel-heading" id="main">
						<h1>Studio</h1>
					</div>

					{{-- Tambah Studio --}}
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="Jenis" class="col-md-4 control-label">Jenis Studio</label>

								<div class="col-md-6">
									<select id="jenis" name="jenis" required="">
										<option value="reguler">Reguler</option>
										<option value="sphereX">SphereX</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="Jumlah" class="col-md-4">Jumlah Kursi</label>

								<div class="col-md-6">
									<input type="number" name="jumlah" id="jumlah">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-success">Tambah Studio</button>
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