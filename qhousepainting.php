<?php
include("include.php");
$nameid=$_GET['nameid'];
?>
<?php
SESSION_START();
if(isset($_POST["insert"]))
{
    $drop5=$_POST['drop5'];
    $drop1=$_POST['drop1'];
    $drop2=$_POST['drop2'];
    $drop3=$_POST['drop3'];
    $drop4=$_POST['drop4'];
     $drop6=$_POST['drop6'];
    $drop7=$_POST['drop7'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];

//store a image in database3


$sql="INSERT INTO housepainting (name,drop1,drop2,drop3,drop4,drop6,drop7,date,phone) VALUES ('$drop5','$drop1','$drop2','$drop3','$drop4','$drop6','$drop7','$date',$phone)";
$res=mysqli_query($con,$sql);
if($res){

}
}
if(isset($_GET["edit"]))
 {
     $_SESSION['edit']=$_GET['edit'];
     $edit=$_SESSION['edit'];
 }
if(isset($_POST['update'])){
    $drop1=$_POST['drop1'];
    $drop2=$_POST['drop2'];
    $drop3=$_POST['drop3'];
    $drop4=$_POST['drop4'];
    $drop6=$_POST['drop6'];
    $drop7=$_POST['drop7'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
$edit=$_SESSION['edit'];
// mysqli_query($con,"DELETE * FROM  webs where id='$delid'");
$sql="UPDATE housepainting set drop1='$drop1',drop2='$drop2',drop3='$drop3',drop4='$drop4',drop6='$drop6',date='$date',phone='$phone' where id='$edit'";
$res=mysqli_query($con,$sql);
if($res){
   
  

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            padding: 50px;
        }

        /* box */

        .boxed {
            background-color: #fff;
            max-width: 1000px;
            margin: 0 auto !important;
            border-left: solid 1px #ccc;
            border-right: solid 1px #ccc;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .4), inset 0 0 2px rgba(255, 255, 255, .75);
        }


        .row {
            margin-right: 0px;
            margin-left: 0px;
        }

        /* boxed */
    </style>
</head>

<body>
<?php 
                $sql="SELECT * FROM 5image WHERE id='".$nameid."'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
               <center> <?php  echo '<h2>'.$row['name'].'</h2>'; ?></a> </center>                    
                        <br>  
                <?php } ?>
   
    <br>
    <br>
    <br>

    <div class="container">
        <div class="boxed">

            <form action="qhousepainting.php?nameid=<?php echo $nameid ?>" method="POST" enctype="multipart/form-data" onsubmit="return myfun()">
                <div class="row">
                <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Company Name</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop5" id="drop5">
                            <option value="Home"><?php 
                $sql="SELECT * FROM 4image WHERE id='".$nameid."'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
               <center> <?php  echo '<h2>'.$row['name'].'</h2>'; ?></a> </center>                    
                        <br>  
                <?php } ?></option>
                        </select>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Which part of your house needs to be painted?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop1" id="drop1">
                            <option value="Interiors">Interiors</option>
                            <option value="Exteriors"> Exteriors </option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Type of property</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <br>
                        <select name="drop2" id="drop2">
                            <option value="Residential/Home">Residential/Home</option>
                            <option value="Commercial/Office">Commercial/Office</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Interior area to be painted</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                    <br>
                    <select name="drop3" id="drop3">
                            <option value="Full House">Full House</option>
                            <option value="Only a few rooms">Only a few rooms</option>
                            <option value="Only a few walls">Only a few walls</option>
                            <option value="No interior area to be painted">No interior area to be painted</option>
                        </select>
                    </div>
                </div>

                <hr>
                
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Condition of house</h3></label>
                        </div>
                    </div>
                    
                    <div class="col-sm-3"><br>
                    <select name="drop4" id="drop4"  style="width:170px" >
                            <option value="New property or never painted">New property or never painted</option>
                            <option value="Painted few years ago">Painted few years ago</option>
                        </select>
                    </div>
                    </div>
                    
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Additional services required:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" ><br>
                        <select name="drop6" id="drop6"  style="width:170px" >
                            <option value="Exterior area painting required">Exterior area painting required</option>
                            <option value="Seepage/crack filling">Seepage/crack filling</option>
                            <option value="Wall Texture">Wall Texture</option>
                            <option value="Waterproofing">Waterproofing</option>
                            <option value="POP work required">POP work required</option>
                            <option value="Wood Polish">Wood Polish</option>
                            <option value="Need to discuss with the painter">Need to discuss with the painter</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>When would you like to get the painting done?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" ><br>
                        <select name="drop7" id="drop7"  style="width:170px" >
                            <option value="Within a week">Within a week</option>
                            <option value="Within a month">Within a month</option>
                            <option value="After 1 month">After 1 month</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Painting date?</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                    <br>
                        <input id="date" type="date" name="date" required="">
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Phone Number:</h3></label>
                        </div>
                    </div>
                    <div class="col-sm-3"><br>
                        <input type="tell" style="width:150px" name="phone" required="">
                    </div>
                
                </div>
                <div class="form-group">
                <center>
                        <a href="aupdate4.php?phone=<?php echo $_POST['phone']?>"><b><i style="color:black;font-size:120%">Delete  and edit Category</i></b></a></center>
                    </div>
   <button type="submit" name="insert" class="btn btn-default" style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Submit</button></a>
                <button type='Update' class='btn btn-default' name='update' style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Update</button>
                </form>
             
                <a href="index.php"><button type="submit" class="btn btn-default" style="width: 160px; height: 48px; float:left;   background-color: #212121;    color: #fff;">Back</button></a>
        </div> </form>
        </div>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function myfun(){
    var a = document.getElementById("phone").value;
    if(a==""){
        document.getElementById("message").innerHTML="**pls fill mobile number";
        return false;
    }
    if(isNaN(a)){
        document.getElementById("message").innerHTML="**enter only numeric values";
        return false;
    }
    if(a.length<10) {
        document.getElementById("message").innerHTML="**mobile number must be 10 digit";
        return false;
    }
    if(a.length>10){
        document.getElementById("message").innerHTML="**mobile number must be 10 digit";
        return false;
    }
    }
</script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>