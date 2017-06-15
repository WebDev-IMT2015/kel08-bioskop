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
					<div class="panel-heading">Tambah Film</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST"">
							{{ csrf_field() }}

							<div class="form-group">
								<label for="judul" class="col-md-4 control-label">Judul Film</label>

								<div class="col-md-6">
									<input id="judul" type="text" name="judul" required autofocus>
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