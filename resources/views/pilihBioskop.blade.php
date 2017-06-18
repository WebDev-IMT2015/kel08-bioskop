<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>

  	<?php
		echo "<table id='tabelKursi'  onclick='routeMe(event)'>";

   		foreach ($bioskop as $places) {
		    echo "<tr><td>".{{ $places->lokasi }}."|".{{ $places->nama }}."</td></tr>";
		}

		echo "</table>";
	?>

	<script type="text/javascript">
		function routeMe(e){
			var n = e.target.innerHTML;
			var sp = str.split("|");

		    document.location.href="/pilihtanggal/"+sp[1];
		}

	</script>

  </body>
  
</html>