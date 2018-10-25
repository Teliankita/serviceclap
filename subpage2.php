<!DOCTYPE html>
<html>
<title>subpage2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="css/style.css" /> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
    <style>
        /* box */
.boxed {
    background-color: #fff;
    max-width: 1200px;
    margin: 0 auto !important;
    border-left: solid 1px #ccc;
    border-right: solid 1px #ccc;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .4), inset 0 0 2px rgba(255, 255, 255, .75);
}
/* boxed */
        img {
    vertical-align: middle;
    height: 200px;
}
        .w3-bar .w3-bar-item {
            padding: 9px 45px;
            float: left;
            width: auto;
            border: none;
            display: block;
            outline: 0;
        }

        .w3-button:hover {
            color: #fff !important;
            background-color: #000000 !important;
        }

        a {
            color: #fff;
            text-decoration: none;
        }
    </style>
   <!-- Fixed navbar -->
   <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://getbootstrap.com/examples/theme/#">rdtfvgbhn</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="signup.php">Signup</a>
                    </li>
                    <li class="dropdown">
                        <a href="subpage1.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Services
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="subpage1.php">Wedding</a>
                            </li>
                  <li><a href="https://getbootstrap.com/examples/theme/#">One Day Baby Care</a></li>
                  <li><a href="https://getbootstrap.com/examples/theme/#">MAKEUP</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="https://getbootstrap.com/examples/theme/#"></a>fgvhb</li>
                  <li><a href="https://getbootstrap.com/examples/theme/#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
  
        <!-- navend -->
        <div class=" boxed">
      <br>
      <br>
      <br>
    <div class="w3-border">
        <div class="row">

            <div class="col-sm-2">

                <div class="w3-bar w3-theme">
                    <br>

                    
                    <button class="w3-bar-item w3-button testbtn w3-padding-16 " onclick="openCity(event,'Wedding')">Wedding</button>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'BabyCare')">BabyCare</button>
                   <br>
                    <br>
                    <br>
                    <hr>
                    <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Medical')">Medical</button>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Home Shift')">Home Shift</button>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                </div>

            </div>
            <!-- tab1 -->
            <div class="col-sm-10">
                <div id="Wedding" class="w3-container city w3-animate-opacity">
                    <h2>Wedding</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                              <a href=" #">  
                      <img src="img/w10.jpg" alt="Avatar" style="width:200px"></a>
                               
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                    <img src="img/w1.jpg" alt="Avatar" style="width:200px"></a>
    </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                <img src="img/w2.jpg" alt="Avatar" style="width:200px"></a>
                           
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                <img src="img/w4.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                      <img src="img/w2.jpg" alt="Avatar" style="width:200px">
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                    <img src="img/w5.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                <img src="img/w6.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                <img src="img/w7.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                      <img src="img/w8.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                    <img src="img/w9.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                <img src="img/w10.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                                <img src="img/w1.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab1 end -->
                <!-- tab2 -->
                <div id="BabyCare" class="w3-container city w3-animate-opacity">
                    <h2>BabyCare</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                      <img src="img/1.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/2.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/3.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/4.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                      <img src="img/5.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/6.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/7.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/8.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                      <img src="img/9.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/10.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/14.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                             <a href="#">
                                <img src="img/15.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab3 -->
               
                <!-- tab4 -->
                <div id="Medical" class="w3-container city w3-animate-opacity">
                    <h2>Medical</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                      <img src="img/m1.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/a2.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/a3.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/a4.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                      <img src="img/a5.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/a14.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/a15.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/m2.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                      <img src="img/m4.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/m11.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/m12.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                             <a href="#">
                                <img src="img/m3.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab6 -->
                <div id="Home Shift" class="w3-container city w3-animate-opacity">
                    <h2>Home Shift</h2>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href=" #">  
                      <img src="img/h1.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/h2.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/h3.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/h4.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                      <img src="img/h5.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/h6.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/h7.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/h8.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                      <img src="img/h9.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                    <img src="img/h10.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                            <a href="#">
                                <img src="img/h11.jpg" alt="Avatar" style="width:200px"></a>
                                <p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="container ratings">
                             <a href="#">
                                <img src="img/h12.jpg" alt="Avatar" style="width:200px;hight:500px"></a>
                              
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- tab end -->
    <hr>
        <!-- footer -->
        <aside id="footer-widgets" style="background: #000000;color:#fff;">
            <div class="container">
            <center>           
                        <h3 class="footer-widget-title"></h3>
                        <ul class="list-unstyled three_cols">
                            <h3>
                                <li>
                                    <a href="index.html">Home</a>
                                    <a href="portfolio_topvar.html">Login</a>
                                
                                    <a href="page_pricing.html">Signup</a>
                               
                                    <a href="page_about2.html">Blog</a>
                               
                                    <a href="page_team.html">Service</a>
                                    <a href="page_support.html">FAQ</a>
                                </li>
                            </h3>
                        </ul>
                        <div class="row">
                            <div class="col-sm-12">
                               
                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="fab fa-facebook-square" style="font-size:20px;"> </i>
                                    </a>

                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fab fa-instagram" style="font-size:20px;  color:rgb(236, 127, 54)"> </i>
                                    </a>

                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fab fa-twitter-square" style="font-size:20px;"> </i>
                                    </a>

                                    <a href="https://www.linkedin.com" target="_blank">
                                        <i class="fab fa-linkedin-in" style="font-size:20px; color:rgb(47, 174, 224);"> </i>
                                    </a>

                                    <a href="https://www.gmail.com" target="_blank">
                                        <i class="fas fa-envelope-square" style="font-size:20px; color:rgb(224, 68, 47);"></i>
                                    </a>
                                </center>
                            </div>
                        </div>
                        </footer>
                    </div>

                </div>
                    </div>
                    <!-- /input-group -->


            <!-- container -->
        </aside>
    </div>
    <script>
        // Tabs
        function openCity(evt, cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            var activebtn = document.getElementsByClassName("testbtn");
            for (i = 0; i < x.length; i++) {
                activebtn[i].className = activebtn[i].className.replace(" w3-#333", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-#333";
        }

        var mybtn = document.getElementsByClassName("testbtn")[0];
        mybtn.click();

    </script>
</body>

</html>