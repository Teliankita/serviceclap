<?php
include("include.php");
?>
<?php
if(isset($_POST["insert"]))
{
$drop1=$_POST['drop1'];
$drop2=$_POST['drop2'];
$drop3=$_POST['drop3'];
$check=implode(',',$_POST['ch']);
$date=$_POST['date'];
$phone=$_POST['phone'];

//store a image in database3


$sql="INSERT INTO checkname (drop1,drop2,drop3,checkbox,date,phone) VALUES ('$drop1','$drop2','$drop3','$check','$date',$phone)";
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
    <center>
        <h1>Best Wedding Caterer in Bangalore</h1>
    </center>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="boxed">

            <form action="megha.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Please select the type of event you are hosting:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop1" id="drop1">
                            <option value="Wedding day">Wedding day</option>
                            <option value=" Engagement"> Engagement  </option>
                            <option value="Reception">Reception </option>
                            <option value=" Other"> Other</option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Food preference:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br>
                        <select name="drop2" id="drop2">
                            <option value="Pure Veg"> Pure Veg</option>
                            <option value=" Veg and Non Veg "> Veg and Non Veg </option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Expected number of guests:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <select name="drop3" id="drop3"  style="width:170px" >
                            <option value="100 - 150">100 - 150</option>
                            <option value="  200 - 250 ">  200 - 250 </option>
                            <option value="300 - 350">300 - 350</option>
                            <option value="500 +">500 +</option>
                        </select>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;">
                                <h3>Approximate budget for the caterer:</h3>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <select name="drop3" id="drop3"  style="width:170px" >
                            <option value="BudgetRs.13,000 - 23,000">BudgetRs.13,000 - 23,000</option>
                            <option value=" ExperiencedRs.23,000 - 35,000"> ExperiencedRs.23,000 - 35,000</option>
                            <option value="PremiumRs.35,000 - 55,000">PremiumRs.35,000 - 55,000</option>
                        </select>
                    </div>
                </div>

                <hr>
          
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="team" style="color:black;"><h3>Event Date:</h3></label>
                        </div>
                    </div>
                    <div class="col-sm-3">
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
                    <div class="col-sm-3">
                        <input type="tell" style="width:150px" name="phone" required="">
                    </div>
                    <br>
                </div>
            </form>
                <button type="submit" name="insert" id="insert" class="btn btn-default" style="width: 160px; height: 48px; float:right;   background-color: #212121;    color: #fff;">Submit</button>
           
        </div>
    </div>
 

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>