<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cinema XXI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 750px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    h1.tit, h2
    {
      text-align: center;
    }
    h1.stup
    {
      text-align: right;
    }
  </style>
</head>
<body>
  
<div class="container-fluid" id="printableArea">    
  <div class="row content">
    <div class="col-sm-6"> 
      <h1 class=tit>{{ $bio->nama }}</h1>
      <hr>
      <h1>{{ $fil->judul }} - {{ $stu->jenis }}</h1>
      <h3>Tanggal : {{ $psn->tlg_pesan }}</h3>
      <h3>Jam : {{ $jm->jam }} AM</h3>
      <br>
      <p>{{ $bio->nama }} Cinema Surabaya</p>
      <button id="print" onclick="hide(); myFunction('printableArea')">Print ticket</button>
    </div>
  </div>
</div>



<script>
function myFunction(divName) {
    var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    document.getElementById("print").style.display='block';
}

function hide() {
  document.getElementById("print").style.display='none';
}
</script>

</body>
</html>