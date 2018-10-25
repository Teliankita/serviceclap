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
  .grid {
	position: relative;
	clear: both;
	margin: 0 auto;
	padding: 1em 0 4em;
	max-width: 1000px;
	list-style: none;
	text-align: center;
}

/* Common style */
.grid figure {
	position: relative;
	float: left;
	overflow: hidden;
	margin: 10px 1%;
	min-width: 320px;
	max-width: 480px;
	max-height: 360px;
	width: 48%;
	height: auto;
	background: #3085a3;
	text-align: center;
	cursor: pointer;
}

.grid figure img {
	position: relative;
	display: block;
	min-height: 100%;
	max-width: 100%;
	opacity: 0.8;
}

.grid figure figcaption {
	padding: 2em;
	color: #fff;
	text-transform: uppercase;
	font-size: 1.25em;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
	pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.grid figure h2 {
	word-spacing: -0.15em;
	font-weight: 300;
}

.grid figure h2 span {
	font-weight: 800;
}

.grid figure h2,
.grid figure p {
	margin: 0;
}

.grid figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}

/* Individual effects */

/*---------------*/
/***** Julia *****/
/*---------------*/

figure.effect-julia {
	background: #2f3238;
}

figure.effect-julia img {
	max-width: none;
	height: 400px;
	-webkit-transition: opacity 1s, -webkit-transform 1s;
	transition: opacity 1s, transform 1s;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

figure.effect-julia figcaption {
	text-align: left;
}

figure.effect-julia h2 {
	position: relative;
	padding: 0.5em 0;
}

figure.effect-julia p {
	display: inline-block;
	margin: 0 0 0.25em;
	padding: 0.4em 1em;
	background: rgba(255,255,255,0.9);
	color: #2f3238;
	text-transform: none;
	font-weight: 500;
	font-size: 75%;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(-360px,0,0);
	transform: translate3d(-360px,0,0);
}

figure.effect-julia p:first-child {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

figure.effect-julia p:nth-of-type(2) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

figure.effect-julia p:nth-of-type(3) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

figure.effect-julia:hover p:first-child {
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
}

figure.effect-julia:hover p:nth-of-type(2) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

figure.effect-julia:hover p:nth-of-type(3) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

figure.effect-julia:hover img {
	opacity: 0.4;
	-webkit-transform: scale3d(1.1,1.1,1);
	transform: scale3d(1.1,1.1,1);
}

figure.effect-julia:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}
</style>

<body>

  <br>
  <br>
  <!-- banner -->
  <div class="boxed">
    <header class="header">
      <br>
      <h1 class="header__title">Best Wedding DJ in Bangalore</h1>

      <!-- <a href="http://praliedutzel.com/a-guide-to-hero-images/" target="_blank"style="width:200px;"  class="btn btn-default" ><h4>Create</h4></a> -->
      </ul>
    </header>
    <!-- end banner -->
    <!-- end banner -->
    <div class="content">
      <div class="grid">
        <figure class="effect-julia">
          <?php
          $query="select 'cname', 'ímage', FROM 'awdjni' WHERE id='1'";
          $result=mysqli_query($con,$query);
          $num=mysqli_num_rows($result);
          if($num>0){
            while($product=mysqli_fetch_array($result)){
          ?>
          <img src="<?php echo $product['image']; ?> alt="img21"/>
          <figcaption>
            <h2>Passionate <span>Julia</span></h2>
            <div>
              <p>Julia dances in the deep dark</p>
              <p>She loves the smell of the ocean</p>
              <p>And dives into the morning light</p>
            </div>
            <?php
            }
          }
          ?>
            <a href="#">View more</a>
          </figcaption>			
        </figure>
        <figure class="effect-julia">
          <!-- <img src="https://tympanus.net/Development/HoverEffectIdeas/img/22.jpg" alt="img22"/> -->
          <figcaption>
            <h2>Passionate <span>Julia</span></h2>
            <div>
              <p>Julia dances in the deep dark</p>
              <p>She loves the smell of the ocean</p>
              <p>And dives into the morning light</p>
            </div>
            <a href="#">View more</a>
          </figcaption>			
        </figure>
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