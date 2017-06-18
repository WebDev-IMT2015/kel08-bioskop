<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>
<!-- probably not needed -->
  <button href= "{{ url()->previous() }}"> Back </button>

  	<?php
		echo "<table id='tabelKursi'  onclick='routeMe(event)' border='1'>";

   		foreach ($bioskop as $places) {
		    echo "<tr><td>$places->lokasi|$places->nama</td></tr>";
		}

		echo "</table>";
	?>

	<script type="text/javascript">
		function routeMe(e){
			var n = e.target.innerHTML;
			var sp = n.split("|");
		    document.location.href="/pilihtanggal/"+sp[1];
		}

	</script>

  </body>
  
</html>