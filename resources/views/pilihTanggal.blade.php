<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>

  <button href= "{{ url()->previous() }}"> Back </button>

  	<table id='tabelTanggal'  border='1'>
	@foreach($jtf as $dates)
		<tr>
			<td>
				<a href="{{ url('/pilihjam') }}?date={{ $dates->tgl_tayang }}"> {{ $dates->tgl_tayang }} </a>
			</td>

			
		</tr>
	@endforeach
	</table>

  	{{-- <?php
	  	
		echo "<table id='tabelKursi'  onclick='routeMe(event)' border='1'>";

   		foreach ($unique as $films) {
		    echo "<tr><td>$films->tgl_tayang</td></tr>";
		}

		echo "</table>";
	?> --}}

	<script type="text/javascript">
		// function routeMe(e){
		//     document.location.href="/pilihjam/"+e.target.innerHTML;
		// }

	</script>

  </body>
  
</html>