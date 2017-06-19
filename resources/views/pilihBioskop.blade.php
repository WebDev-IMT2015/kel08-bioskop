<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>
<!-- probably not needed -->
  <button href= "{{ url()->previous() }}"> Back </button>
	<table id='tabelBioskop'  border='1'>
	@foreach($bioskop as $places)
		<tr>
			<td>
				<a href="{{ url('/pilihtanggal') }}?nama_bioskop={{ $places->nama }}">{{ $places->location }}|{{ $places->nama }}</a>
			</td>
		</tr>
	@endforeach
	</table>
  	{{-- <?php
		echo "<table id='tabelKursi'  border='1'>";

   		foreach ($bioskop as $places) {
		    echo "<tr><td onclick='/pilihtanggal?nama_bioskop='$places->nama >$places->lokasi|$places->nama</td></tr>";
		}

		echo "</table>";
	?> --}}

	<script type="text/javascript">
		// function routeMe(e){
		// 	var n = e.target.innerHTML;
		// 	var sp = n.split("|");
		// 	var res = sp[1].replace(" ", "_");
		//     document.location.href= "/pilihtanggal?nama_bioskop="+res;
		// }

	</script>

  </body>
  
</html>