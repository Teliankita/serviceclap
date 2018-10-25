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
  <meta name="description" content="hover box for services">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css" />

</head>
<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway);

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

  .fadeIn-bottom {
    top: 80%;
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

  <div class="boxed">
    
       <h1 class="main-title">Best Wedding Photographer in Hassan</h1>
    <div class="container">
      <div class="content">
      <?php 
                $sql="SELECT * FROM aphotocomp WHERE id=9";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
        <a href="wphotoram.php" target="_blank">
          <div class="content-overlay"></div>
          <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
          <div class="content-details fadeIn-left">
          <?php  echo '<h3>'.$row['pname'].'</h3>'; ?>
           
          </div>
        </a>
        <?php } ?>
      </div>
    </div>
    <div class="container">
      <div class="content">
      <?php 
                $sql="SELECT * FROM aphotocomp WHERE id=10";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
        <a href="wphotoaa.php" target="_blank">
          <div class="content-overlay"></div>
          <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
          <div class="content-details fadeIn-left">
          <?php  echo '<h3>'.$row['pname'].'</h3>'; ?>
           
          </div>
        </a>
        <?php } ?>
      </div>
    </div>

    <div class="container">
      <div class="content">
      <?php 
                $sql="SELECT * FROM aphotocomp WHERE id=11";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
        <a href="wphotohh.php" target="_blank">
          <div class="content-overlay"></div>
          <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="content-image">'; ?>
          <div class="content-details fadeIn-left">
          <?php  echo '<h3>'.$row['pname'].'</h3>'; ?>
           
          </div>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>
 
</body>

</html>