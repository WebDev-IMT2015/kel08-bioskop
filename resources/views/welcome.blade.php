<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
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
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #141414;
      padding: 25px;
    }
    body {
      background: linear-gradient(#f2f2f2, #f2f2f2, black, black, black);
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      max-height: 400px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .title
  {
    font-size: 84px;
  }
  #Coming
  {
    font-size: 32px;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"><img src="http://www.21cineplex.com/images/21cineplex-logo1.png" height="42" width="180"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      @if (Route::has('login'))
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>Register</a></li>
            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-registration-mark"></span>Login</a></li>
          @else
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>Register</a></li>
            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-registration-mark"></span>Login</a></li>
          @endif
        </ul>
      @endif

      {{-- @if(Route::has('login'))
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/film')}}"><span class="glyphicon glyphicon-plus"></span>Tambah film</a></li>
            <li><a href="{{ url('/bioskop')}}"><span class="glyphicon glyphicon-plus"></span>Tambah bioskop</a></li>
            <li><a href="{{ url('/film')}}"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
        </ul>
        @endif
      @endif --}}


    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://media.comicbook.com/2017/03/spider-man-homecoming-international-header-240591.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Spiderman</h3>
          <p>Now Showing</p>
        </div>      
      </div>

      <div class="item">
        <img src="http://mac.h-cdn.co/assets/17/01/1483711218-ugh.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Coming soon</h3>
          <p>Summer 2017</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <div class="title m-b-md"><font color="white">CINEMA XXI</font></div><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://media.comicbook.com/2017/03/spider-man-homecoming-international-header-240591.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p id="Coming"><font color="white">Now Showing</font></p>
    </div>
    <div class="col-sm-4"> 
      <img src="http://mac.h-cdn.co/assets/17/01/1483711218-ugh.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p id="Coming"><font color="white">Coming Soon</font></p>
      <p><font color="white">Summer 2017</font></p>
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Promo</p>
      </div>
      <div class="well">
       <p>Other Theater</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p><font color="white">Thank you for watching on Cinema XXI</font></p>
</footer>
</body>
</html>