<!DOCTYPE html>
<html>
<head>
	<title>Cinema XXI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  {{-- <style>
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
	  </style> --}}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Bioskop</div>

{{-- Tambah bioskop --}}

					<!-- <div class="panel-heading">Tambah Bioskop</div> -->

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