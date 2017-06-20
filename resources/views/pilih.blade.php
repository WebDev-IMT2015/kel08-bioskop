<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>
<!-- probably not needed -->

	<table id='tabelBioskop' border='1'>
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
	@if(isset($jtf))
		{{-- jtf, id_bioskop --}}
		<?php
			// $bStudios = $studios->where('id_bioskop', $id_bioskop);
			// foreach ($bStudios as $loop) 
			// 	foreach ($jtf as $loop2)
			// 		if($loop2->id_studio == $loop->id_studio){
			// 			$ftimes = $loop2;
			// 		}
			// if (sizeof($ftimes)>1) {
			// 	$ufTimes = $ftimes->unique('tgl_tayang');
			// }
		?>
		@if(sizeof($jtf)>1)
			@foreach($uftimes as $dates)
				<tr>
					<td>
						<a href="{{ url('/pilihjam') }}
						?date={{ $dates->tgl_tayang }}
						&id_bioskop={{ $id_bioskop }}"> 
						{{ $dates->tgl_tayang }} </a>
					</td>
				</tr>
			@endforeach
		@else
			<tr>
				<td>
					<a href="{{ url('/pilihjam') }}
					?date={{ $jtf->tgl_tayang }}
					&id_bioskop={{ $id_bioskop }}"> 
					{{ $jtf->tgl_tayang }} </a>
				</td>
			</tr>
		@endif
	@endif
	</table>

	<table id='tabelJam'  border='1'>
	@if(isset($times))
		{{-- times,film,studio,date,unique --}}
		@foreach($unique as $films)
			<?php
				$filmNames = $film->where('id_film', $films->id_film)->first();
				$studioNum = $studio->where('id_studio', $films->id_studio)->first();
			?>
			<tr>
				<td>
					{{ $filmNames->judul }} Studio {{ $studioNum->id_studio }}
				</td>
				<?php
					$showtimes = $times
						->where('id_studio', $films->id_studio)
		    			->where('id_film', $films->id_film);//real magic
		    		// echo "{{ $showtimes->id_jtf}}";
		    		//dd($showtimes);

				?>

				{{-- @if(($showtimes->count())>1) --}}
					@foreach($showtimes as $times)

						@if($times->id_film == $films->id_film)
							<td>
								<a href="{{ url('/kursibioskop') }}
								?id_jtf={{ $times->id_jtf }}">
								{{ $times->jam }}
								</a>
							</td>
						@endif
					@endforeach
				{{-- @else
					<td>
						<a href="{{ url('/kursibioskop') }}
						?id_jtf={{ $showtimes->id_jtf }}">
						{{ $showtimes->jam_tayang }}
						</a>
					</td>
				@endif --}}
			</tr>
		@endforeach
	@endif
	</table>


	<script type="text/javascript">
	</script>

  </body>
  
</html>