<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>
<!-- probably not needed -->
  <button href= "{{ url()->previous() }}"> Back </button>

	<table id='tabelBioskop'  border='1'>
	@if(isset($bioskop))
		@foreach($bioskop as $places)
			<tr>
				<td>
					<a href="{{ url('/pilihtanggal') }}?id_bioskop={{ $places->id_bioskop }}">
					{{ $places->lokasi }} - {{ $places->nama }}</a>
				</td>
			</tr>
		@endforeach
	@endif
	</table>

	<table id='tabelTanggal'  border='1'>
	@if(isset($tanggal))
		@foreach($tanggal as $dates)
			<tr>
				<td>
					<a href="{{ url('/pilihjam') }}
					?date={{ $dates->tgl_tayang }}
					&id_bioskop={{ $id_bioskop }}"> 
					{{ $dates->tgl_tayang }} </a>
				</td>
			</tr>
		@endforeach
	@endif
	</table>

	<table id='tabelJam'  border='1'>
	@if(isset($films) & isset($jtf))
		@foreach($films as $film)
			<tr>
				<td>
					{{ $film->judul }} Studio {{ $fi->id_studio }}
				</td>

				@foreach($jtf as $times)
					@if($times->id_film == $film->id_film)
						<td>
							<a href="{{ url('/kursibioskop') }}
							?id_jtf={{ $times->id_jtf }}">
							{{ $times->jam_tayang }}
							</a>
						</td>
					@endif
				@endforeach

			</tr>
		@endforeach
	@endif
	</table>


	<script type="text/javascript">
	</script>

  </body>
  
</html>