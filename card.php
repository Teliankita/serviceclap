<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <br>
  
  <p>Image at the bottom (card-img-bottom):</p>
  <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Jane Doe</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%">
  </div>
</div>

</body>
</html>





<html>
   <head>
      <title>The W3.CSS Syntax Highlighter</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
      <style>
         div {
            width : 200px;	
            height : 200px;	
         } 
      </style>
   </head>
   
   <body>   
      <header class = "w3-container w3-teal">   
         <h2>Yellow Card Demo</h2>   
      </header>
      <br/>
      
      <div class = "w3-card w3-yellow">
         <p><b>TODO:</b> Learn HTML5</p>
      </div>
      <div class = "w3-card-2 w3-yellow">
         <p><b>TODO:</b> Learn HTML5</p>
      </div>
      <div class = "w3-card-4 w3-yellow">
         <p><b>TODO:</b> Learn HTML5</p>
      </div>
      <div class = "w3-card-8 w3-yellow">
         <p><b>TODO:</b> Learn HTML5</p>
      </div>
      <br/>
      
      <header class = "w3-container w3-teal">   
         <h2>White Card Demo</h2>   
      </header>
      <br/>
      
      <div class = "w3-card w3-white">
         <p><b>TODO:</b> Learn W3.CSS</p>
      </div>
      <div class = "w3-card-8 w3-white">
         <p><b>TODO:</b> Learn HTML5</p>
      </div>
      <br/>
      
      <div class = "w3-card-4" style = "width:550px;">
         <header class = "w3-container w3-blue">
            <h1>HTML5 Tutorial</h1>
         </header>
         
         <div class = "w3-container" style = "width:550px;">
            <p>The latest versions of Apple Safari, Google Chrome, Mozilla Firefox, and Opera all support many HTML5 features and Internet Explorer 9.0 will also have support for some HTML5 functionality. The mobile web browsers that come pre-installed on iPhones, iPads, and Android phones all have excellent support for HTML5.</p>
         </div>
      </div>
      <br/>
      
      <header class  =  "w3-container w3-teal">   
         <h2>Image Card Demo</h2>   
      </header>
      <br/>
      
      <div class = "w3-card-12" style = "width:255px; height: 230px;">
         <img src = "/html5/images/html5-mini-logo.jpg" alt = "html5">
         <div class = "w3-container">
            <p>Learn HTML5</p>
         </div>
      </div>
   </body>
</html>