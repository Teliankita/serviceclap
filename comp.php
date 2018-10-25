<?php
include("include.php");
?>
<!DOCTYPE html>
<html>
<title>COMPANY1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/style.css" /> -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body >
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
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxlarge"><b>ASDFGHJKL</b></h1>
    <h6>Welcome to your company of <span class="w3-tag">xyz world</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="img/w18.jpg" alt="Fashion Blog" width="1600" height="0px">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">xyz</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>ASDFGHJKL</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">ABOUT</span>
        <br>
        <br>
          <h3>XYZ</h3>
          <h5>Title description, <span class="w3-opacity">May 2, 2018</span></h5>
        </div>

        <div class="w3-justify">
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=9";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"  class="img-responsive" style="width:100%; height:200px;">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-left">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div> 
        <br>
        <P>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </P>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>ABC</h3>
          <h5>Title description, <span class="w3-opacity">April 23, 2018</span></h5>
        </div>

        <div class="w3-justify">
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=1";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"  class="img-responsive" style="width:100%; height:200px;">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-top">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
              
            </div>
          </a>
          <?php } ?>
        </div> 
        <br>
        <P>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </P>
        </div>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>AL</h3>
          <h5>Title description, <span class="w3-opacity">April 20, 2017</span></h5>
        </div>

        <div class="w3-justify">
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=11";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"  class="img-responsive" style="width:100%; height:200px;">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-right">
            
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
             
            </div>
          </a>
          <?php } ?>
        </div>
        <br>
        <P>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </P>
        </div>
      </div>
      <div class="w3-container w3-white w3-margin w3-padding-large">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
      <br>
      <br>
      <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>
  </div>
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="img/makeup2.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4>My Name</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
      </div>
      <hr>

      <!-- Posts -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Denim</span>
            <br>
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16">
            <img src="/w3images/bandmember.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Sweaters</span>
            <br>
            <span>Praes tinci sed</span>
          </li>
          <li class="w3-padding-16">
            <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Workshop</span>
            <br>
            <span>Ultricies congue</span>
          </li>
          <li class="w3-padding-16">
            <img src="/w3images/avatar_smoke.jpg" alt="Image" class="w3-left w3-margin-right w3-sepia" style="width:50px">
            <span class="w3-large">Trends</span>
            <br>
            <span>Lorem ipsum dipsum</span>
          </li>
        </ul>
      </div>
      <hr>

      <!-- Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
           <img src="img/w6.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image">
                     <!-- <span class="w3-display-middle">Your AD Here</span> -->
          </div>
        </div>
      </div>
      <hr>

      
      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Inspiration</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
            <p><img src="img/w13.jpg" alt="Jeans" style="width:100%"></p>
            <p><img src="img/w18.jpg" alt="Jeans" style="width:100%"></p>
          </div>
          <div class="w3-col s6">
            <p><img src="img/w6.jpg" alt="Men in Hats" style="width:100%" class="w3-grayscale"></p>
            <p><img src="img/w15.jpg" alt="Jeans" style="width:100%"></p>
         </div>
        </div>
      </div>
      <hr>

      <!-- Subscribe -->
      <!-- <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest  posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div> -->

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest  posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-black" style="padding:32px">
  
<a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section "style="color:#fff;">
  <center>
  <a href="https://www.facebook.com"style="color:#fff;">  <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="https://www.instagram.com"style="color:#fff;">   <i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="https://www.snapchat.com"style="color:#fff;">  <i class="fa fa-snapchat w3-hover-opacity"></i></a>
        <a href="https://www.pinterest.com"style="color:#fff;">  <i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
        <a href="https://www.twitter.com"style="color:#fff;">   <i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com"style="color:#fff;">  <i class="fa fa-linkedin w3-hover-opacity"></i></a></center>
  </div>
 </footer>
<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "✓ Liked";
}
</script>
   
</body>
</html>
