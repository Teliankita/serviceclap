<?php
include("include.php");
?>
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
  /* @import url(https://fonts.googleapis.com/css?family=Raleway); */

  *,
  *:before,
  *:after {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  body {
    background: #f9f9f9;
    font-size: 16px;
    font-family: 'Raleway', sans-serif;
  }

  .main-title {
    color: #2d2d2d;
    text-align: center;
    text-transform: capitalize;
    padding: 0.7em 0;
  }

  .container {
    padding: 1em 0;
    float: left;
    width: 50%;
  }

  @media screen and (max-width: 640px) {
    .container {
      display: block;
      width: 100%;
    }
  }

  @media screen and (min-width: 900px) {
    .container {
      width: 33.33333%;
    }
  }

  .container .title {
    color: #1a1a1a;
    text-align: center;
    margin-bottom: 10px;
  }

  .content {
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: auto;
    overflow: hidden;
  }

  .content .content-overlay {
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    height: 99%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
  }

  .content:hover .content-overlay {
    opacity: 1;
  }

  .content-image {
    width: 100%;
  }

  .content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
  }

  .content:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1;
  }

  .content-details h3 {
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
    text-transform: uppercase;
  }

  .content-details p {
    color: #fff;
    font-size: 0.8em;
  }


  .fadeIn-top {
    top: 20%;
  }

  .fadeIn-left {
    left: 20%;
  }

  .fadeIn-right {
    left: 80%;
  }
</style>

<body>

  <br>
  <br>
  <!-- banner -->
  <div class="boxed">
    <header class="header">
      <br>
      <h1 class="header__title">Best Wedding  in Bangalore</h1>
      <form action=".php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:#fff;">
                                <h3>Please select the type of event you are hosting:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                      <br>
                      <br>
                      <br>
                          <select name="drop1" id="drop1">
                          <option value="wedding Plane">Wedding Plane</option>
                            <option value=" prewedding Plan"> Prewedding Plan </option>
                            <option value="postwedding Plan">Postwedding Plan </option>
                            <option value=" wedding Photographer"> Wedding Photographer</option>
                            <option value="catering">Catering</option>
                            <option value=" dj">DJ  </option>
                            <option value="mehendi">Mehendi </option>
                            <option value=" makeup"> Makeup</option>
                        </select>
                    </div>
                </div>
</form>
      <!-- <a href="http://praliedutzel.com/a-guide-to-hero-images/" target="_blank"style="width:200px;"  class="btn btn-default" ><h4>Create</h4></a> -->
      </ul>
    </header>
    <!-- end banner -->
    <!-- end banner -->

    <!-- services image -->
    <div class=" row">
      <div class="container">
        <h3 class="title"></h3>
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=9";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-left">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <a href=" comp.php"> AA Company</a> 
      </div>
      <div class="container">
        <h3 class="title"></h3>
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=1";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-right">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <a href=" comp.php"> AB Company</a> 
      </div>
      <div class="container">
        <h3 class="title"></h3>
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=11";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-top">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <a href=" comp.php"> XYZ Company</a> 
      </div>
    </div>

    <!-- services image -->
    <div class=" row">
      <div class="container">
        <h3 class="title"></h3>
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=16";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-left">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <a href=" comp.php"> LA Company</a> 
      </div>
      <div class="container">
        <h3 class="title"></h3>
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=13";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-right">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <a href=" comp.php"> ASD Company</a> 
      </div>
      <div class="container">
        <h3 class="title"></h3>
        <div class="content">
          <?php 
                $sql="SELECT * FROM awcni WHERE id=17";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
          <a href="wplanABC.php" target="_blank">
            <div class="content-overlay"></div>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
            <!-- <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362"> -->
            <div class="content-details fadeIn-top">
              <!-- <h3>This is a title</h3> -->
              <?php  echo '<h3>'.$row['cname'].'</h3>'; ?>
            </div>
          </a>
          <?php } ?>
        </div>
        <a href=" comp2.php"> AL Company</a> 
      </div>


    </div>



  </div>




  <!-- like -->

  <hr>

  </div>

  <script>

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

  </script>
</body>

</html>