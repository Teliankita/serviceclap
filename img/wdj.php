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
    </style>
</head>

<body>
    <center>
        <h1>Best Wedding DJs in Bangalore</h1>
    </center>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8">
                <form action="megha.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="team" style="font-size:20px;color:black;">Please select the type of event you are
                            hosting:</label>
                        <select name="drop1" id="drop1">
                            <option value="Wedding Function">Wedding Function</option>
                            <option value=" Private Party"> Private Party</option>
                            <option value="Corporate Event">Corporate Event</option>
                            <option value=" Other"> Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="team" style="font-size:20px;color:black;">Event will take place:</label>
                        <select name="drop2" id="drop2">
                            <option value="Indoors">Indoors</option>
                            <option value=" Outdoors"> Outdoors</option>
                            <option value="Not sure yet">Not sure yet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="team" style="font-size:20px;color:black;">Approximate budget for the DJ:</label>
                        <select name="drop3" id="drop3">
                            <option value="BudgetRs.13,000 - 23,000">BudgetRs.13,000 - 23,000</option>
                            <option value=" ExperiencedRs.23,000 - 35,000"> ExperiencedRs.23,000 - 35,000</option>
                            <option value="PremiumRs.35,000 - 55,000">PremiumRs.35,000 - 55,000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="team" style="font-size:20px;color:black;">Approximate budget for the DJ:</label>
                        <input type="checkbox" name="ch[]" value="Bollywood"
                            checked> Bollywood
                        <input type="checkbox" name="ch[]" value="EDM"
                            checked> EDM
                        <input type="checkbox" name="ch[]" value="Punjabi"
                            checked> Punjabi </label>
                        <input type="checkbox" name="ch[]" value="Rock"
                            checked> Rock
                    </div>
                    <div class="form-group">
                        <label for="team" style="font-size:20px;color:black;">Event Date:</label>
                        <input id="date" type="date" name="date" required="">
</div>
<div class="form-group">
                        <label for="team" style="font-size:20px;color:black;">Phone Number:</label>
                        <input type="tell" name="phone" required="">
</div>

                    <button type="submit" name="insert" id="insert" class="btn btn-default" style="font-size:15px;color:black;">Submit</button>
                </form>
            </div>
        </div>
    </div>






    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>