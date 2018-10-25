
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

<body>
  
     <br>
     <br>
<!-- banner -->
<div class="boxed">
<header class="header">
    <br>
    <h1 class="header__title">Best Wedding caters in Banglore</h1>
    
    <!-- <a href="http://praliedutzel.com/a-guide-to-hero-images/" target="_blank"style="width:200px;"  class="btn btn-default" ><h4>Create</h4></a> -->
</ul>
  </header>
<!-- end banner -->
        <!-- end banner -->
     
        <!-- services image -->
        <div class=" row">
       
            <div class=" col-sm-4" >
                <div class="col-xs-12 img-outer" style="margin: 20px 0;">
                    <div class="hovereffect">
                    <?php 
                $sql="SELECT * FROM aweddingcatercomp WHERE id=7";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                        <div class="z-text">
                            <a href="wplanABC.php" target='_blank' >     
                <?php  echo '<h2>'.$row['cname'].'</h2>'; ?>
                            
                        </a>
                        </div>
                        <div class="z-img">
                      <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive">'; ?>
                        </div>
                <?php } ?>
                    </div>
                </div>
            </div>
         
            <div class=" col-sm-4">
                <div class="col-xs-12 img-outer" style="margin: 20px 0;">
                    <div class="hovereffect">
                    <?php 
                $sql="SELECT * FROM aweddingcatercomp WHERE id=8";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                        <div class="z-text">
                            <a href="wplanBC.php" target='_blank' >     <?php  echo '<h2>'.$row['cname'].'</h2>'; ?>
                          </a>
                        </div>
                        <div class="z-img">
                        <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive">'; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
          
            <div class=" col-sm-4">
                <div class="col-xs-12 img-outer" style="margin: 20px 0;">
                    <div class="hovereffect">
                    <?php 
                $sql="SELECT * FROM aweddingcatercomp WHERE id=9";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                        <div class="z-text">
                            <a href="wplanMC.php" target='_blank' >
                                  <?php  echo '<h2>'.$row['cname'].'</h2>'; ?>
                           </a>
                        </div>
                        <div class="z-img">
                        <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="img-responsive">'; ?>
                        </div>
                        <?php } ?>
                    </div>
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