<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>

    
<script type="text/javascript">
	

</script>>


	<script>
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


	</script>
  </body>
</html>