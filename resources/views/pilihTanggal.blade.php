<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>

  <button href= "{{ url()->previous() }}"> Back </button>

  	<?php
	  	$unique = $jtf->unique('tgl_tayang');
		echo "<table id='tabelKursi'  onclick='routeMe(event)'>";

   		foreach ($unique as $films) {
		    echo "<tr><td>{{ $films->tgl_tayang }}</td></tr>";
		}

		echo "</table>";
	?>

	<script type="text/javascript">
		function routeMe(e){
		    document.location.href="/pilihjam/"+e.target.innerHTML;
		}

	</script>

  </body>
  
</html>