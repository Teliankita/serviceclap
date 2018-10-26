<!DOCTYPE html>
<html lang="en">

<head>
    <title> Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
.a {
    color: #fff;
    text-decoration: none;
}

</style>
<body>
    <!-- <div class="boxed"> -->
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
        <!-- banner -->
        <br>
        <br>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-light text-center">
            <div class="container">
                <h1 class="jumbotron-heading text-dark">Blog</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <h1><a href="#">Blog Post Template for Bootstrap</a></h1>
                <p class="lead"><i class="fa fa-user"></i> by <a href="login.php">Service provider</a>
                </p>
                <hr>
              
                <img src="img/c9.jpg" class="img-responsive">
                <hr>
                <p class="lead">Welcome to Bootstrap Blog Template! This is a blog template example, built with
                    Bootstrap.
                    Contains "tools" that would be needed in a post.</p>
                <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                    ipsum
                    dolor.</p>
                <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                    ipsum
                    dolor.</p>
                    <p> Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor
                    Lorem
                    ipsum dolor.</p>
                
                <br />
                <center>
                    <p><strong>Embed Twitter post:</strong>

                        <!-- Place this tag in your head or just before your close body tag. -->
                        <blockquote class="twitter-tweet" lang="hu">
                            <p>Thousands of code samples at your fingertips! Literally, thousands: <a href="http://t.co/aHrsBZ7plp">http://t.co/aHrsBZ7plp</a>
                                (via <a href="https://twitter.com/ch9">@ch9</a>) <a href="http://t.co/94CQJLOCzO">pic.twitter.com/94CQJLOCzO</a></p>—
                            Microsoft Developer (@msdev) <a href="https://twitter.com/msdev/statuses/487959572230193152">2014.
                                július 12.</a>
                        </blockquote>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </center>
                <br />
                <center>
                    <p><strong>Embed Youtube player:</strong>
                </center>

                <div class="vid">
                    <iframe width="250" height="205" src="//www.youtube.com/embed/bsPUMZlsZP8" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <br />
                <p>
                    <h3>This Youtube Player is responsive!</h3>
                </p>
                <p>Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                    ipsum
                    dolor.</p>
                <blockquote>
                    <p>„Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.”</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <p>
                    <h4>I like the post? Like this!</h4>
                </p>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
                <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');</script>

                <div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

                <!-- Helyezd el ezt a címkét az utolsó +1 gomb címke mögé. -->
                <script type="text/javascript">
                    (function () {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/platform.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <br />
                <hr>

                <!-- the comment box -->
                <div class="well">
                    <h4><i class="fa fa-paper-plane-o"></i> Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-reply"></i> Submit</button>
                    </form>
                </div>
                <script src="https://apis.google.com/js/plusone.js">
                </script>
                <hr>

               

            </div>

            <div class="col-lg-4">
                <div class="well">
                    <h4><i class="fa fa-search"></i> Blog Search...</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="well">
                    <h4><i class="fa fa-tags"></i> Popular Tags:</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="smedical.php"><span class="badge badge-info">MEDICAL</span></a>
                                </li>
                                <li><a href="sbaby.php"><span class="badge badge-info">BABY CARE</span></a>
                                </li>
                                <li><a href="shometution.php"><span class="badge badge-info">HOME TUTORS</span></a>
                                </li>
                                <li><a href="shomeshift.php"><span class="badge badge-info">PACKERS & MOVERS</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="index.php"><span class="badge badge-info">PAINT</span></a>
                                </li>
                                <li><a href="swedding.php"><span class="badge badge-info">WEDDING</span></a>
                                </li>
                                <li><a href="index.php"><span class="badge badge-info">CAR</span></a>
                                </li>
                                <li><a href="scityguid.php"><span class="badge badge-info">LOCAL GUID</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /well -->
                <div class="well">
                    <h4><i class="fa fa-thumbs-o-up"></i> Follow me!</h4>
                    <ul>
                        <p><a title="Facebook" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                        class="fa fa-facebook fa-stack-1x"></i></span></a> <a title="Twitter" href=""><span
                                    class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a>
                            <a title="Google+" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                        class="fa fa-google-plus fa-stack-1x"></i></span></a> <a title="Linkedin" href=""><span
                                    class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span></a>
                            <a title="GitHub" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i
                                        class="fa fa-github fa-stack-1x"></i></span></a> <a title="Bitbucket" href=""><span
                                    class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-bitbucket fa-stack-1x"></i></span></a></p>
                    </ul>
                </div>
                <!-- /well -->
                <!-- /well -->
                <div class="well">
                    <h4><i class="fa fa-fire"></i> Popular Posts:</h4>
                    <ul>
                        <li><a href="">WPF vs. Windows Forms-Which is better?</a></li>
                        <li><a href="">How to create responsive website with Bootstrap?</a></li>
                        <li><a href="">The best Joomla! templates 2014</a></li>
                        <li><a href="">ASP .NET cms list</a></li>
                        <li><a href="">C# Hello, World! program</a></li>
                        <li><a href="">Java random generator</a></li>
                    </ul>
                </div>
                <!-- /well -->

                <!-- /well -->
                <div class="well">
                    <h4><i class="fa fa-book"></i> Featured books:</h4>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                <p style="text-align:center; margin-top:20px;">
                                    <img src="img/w18.jpg" class="img-responsive" alt="">
                                </p>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Book
                                            1</h3>
                                        <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                        <a class=" btn btn-default" href="#"><i class="fa fa-plus"></i> INFO</span></a>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                <p style="text-align:center; margin-top:20px;">
                                    <img src="img/c9.jpg" class="img-responsive" alt="">
                                </p>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Book
                                            2</h3>
                                        <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
                                        <a class=" btn btn-default" href="#"><i class="fa fa-plus"></i> INFO</span></a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- /well -->


            </div>
        </div>


        <hr>

        <br />


        <a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
        <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');</script>

        <div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

        <!-- Helyezd el ezt a címkét az utolsó +1 gomb címke mögé. -->
        <script type="text/javascript">
            (function () {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/platform.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
            })();
        </script>
        <br />

        <hr>
        <!-- <p>Copyright © Your Website | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a></p>
            
             -->
        <footer class="blog-footer">
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
        <!-- footer -->
        <footer class="container " style="padding:32px;font-size:20px;background-color:black;color:#fff; width:100%;">
            <aside id="footer-widgets" style="background: #000000;color:#fff;">
                <div class="row">
                    <center>
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fab fa-facebook-square"> </i>
                        </a>

                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fab fa-instagram"> </i>
                        </a>

                        <a href="https://twitter.com" target="_blank">
                            <i class="fab fa-twitter-square"> </i>
                        </a>

                        <a href="https://www.linkedin.com" target="_blank">
                            <i class="fab fa-linkedin-in"> </i>
                        </a>

                        <a href="https://www.gmail.com" target="_blank">
                            <i class="fas fa-envelope-square"></i>
                        </a>
                    </center>
                </div>
            </aside>

        </footer>
    </div>
    <!-- <script>

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

        $(document).ready(function () {
            $('.hovereffect').hover(function () {
                $(this).children('.z-text').css('top', '0').fadeToggle(600);
            });
        });

    </script> -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script> -->

    
</body>

</html>