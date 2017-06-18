<!DOCTYPE html>
<html>
  <head>
   	

  </head>
  <body>
	<?php
	  	$unique = $dayFiltered->unique('id_studio', 'id_film');
		echo "<table id='tabelKursi'  onclick='routeMe(this)'>";

   		foreach ($unique as $films) {
   			$filmNames = $film->where('id_film', $films->id_film)->first();
		    echo "<tr><td>".{{ $filmNames->judul }}."|".{{ $films->id_studio }}."</td>";
		    
		    $showtimes = $jtf->where('id_studio', $films->id_studio)
		    	->where('id_film', $films->id_film);//real magic
		    foreach ($showtimes as $t) {
		    	echo "<td>".{{ $showtimes->jam }}."</td>";
		    }

		    echo "</tr>";
		}

		echo "</table>";
	?>

  </body>
	<script type="text/javascript">
		function routeMe(e){//hope shit works
			var n = e.parentNode.parentNode.cells[0].innerHTML;
			var sp = str.split("|");
		    document.location.href="/kursibioskop/"+sp[1]+"/"+sp[0]+"/"+e.target.innerHTML;
		}

	</script>

  <!-- RIP JS table
  <script type="text/javascript">
  	//first loop will be films
	//second will be movie times
	function myFunction() {
   		var x = document.createElement("TABLE");
	    x.setAttribute("id", "myTable");
	    document.body.appendChild(x);
	    for (var i = 0; i < 5; i++) {
		    var y = document.createElement("TR");
		    y.setAttribute("id", "myTr"+i);
		    document.getElementById("myTable").appendChild(y);
		    for (var j = 0; j < 5; j++) {
		    	var z = document.createElement("TD");
	    		var t = document.createTextNode(i*j);
	    		z.appendChild(t);
    		document.getElementById("myTr"+i).appendChild(z);
		    }
		} 
	}
	//gunakan kode ini kalo mau mindah tabel ke tempat lain calv
	//document.getElementById('container').appendChild(table);

  </script> -->
</html>