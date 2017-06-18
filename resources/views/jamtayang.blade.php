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
					<div class="panel-heading" id="main"><h1>Jam Tayang</h1></div>

					{{-- Tambah jam tayang --}}
					<div class="panel-body">
						@if(isset($jam_tayang_edit))
							<form action="{{ route('jamtayang.update') }}" method="POST">
							<input type="hidden" name="id_jadwal" value="{{ $jam_tayang_edit->id_jtf }}">
						@else
							<form method="POST" class="form-horizontal" role="form">
						@endif
						{{ csrf_field() }}

						<div class="form-group">
							<label for="id_jadwal" class="col-md-4 control-label">Jadwal Film</label>

							<div class="col-md-6">
								<select id="id_jadwal" name="jadwal" required>
									@if(isset($jadwal))
										@if(isset($bioskop))
											@if(isset($studio))
												@if(isset($film))

													@foreach($jadwal as $jwl)
														@foreach($bioskop as $bskp)
															@foreach($studio as $std)
																@foreach($film as $flm)

																	@if($jwl->status == 1 && $std->id_studio == $jwl->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
																		<option value="{{ $jwl->id_jadwal }}{{ $jwl->id_studio }}{{ $jwl->id_film }},">
																			{{ $bskp->nama }} ({{ $std->jenis }}) - {{ $flm->judul }} - ({{ $jwl->tgl_tayang }} s/d {{ $jwl->tgl_berhenti }})
																		</option>
																	@endif

																@endforeach
															@endforeach
														@endforeach
													@endforeach

												@endif
											@endif
										@endif
										@else
										<option>Belum ada jadwal...</option>
									@endif
								</select>
							</div>		
						</div>

						<div class="form-group">
							<label for="harga" class="col-md-4 control-label">Harga Tiket</label>

							<div class="col-md-6">
								<input type="number" name="harga" id="harga" required min="0" @if(isset($jam_tayang_edit)) value="{{ $jam_tayang_edit->harga }}" @endif>
							</div>
						</div>

						<div class="form-group">
							<label for="jam" class="col-md-4 control-label">Jam Tayang</label>

							<div class="col-md-6">
								<input type="text" name="jam" id="jam" required placeholder="ex. 10.00" @if(isset($jam_tayang_edit)) value="{{ $jam_tayang_edit->jam }}" @endif>
							</div>
						</div>

						<div class="form-group">
							<label for="tgl" class="col-md-4 control-label">Tanggal Tayang</label>

							<div class="col-md-6">
								<input type="date" name="tgl" id="tgl" required min="2017-06-20" @if(isset($jam_tayang_edit)) value="{{ $jam_tayang_edit->tgl_tayang }}" @endif>
							</div>
						</div>

						<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									@if(isset($jam_tayang_edit))
										<button type="submit" class="btn btn-warning">Ubah Jadwal</button>
									@else
										<button type="submit" class="btn btn-success">Tambah Jadwal</button>
									@endif
								</div>
							</div>

						</form>
					</div>

					{{-- daftar jam tayang --}}
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
					                    <th style = "text-align: center;">Id</th>
					                    <th style = "text-align: center;">Bioskop</th>
					                    <th style = "text-align: center;">Jenis Studio</th>
					                    <th style = "text-align: center;">Film</th>
					                    <th style = "text-align: center;">Harga</th>
					                    <th style = "text-align: center;">Jam Tayang</th>
					                    <th style = "text-align: center;">Tanggal Tayang</th>
					                    <th style = "text-align: center;">Ubah / Hapus</th>
					                </tr>
								</thead>
								<tbody>
									@foreach($jamtayang as $jt)
										@foreach($jadwal as $jwl)
											@foreach($bioskop as $bskp)
												@foreach($studio as $std)
													@foreach($film as $flm)
														@if($jt->id_jadwal == $jwl->id_jadwal && $jwl->id_studio == $std->id_studio && $std->id_bioskop == $bskp->id_bioskop && $jwl->id_film == $flm->id_film)
															<tr>
										                      <th style = "text-align: center;">{{ $jt->id_jtf }}</th>
										                      <th style = "text-align: center;">{{ $bskp->nama }}</th>
										                      <th style = "text-align: center;">{{ $std->jenis }}</th>
										                      <th style = "text-align: center;">{{ $flm->judul }}</th>
										                      <th style = "text-align: center;">Rp. {{ $jt->harga }}</th>
										                      <th style = "text-align: center;">Pukul {{ $jt->jam }}</th>
										                      <th style = "text-align: center;">{{ $jt->tgl_tayang }}</th>
										                      <th style = "text-align: center;">
										                      <a href="{{ route('jamtayang.edit', $jt->id_jtf) }}" class="btn btn-xs btn-warning">Ubah</a>
										                      &nbsp;&nbsp;/&nbsp;&nbsp;
										                      <a href="{{ route('jamtayang.delete', $jt->id_jtf) }}" class="btn btn-xs btn-danger">Hapus</a>
										                      </th>
									                    	</tr>
														@endif
													@endforeach
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