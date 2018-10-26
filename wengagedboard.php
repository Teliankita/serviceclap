<?php
include("include.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
<!--disable browser back button-->
<script type="text/javascript">
history.pushState(null,null,location.href);
window.onpopstate=function(){
    history.go(1);
};
</script>
<!--end disable browser back button-->

</head>
<body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                            aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                            <li><a href="index.php"><b>Home</b></a></li>
                            <li class="dropdown">
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Wedding
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="wboardb.php"><b>Wedding  Plan</b></a></li>
                                <li><a href="wphotodboard.php"><b>Wedding Photography</b></a></li>
                                <li><a href="wmehendidboard.php"><b>Mehendi</b></a></li>
                                <li><a href="wdjdashboard.php"><b>DJ</b></a></li>
                            </ul>
                            </li>
                                <li><a href="bdboardb.php"><b>Baby</b></a></li>
                                <li><a href="htboardb.php"><b>Home Tutors</b></a></li>
                                <li><a href="mboardb.php"><b>Medical</b></a></li>
                                <li><a href="hsboardb.php"><b>Home Shift</b></a></li>
                                <li><a href="pboardb.php"><b>House painting</b></a></li>
                                <li><a href="cboardb.php"><b>City Guide</b></a></li>
                                <li><a href="cboardb.php"><b>Car Service</b></a></li>
                                
                                <li><a href="regisdboard.php"><b>register</b></a></li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>





<div class="container">
    <h3 style="padding-top: 30px; text-align: center; text-decoration: underline; font-weight: bolder; color: #2e7af4">Admin Engagement Dashboard</h3>
    <div class="row">
        <div class="col-md-12">

                <table class="table table-striped table-hover table-responsive table-bordered">
                        <tr class="success">
                            <th>How many guests</th>
                            <th>Date</th>
                            <th>Budget</th>
                            <th>Phone Number</th>
                        </tr>
 <?php
/* select and fetch the data*/
$query=mysqli_query($con,"SELECT * FROM wmehendi");
$res=mysqli_num_rows($query); //count the number of rows 
//to show the data in a next page
    while($row = mysqli_fetch_assoc($query)) {
/* end select and fetch the data*/
              echo "<tr>
                            <td>{$row['drop1']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['drop2']}</td>
                            <td>{$row['phone']}</td>
                        </tr>";
}
             echo"</table>";
?>

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