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
					<div class="panel-heading" id="main"><h1>Jadwal</h1></div>

					<!-- Tambah Jadwal -->
					<div class="panel-body">
						@if(isset($jadwal_edit))
							<form action="{{ route('jadwal.update') }}" method="POST">
							<input type="hidden" name="id_jadwal" value="{{ $jadwal_edit->id_jadwal }}">
						@else
							<form method="POST" class="form-horizontal" role="form">
						@endif
							{{ csrf_field() }}

							<div class="form-group">
								<label for='id_studio' class="col-md-4 control-label">Bioskop - Studio</label>

								<div class="col-md-6">
									<select id="id_studio" name="id_studio" required>
										@if(isset($bioskop))
											@if(isset($studio))
												@foreach($bioskop as $bskp)
													@foreach($studio as $std)
														@if($bskp->status == 1 && $std->status == 1 && $bskp->id_bioskop == $std->id_bioskop)
															<option value="{{ $std->id_studio }}">{{ $bskp->nama }}, {{ $std->jenis}}</option>
														@endif
													@endforeach
												@endforeach
											@endif
										@else
											<option>Belum ada Bioskop...</option>
										@endif
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="id_film" class="col-md-4 control-label">Film</label>
								<div class="col-md-6">
									<select id="id_film" name="id_film" required>
										@if(isset($film))
											@foreach($film as $flm)
												<option value="{{ $flm->id_film }}">{{ $flm->judul }}</option>
											@endforeach
										@else
											<option>Belum ada film...</option>
										@endif
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="tgl_tayang" class="col-md-4 control-label">Tanggal Tayang</label>

								<div class="col-md-6">
									<input type="date" name="tgl_tayang" min="2017-06-20">
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_berhenti" class="col-md-4 control-label">Tanggal Berhenti Tayang</label>

								<div class="col-md-6">
									<input type="date" name="tgl_berhenti" min="2017-06-20">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									@if(isset($jadwal_edit))
										<button type="submit" class="btn btn-warning">Ubah Jadwal</button>
									@else
										<button type="submit" class="btn btn-success">Tambah Jadwal</button>
									@endif
								</div>
							</div>
						</form>
					</div>

					<!-- Tabel daftar Jadwal -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
					                    <th style = "text-align: center;">Id</th>
					                    <th style = "text-align: center;">Bioskop</th>
					                    <th style = "text-align: center;">Jenis Studio</th>
					                    <th style = "text-align: center;">Film</th>
					                    <th style = "text-align: center;">Tanggal Tayang</th>
					                    <th style = "text-align: center;">Tanggal Berhenti</th>
					                    <th style = "text-align: center;">Ubah / Hapus</th>
					                </tr>
								</thead>
								<tbody>
									@foreach($jadwal as $jwl)
										@foreach($bioskop as $bskp)
											@foreach($studio as $std)
												@foreach($film as $flm)
													@if($jwl->status == 1 && $jwl->id_studio == $std->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
														<tr>
									                      <th style = "text-align: center;">{{ $jwl->id_jadwal}}</th>
									                      <th style = "text-align: center;">{{ $bskp->nama }}</th>
									                      <th style = "text-align: center;">{{ $std->jenis }}</th>
									                      <th style = "text-align: center;">{{ $flm->judul }}</th>
									                      <th style = "text-align: center;">{{ $jwl->tgl_tayang }}</th>
									                      <th style = "text-align: center;">{{ $jwl->tgl_berhenti }}</th>
									                      <th style = "text-align: center;">
									                      <a href="{{ route('jadwal.edit', $jwl->id_jadwal) }}" class="btn btn-xs btn-warning">Ubah</a>
									                      &nbsp;&nbsp;/&nbsp;&nbsp;
									                        <!-- <form action="{{ route('jadwal.delete', $jwl->id_jadwal) }}" method="POST">
									                        {{ csrf_field() }}
									                        {{ method_field('DELETE') }}
									                        <input type="hidden" name="id_studio" value="DELETE">
									                        <button type="sumbit" class="btn btn-danger">Hapus</button>
									                        </form> -->
									                        <a href="{{ route('jadwal.delete', $jwl->id_jadwal) }}" class="btn btn-xs btn-danger">Hapus</a>
									                      </th>
								                    	</tr>
													@endif
												@endforeach
											@endforeach
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