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
						@if(isset($studio_edit))
							<form action="{{ route('studio.update') }}" method="POST">
							<input type="hidden" name="id_studio" value="{{ $studio_edit->id_studio }}">
						@else
							<form class="form-horizontal" role="form" method="POST"">
						@endif
							{{ csrf_field() }}
							<div class="form-group">
								<label for="bioskop" class="col-md-4 control-label">Bioskop</label>

								<div class="col-md-6">
									<select id="bioskop" name="id_bioskop" required>
										@if(isset($bioskop))
											@foreach($bioskop as $bskp)
												<option value="{{ $bskp->id_bioskop }}">{{ $bskp->nama }}</option>
											@endforeach
										@else
											<option>Belum ada Bioskop</option>
										@endif
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="jenis" class="col-md-4 control-label">Jenis Studio</label>

								<div class="col-md-6">
									<select id="jenis" name="jenis" required>
										<option value="reguler">Reguler</option>
										<option value="sphereX">SphereX</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="Jumlah" class="col-md-4 control-label	">Jumlah Kursi</label>

								<div class="col-md-6">
									<input type="number" name="jumlah_kursi" id="jumlah"
									@if(isset($studio_edit)) value="{{ $studio_edit->jumlah_kursi }}" @endif>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									@if(isset($studio_edit))
					                  <button type="submit" class="btn btn-warning">Ubah Studio</button>
					                @else
					                  <button type="submit" class="btn btn-success">Tambah Studio</button>
					                @endif
								</div>
							</div>

						</form>
					</div>

{{-- Tabel daftar studio --}}
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
					                    <th style = "text-align: center;">Id</th>
					                    <th style = "text-align: center;">Lokasi Studio</th>
					                    <th style = "text-align: center;">Jenis Studio</th>
					                    <th style = "text-align: center;">Jumlah Kursi</th>
					                    <th style = "text-align: center;">Ubah / Hapus</th>
					                </tr>
								</thead>
								<tbody>
				                  	@foreach($studio as $std)
					                  	@foreach($bioskop as $bskp)
						                    @if($std->status == 1 && $std->id_bioskop==$bskp->id_bioskop)
												<tr>
							                      <th style = "text-align: center;">{{ $std->id_studio}}</th>
							                      <th style = "text-align: center;">{{ $bskp->nama }}</th>
							                      <th style = "text-align: center;">{{ $std->jenis }}</th>
							                      <th style = "text-align: center;">{{ $std->jumlah_kursi }}</th>
							                      <th style = "text-align: center;">
							                      <a href="{{ route('studio.edit', $std->id_studio) }}" class="btn btn-xs btn-warning">Ubah</a>
							                      &nbsp;&nbsp;/&nbsp;&nbsp;
							                        <!-- <form action="{{ route('studio.delete', $std->id_studio) }}" method="POST">
							                        {{ csrf_field() }}
							                        {{ method_field('DELETE') }}
							                        <input type="hidden" name="id_studio" value="DELETE">
							                        <button type="sumbit" class="btn btn-danger">Hapus</button>
							                        </form> -->
							                        <a href="{{ route('studio.delete', $std->id_studio) }}" class="btn btn-xs btn-danger">Hapus</a>
							                      </th>
						                    	</tr>
						                    @endif
					                  	@endforeach
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