<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
            <a class="navbar-brand" href="http://www.borisxiao.com/touronto/public">TourONTO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://www.borisxiao.com/touronto/public"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="http://http://www.borisxiao.com/touronto/public/news">News</a></li>

                <li class="dropdown">
                    <a href="http://www.borisxiao.com/touronto/public/trips" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Getting Around <span class="caret"></span></a>
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
                        <li><a href="#">Day Trips</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" readonly required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-lg-offset-1">

                    <label>Live chat</label>
                    <textarea rows="18" class="form-control" placeholder="Hello, visitor!" id="mycons" ></textarea>
                    <br>
                    <input type="text" class="form-control" id="con">
                        <br>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" onclick="sendMessage()" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
    <script type="text/javascript">

        function getXmlHttpObject(){
            var xmlHttpRequest;

            xmlHttpRequest = new XMLHttpRequest();


            return xmlHttpRequest;

        }
        function domtext(id){
            return document.getElementById(id);
        }
        function sendMessage(){
            var myXmlHttpRequest = getXmlHttpObject();
            if(myXmlHttpRequest){
                var url="sendMessage.php";
                var data="con="+domtext('con').value;
                //window.alert(url+" "+data);
                myXmlHttpRequest.open("post",url,true);
                myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                myXmlHttpRequest.onreadystatechange=function(){
                    if(myXmlHttpRequest.readyState==4){
                        if(myXmlHttpRequest.status==200){


                        }
                    }
                }
                myXmlHttpRequest.send(data);

            }
            var now = new Date();
            var strDateTime = [[now.getFullYear(), AddZero(now.getMonth() + 1),AddZero(now.getDate())].join("-"), [AddZero(now.getHours()), AddZero(now.getMinutes()), AddZero(now.getSeconds())].join(":")];

//Pad given value to the left with "0"
            function AddZero(num) {
                return (num >= 0 && num < 10) ? "0" + num : num + "";
            }
            var str = "You" +" "+strDateTime+"\r\n"+domtext('con').value+"\r\n";
            //window.alert(str);
            document.getElementById("mycons").value+=str;
            document.getElementById("con").value="";

        }
        window.setInterval("getMessage()",1000);
        function getMessage(){
            var myXmlHttpRequest = getXmlHttpObject();
            if(myXmlHttpRequest){
                var url="getMessage.php";
                var data="con="+domtext('con').value;
                //window.alert(url+" "+data);
                myXmlHttpRequest.open("post",url,true);
                myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                myXmlHttpRequest.onreadystatechange=function(){
                    if(myXmlHttpRequest.readyState==4){
                        if(myXmlHttpRequest.status==200){
                            var mesRes = myXmlHttpRequest.responseXML;
                            var cons=mesRes.getElementsByTagName("con");

                            var sendTimes = mesRes.getElementsByTagName("sendTime");
                            for(var i=0;i<cons.length;i++){

                                var str = "Admin" +" "+sendTimes[i].childNodes[0].nodeValue+"\r\n"+cons[i].childNodes[0].nodeValue+"\r\n";
                                //window.alert(str);
                                document.getElementById("mycons").value+=str;

                            }
                        }
                    }
                }
                myXmlHttpRequest.send(data);
                $('#mycons').append($('#cons').text());
            }}
    </script>


            <!-- Contact Form JavaScript -->

