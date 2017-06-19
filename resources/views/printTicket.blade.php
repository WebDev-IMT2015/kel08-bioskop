<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-6"> 
      <h1 class=tit>{{ $bio->nama }}</h1>
      <hr>
      <h2>{{ $fil->judul }}</h2>
      <h3>Date : {{ $psn->tlg_pesan }}</h3>
      <h3>Price : Rp. {{ $jm->harga }}</h3>
      <h1 class=stup>{{ $stu->jenis }}</h1>
      <button onclick="myFunction()">Print this page</button>
    </div>
  </div>
</div>



<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>