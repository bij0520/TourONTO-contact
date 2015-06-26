<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body>
<div style="text-align: center; background-color: red">
    <p style="color: #ffff00">Warning: This is a school project, not a real website. Please refer to <a href="http://www.seetorontonow.com/">Toronto's official tourism website</a> for accurate
        information.
    </p>
</div>
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">TourONTO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="{{url('/news')}}">News</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Getting Around <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Rent a Zipcar</a></li>
                        <li><a href="#">Green P Parking</a></li>
                        <li><a href="#">TTC Schedule</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Where to Stay <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Find a hotel</a></li>
                        <li><a href="#">Airbnb</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Things to do <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Pan Am Games Venue</a></li>
                        <li><a href="#">Doors Open Toronto</a></li>
                        <li><a href="#">Parks</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="{{url('/trips')}}">Day Trips</a></li>

                    </ul>
                </li>
                <li><a href="{{url('contact')}}">Contact Us</a></li>
                <li><a href="{{url('http://tili.jianlubi.com/public/index.php/chat')}}">Live Chat</a></li>
                <li><a href="{{url('/auth/login')}}">Admin Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        @yield('content')
    </div>
</div> <!-- /container -->

<footer>
    <div class="row">
        <div class="col-lg-12" style="text-align: center">
            <p>&copy; TourONTO 2015</p>
        </div>
    </div>
    <!-- /.row -->
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
</body>
</html>
