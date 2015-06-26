@extends('master2')

@section('title')
    Welcome to TourONTO
@endsection

@section('content')


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
                var url="sendMessage-admin.php";
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
            document.getElementById("con").valuejnjn n m m="";

        }
        window.setInterval("getMessage()",1000);
        function getMessage(){
            var myXmlHttpRequest = getXmlHttpObject();
            if(myXmlHttpRequest){
                var url="getMessage-admin.php";
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

                                var str = "Guest" +" "+sendTimes[i].childNodes[0].nodeValue+"\r\n"+cons[i].childNodes[0].nodeValue+"\r\n";
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

@endsection