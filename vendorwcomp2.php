
<?php
$user="root";
$pass="";
$host="localhost";
$dbname="urbanclap";

$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con)
{
    die("connection failed: " . mysqli_connect_error());
}
//delete query
if(isset($_REQUEST["delid"]))
{
    $delid=$_REQUEST["delid"];
    // mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
    $sql="DELETE FROM 2image where id='$delid'";
    $res=mysqli_query($con,$sql);
    if($res){
    }
}
//end delete query
?>
<!-- // include("include.php");
// ?> -->
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
    <h1 class="header__title">Best Wedding Photographer in Banglore</h1><br>
    
    <!-- <a href="http://praliedutzel.com/a-guide-to-hero-images/" target="_blank"style="width:200px;"  class="btn btn-default" ><h4>Create</h4></a> -->
</ul>
  </header>
     
        <div class=" row">
             <?php 
                $sql="SELECT * FROM 2image";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
           <div class="col-md-4" class="z-img">
          <img src="<?php echo 'Pictures/'. $row['file1']; ?>" alt="<?php echo 'Pictures/'. $row['file2'] ?>" height="200" width="200" /> 
         <?php  echo '<h2>'.$row['name'].'</h2>'; ?>
        <?php echo "<a href='vendorwcomp2.php?delid=".$row['id']."'>Delete</a>";?>
       <?php echo "<a href='view1.php?name=".$row['name']."'>View</a>";?>
          </div>
          <br>  
                <?php } ?>
                <div>
                    
               


   
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