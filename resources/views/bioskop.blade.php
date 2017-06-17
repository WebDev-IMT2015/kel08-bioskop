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
				<div class="panel panel-default">
					<div class="panel-heading">Bioskop</div>

{{-- Tambah bioskop --}}
					<div class="panel-body">
					@if(isset($bioskop_edit))
						<form action="{{ route('bioskop.update') }}" method="POST">
						<input type="hidden" name="id_bioskop" value="{{ $bioskop_edit->id_bioskop }}">
					@else
						<form class="form-horizontal" role="form" method="POST"">
					@endif
							{{ csrf_field() }}

							<div class="form-group">
								<label for="nama" class="col-md-4 control-label">Nama Bioskop</label>

								<div class="col-md-6">
									<input id="nama" type="text" name="nama" required autofocus
									@if(isset($bioskop_edit)) value="{{ $bioskop_edit->nama }}" @endif>
								</div>
							</div>

							<div class="form-group">
								<label for="lokasi" class="col-md-4 control-label">Lokasi Bioskop</label>

								<div class="col-md-6">
									<input id="lokasi" type="text" name="lokasi" required autofocus
									@if(isset($bioskop_edit)) value="{{ $bioskop_edit->lokasi }}" @endif>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									@if(isset($bioskop_edit))
					                  <button type="submit" class="btn btn-warning">Ubah Bioskop</button>
					                @else
					                  <button type="submit" class="btn btn-success">Tambah Bioskop</button>
					                @endif
								</div>
							</div>
						</form>
					</div>

{{-- Tabel daftar bioskop --}}
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
					                    <th style = "text-align: center;">Id</th>
					                    <th style = "text-align: center;">Nama Bioskop</th>
					                    <th style = "text-align: center;">Lokasi Bioskop</th>
					                    <th style = "text-align: center;">Ubah / Hapus</th>
					                </tr>
								</thead>
								<tbody>
				                  @foreach($bioskop as $bskp)
				                    <tr>
				                      <th style = "text-align: center;">{{ $bskp->id_bioskop}}</th>
				                      <th style = "text-align: center;">{{ $bskp->nama }}</th>
				                      <th style = "text-align: center;">{{ $bskp->lokasi }}</th>
				                      <th style = "text-align: center;">
				                      <a href="{{ route('bioskop.edit', $bskp->id_bioskop) }}" class="btn btn-xs btn-warning">Ubah</a>
				                      &nbsp;&nbsp;/&nbsp;&nbsp;
				                        <!-- <form action="{{ route('bioskop.delete', $bskp->id_bioskop) }}" method="POST">
				                        {{ csrf_field() }}
				                        {{ method_field('DELETE') }}
				                        <input type="hidden" name="id_bioskop" value="DELETE">
				                        <button type="sumbit" class="btn btn-danger">Hapus</button>
				                        </form> -->
				                        <a href="{{ route('bioskop.delete', $bskp->id_bioskop) }}" class="btn btn-xs btn-danger">Hapus</a>
				                      </th>
				                    </tr>
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