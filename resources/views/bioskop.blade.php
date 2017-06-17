<!DOCTYPE html>
<html>
<head>
	<title>Cinema XXI</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Bioskop</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST"">
							{{ csrf_field() }}

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