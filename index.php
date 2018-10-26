<?php
include("include2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">


</head>

<style>
    /* bannerindex page */

    .bgimage {
        width: 100%;
        height: 400px;
        background: url("img/n1.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .bgimage h5 {
        color: #fff;
        text-shadow: 1px 1px #333;
    }

    /* banner end */

    /* services in home pageCarousel items */

    .thumbnail a>img,
    .thumbnail>img {
        margin-right: auto;
        margin-left: auto;
        height: 70px;
        width: 90%;
    }

    /* end Carousel items*/
    


</style>

<body>
<div class="boxed">
       <!-- Fixed navbar -->
       <nav class="navbar navbar-default navbar-fixed-top" style="background: #000000;color:#fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Urban Clap</a>
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
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Services
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="swedding.php">Wedding</a>
                                </li>

                                <li>
                                    <a href="scityguid.php">City Guide</a>
                                </li>
                                <li>
                                    <a href="smedical.php">Medical</a>
                                </li>
                                <li>
                                    <a href="shometution.php">Home Tutors</a>
                                </li>
                                <li>
                                    <a href="shomeshift.php">Home Shift</a>
                                </li>

                                <li>
                                    <a href="sbaby.php">One Day Baby Care</a>
                                </li>
                                <!-- <li>
                                <a href="https://getbootstrap.com/examples/theme/#"></a>fgvhb</li>
                            <li>
                                <a href="https://getbootstrap.com/examples/theme/#">One more separated link</a>
                            </li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <!-- navend -->
    <br>
   <br>
  
        <section class="bgimage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <br>
                        <h2>Hello, world! </h2>
                        <!-- <h3>The need for uncertainty, diversity, challenge, change, surprise, adventure .</h3>
                        <p>
                            <a href="#" class="btn btn-primary btn-large">Learn more »</a> -->
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <!-- end banner -->
        <!-- service to link all service  -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="services">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="services__item box">
                                    <div class="services-item__body">
                                        <div class="services-item__icon">
                                            <i class="fab fa-medrt fa-3x"></i>
                                            </i>
                                        </div>
                                        <div class="services-item__content">
                                            <p class="services-item__caption">Medical services</p>
                                            <a class="services-item__link" href="smedical.php">Learn more
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="services__item box">
                                    <div class="services-item__body">
                                        <div class="services-item__icon">
                                            <i class="fas fa-child fa-3x"></i>
                                        </div>
                                        <div class="services-item__content">
                                            <p class="services-item__caption">One Day Baby Care Services</p>
                                            <a class="services-item__link" href="sbaby.php">Learn more
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="services__item box">
                                    <div class="services-item__body">
                                        <div class="services-item__icon">
                                            <i class="fa fa-circle-o-notch fa-3x" aria-hidden="true"></i>
                                        </div>
                                        <div class="services-item__content">
                                            <p class="services-item__caption">Wedding Service</p>
                                            <a class="services-item__link" href="swedding.php">Learn more
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="services__item box">
                                    <div class="services-item__body">
                                        <div class="services-item__icon">
                                            <i class="fas fa-book-reader fa-4x"></i>

                                            </i>
                                        </div>
                                        <div class="services-item__content">
                                            <p class="services-item__caption">Home Tutors</p>
                                            <a class="services-item__link" href="shometution.php">Learn more
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- / .services -->

                    </div>
                </div>
                <!-- / row -->
            </div>

            <!-- ens service to link all pages-->
            <hr>

            <!-- services image1 -->
            <!-- <section class="bgimg" style="background-image: url('img/wp1.jpg')"> -->
                <div class="container-fluid bg-3 text-center" style="margin-left:60px;margin-right:60px;">
                    <div class="row">
                        <h2>Wedding Services</h2>

                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="swedding.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=38";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/w7.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Wedding Planer</a> -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="swedding.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=30";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/w5.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Wedding Photographer</a> -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="swedding.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=36";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/w1.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Engagement</a> -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="swedding.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=11";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/post1.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Postwedding</a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <hr>
            <!--.end-->

            <!-- services image2 -->
            <!-- <section class="bgimg" style="background-image: url('img/n2.jpg')"> -->
                <div class="container-fluid bg-3 text-center" style="margin-left:60px;margin-right:60px;">
                    <div class="row">
                        <h2>Services</h2>

                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="sbaby.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=26";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/16.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Baby -->
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="shometution.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=27";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/c9.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Home Tutors</a> -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="shomeshift.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=34";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/sh3.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="smedical.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=25";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/m4.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Medical</a> -->
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <!--.end-->
                <!-- services image2 -->
                <!-- <section class="bgimg" style="background-image: url('img/wc6.jpg')"> -->
                <div class="container-fluid bg-3 text-center " style="margin-left:60px;margin-right:60px;">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="1paintlocation.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=21";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="scityguid.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=22";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                    <!-- <img src="img/cg6.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">City Gides</a> -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="1carlocation.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=23";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                </a>
                                <!-- <img src="img/cs1.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Car Services</a> -->
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="boxed">
                                <a href="smedical.php">
                                    <?php 
                $sql="SELECT * FROM adminwservice WHERE id=25";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive" style="width:100%; height:200px;">';
        echo '<h4 style="text-align:center;color:#e67e22;">'.$row['pname'].'</h4>';
                } 
                ?>
                                </a>
                                <!-- <img src="img/m4.jpg" class="img-responsive" style="width:100%; height:200px;" alt="Image">Medical</a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!--.end-->

            <!-- rewiew -->
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="tcb-quote-carousel">
                            <div class="quote"><i class=" fa fa-quote-left fa-4x"></i></div>
                            <div class="carousel slide carousel-fade" id="fade-quote-carousel" data-ride="carousel"
                                data-interval="3000">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner" style="height: 250px;">
                                    <div class="item active">
                                        <div class="profile-circle">
                                            <center><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg"
                                                    alt=""></center>
                                        </div>
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                                                veritatis
                                                nulla eum laudantium totam tempore optio doloremque laboriosam quas,
                                                quos
                                                eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <div class="profile-circle">
                                            <center><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"
                                                    alt=""></center>
                                        </div>
                                        <blockquote>
                                            <p>Lorem sf sdfsd fipsum dolor sit amet, consectetur adipisicing elit.
                                                Quidem,
                                                veritatis nulla eum laudantium totam tempore optio doloremque
                                                laboriosam
                                                quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi
                                                accusamus.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <div class="profile-circle">
                                            <center><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"
                                                    alt=""></center>
                                        </div>
                                        <blockquote>
                                            <p>Lorem sf sdfsd fipsum dolor sit amet, consectetur adipisicing elit.
                                                Quidem,
                                                veritatis nulla eum laudantium totam tempore optio doloremque
                                                laboriosam
                                                quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi
                                                accusamus.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <div class="profile-circle">
                                            <center><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg"
                                                    alt=""></center>
                                        </div>
                                        <blockquote>
                                            <p>Lorem sf sdfsd fipsum dolor sit amet, consectetur adipisicing elit.
                                                Quidem,
                                                veritatis nulla eum laudantium totam tempore optio doloremque
                                                laboriosam
                                                quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi
                                                accusamus.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <!-- <a class="btn btn-primary" href="http://thecodeblock.com/create-a-quote-testimonial-slider-using-bootstrap-carousel"><i class="fa fa-arrow-left"></i> Back to Article</a> -->
            </div>


            <hr>
            <section class="partners bg-gray">
                <div class="container text-center">
                    <header>
                        <h2> Our partners</h2>
                    </header>
                    <div class="row d-flex align-items-center">
                        <div class="item1 col-lg-2 col-md-4 col-6">
                            <img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-1.png" alt="..."
                                class="img-fluid">
                        </div>
                        <div class="item1 col-lg-2 col-md-4 col-6">
                            <img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-2.png" alt="..."
                                class="img-fluid">
                        </div>
                        <div class="item1 col-lg-2 col-md-4 col-6">
                            <img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-3.png" alt="..."
                                class="img-fluid">
                        </div>
                        <div class="item1 col-lg-2 col-md-4 col-6">
                            <img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-4.png" alt="..."
                                class="img-fluid">
                        </div>
                        <div class="item1 col-lg-2 col-md-4 col-6">
                            <img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-5.png" alt="..."
                                class="img-fluid">
                        </div>
                        <div class="item1 col-lg-2 col-md-4 col-6">
                            <img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-6.png" alt="..."
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <hr>
        </div>
        <!-- footer -->
        <aside id="footer-widgets" style="background: #000000;color:#fff;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="footer-widget-title">Sitemap</h3>
                        <ul class="list-unstyled three_cols">
                            <h4>
                            <li>
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
                            </h4>
                        </ul>

                    </div>
                    <!-- /input-group -->


                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Recent Post</h3>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="img/w1.jpg" width="75" height="75" alt="image">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia
                                            labor
                                        </a>
                                    </h5>
                                    <small></small>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="img/w2.jpg" width="75" height="75" alt="image">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a>
                                    </h5>
                                    <small>September 14, 2013</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget" style=" width:25; height:25;">
                            <h3 class="footer-widget-title">Recent Works</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail1">
                                        <img src="img/1.jpg" class="img-responsive" alt="Image">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail1">
                                        <img src="img/w1.jpg" class="img-responsive" alt="Image">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail1">
                                        <img src="img/w1.jpg" class="img-responsive" alt="Image">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail1">
                                        <img src="img/w1.jpg" class="img-responsive" alt="Image">
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="row" style=" color:#fff;">
                            <div class="col-sm-12">
                                <center>
                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="fab fa-facebook-square"></i> 
                                    </a>

                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fab fa-instagram" >
                                        </i>
                                    </a>

                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fab fa-twitter-square"> </i>
                                    </a>

                                    <a href="https://www.linkedin.com" target="_blank">
                                        <i class="fab fa-linkedin-in" >
                                        </i>
                                    </a>

                                    <a href="https://www.gmail.com" target="_blank">
                                        <i class="fas fa-envelope-square"></i>
                                    </a>
                                </center>
                            </div>
                        </div>
                        </footer>
                    </div>

                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </aside>

    </div>

    <script>
        // Side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "100%";
            x.style.fontSize = "40px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

        // // carsule
        // $(document).ready(function () {
        //     $('#Carousel').carousel({
        //         interval: 5000
        //     })
        // });

        // Carousel Auto-Cycle
        // $(document).ready(function () {
        //     $('.carousel').carousel({
        //         interval: 6000
        //     })
        // });
        // img
        $(document).ready(function () {
            $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function () {
                var $this = $(this),
                    c = $this.data('count');
                if (!c) c = 0;
                c++;
                $this.data('count', c);
                $('#' + this.id + '-bs3').html(c);
            });
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        });

    </script>
    <!-- review -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#testimonial-slider").owlCarousel({
                items: 2,
                itemsDesktop: [1000, 2],
                itemsDesktopSmall: [990, 2],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                slideSpeed: 1000,
                autoPlay: true
            });
        });
    </script>
    <script>
        $('.carousel[data-type="multi"] .item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 4; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });

    </script>


</body>

</html>