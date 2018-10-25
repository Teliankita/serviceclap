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
<style>.grid {
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

/*-----------------*/
/***** Goliath *****/
/*-----------------*/

figure.effect-goliath {
	background: #df4e4e;
}

figure.effect-goliath img,
figure.effect-goliath h2 {
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
}

figure.effect-goliath img {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

figure.effect-goliath h2,
figure.effect-goliath p {
	position: absolute;
	bottom: 0;
	left: 0;
	padding: 30px;
}

figure.effect-goliath p {
	text-transform: none;
	font-size: 90%;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(0,50px,0);
	transform: translate3d(0,50px,0);
}

figure.effect-goliath:hover img {
	-webkit-transform: translate3d(0,-80px,0);
	transform: translate3d(0,-80px,0);
}

figure.effect-goliath:hover h2 {
	-webkit-transform: translate3d(0,-100px,0);
	transform: translate3d(0,-100px,0);
}

figure.effect-goliath:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}



/*-----------------*/
/***** Apollo *****/
/*-----------------*/

figure.effect-apollo {
	background: #3498db;
}

figure.effect-apollo img {
	opacity: 0.95;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale3d(1.05,1.05,1);
	transform: scale3d(1.05,1.05,1);
}

figure.effect-apollo figcaption::before {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(255,255,255,0.5);
	content: '';
	-webkit-transition: -webkit-transform 0.6s;
	transition: transform 0.6s;
	-webkit-transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);
	transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);
}

figure.effect-apollo p {
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 3em;
	padding: 0 1em;
	max-width: 150px;
	border-right: 4px solid #fff;
	text-align: right;
	opacity: 0;
	-webkit-transition: opacity 0.35s;
	transition: opacity 0.35s;
}

figure.effect-apollo h2 {
	text-align: left;
}

figure.effect-apollo:hover img {
	opacity: 0.6;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

figure.effect-apollo:hover figcaption::before {
	-webkit-transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
	transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
}

figure.effect-apollo:hover p {
	opacity: 1;
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}


/*-----------------*/
/***** Steve *****/
/*-----------------*/

figure.effect-steve {
	z-index: auto;
	overflow: visible;
	background: #000;
}

figure.effect-steve:before,
figure.effect-steve h2:before {
	position: absolute;
	top: 0;
	left: 0;
	z-index: -1;
	width: 100%;
	height: 100%;
	background: #000;
	content: '';
	-webkit-transition: opacity 0.35s;
	transition: opacity 0.35s;
}

figure.effect-steve:before {
	box-shadow: 0 3px 30px rgba(0,0,0,0.8);
	opacity: 0;
}

figure.effect-steve figcaption {
	z-index: 1;
}

figure.effect-steve img {
	opacity: 1;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: perspective(1000px) translate3d(0,0,0);
	transform: perspective(1000px) translate3d(0,0,0);
}

figure.effect-steve h2,
figure.effect-steve p {
	background: #fff;
	color: #2d434e;
}

figure.effect-steve h2 {
	position: relative;
	margin-top: 2em;
	padding: 0.25em;
}

figure.effect-steve h2:before {
	box-shadow: 0 1px 10px rgba(0,0,0,0.5);
}

figure.effect-steve p {
	margin-top: 1em;
	padding: 0.5em;
	font-weight: 800;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale3d(0.9,0.9,1);
	transform: scale3d(0.9,0.9,1);
}

figure.effect-steve:hover:before {
	opacity: 1;
}

figure.effect-steve:hover img {
	-webkit-transform: perspective(1000px) translate3d(0,0,21px);
	transform: perspective(1000px) translate3d(0,0,21px);
}

figure.effect-steve:hover h2:before {
	opacity: 0;
}

figure.effect-steve:hover p {
	opacity: 1;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

/*-----------------*/
/***** Moses *****/
/*-----------------*/

figure.effect-moses {
	background: -webkit-linear-gradient(-45deg, #EC65B7 0%,#05E0D8 100%);
	background: linear-gradient(-45deg, #EC65B7 0%,#05E0D8 100%);
}

figure.effect-moses img {
	opacity: 0.85;
	-webkit-transition: opacity 0.35s;
	transition: opacity 0.35s;
}

figure.effect-moses h2,
figure.effect-moses p {
	padding: 20px;
	width: 50%;
	height: 50%;
	border: 2px solid #fff;
}

figure.effect-moses h2 {
	padding: 20px;
	width: 50%;
	height: 50%;
	text-align: left;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(10px,10px,0);
	transform: translate3d(10px,10px,0);
}

figure.effect-moses p {
	float: right;
	padding: 20px;
	text-align: right;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(-50%,-50%,0);
	transform: translate3d(-50%,-50%,0);
}

figure.effect-moses:hover h2 {
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

figure.effect-moses:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

figure.effect-moses:hover img {
	opacity: 0.6;
}

/*---------------*/
/***** Jazz *****/
/*---------------*/

figure.effect-jazz {
	background: -webkit-linear-gradient(-45deg, #f3cf3f 0%,#f33f58 100%);
	background: linear-gradient(-45deg, #f3cf3f 0%,#f33f58 100%);
}

figure.effect-jazz img {
	opacity: 0.9;
}

figure.effect-jazz figcaption::after,
figure.effect-jazz img,
figure.effect-jazz p {
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

figure.effect-jazz figcaption::after {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #fff;
	content: '';
	opacity: 0;
	-webkit-transform: rotate3d(0,0,1,45deg) scale3d(1,0,1);
	transform: rotate3d(0,0,1,45deg) scale3d(1,0,1);
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
}

figure.effect-jazz h2,
figure.effect-jazz p {
	opacity: 1;
	-webkit-transform: scale3d(0.8,0.8,1);
	transform: scale3d(0.8,0.8,1);
}

figure.effect-jazz h2 {
	padding-top: 26%;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
}

figure.effect-jazz p {
	padding: 0.5em 2em;
	text-transform: none;
	font-size: 0.85em;
	opacity: 0;
}

figure.effect-jazz:hover img {
	opacity: 0.7;
	-webkit-transform: scale3d(1.05,1.05,1);
	transform: scale3d(1.05,1.05,1);
}

figure.effect-jazz:hover figcaption::after {
	opacity: 1;
	-webkit-transform: rotate3d(0,0,1,45deg) scale3d(1,1,1);
	transform: rotate3d(0,0,1,45deg) scale3d(1,1,1);
}

figure.effect-jazz:hover h2,
figure.effect-jazz:hover p {
	opacity: 1;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

/*---------------*/
/***** Ming *****/
/*---------------*/

figure.effect-ming {
	background: #030c17;
}

figure.effect-ming img {
	opacity: 0.9;
	-webkit-transition: opacity 0.35s;
	transition: opacity 0.35s;
}

figure.effect-ming figcaption::before {
	position: absolute;
	top: 30px;
	right: 30px;
	bottom: 30px;
	left: 30px;
	border: 2px solid #fff;
	box-shadow: 0 0 0 30px rgba(255,255,255,0.2);
	content: '';
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale3d(1.4,1.4,1);
	transform: scale3d(1.4,1.4,1);
}

figure.effect-ming h2 {
	margin: 20% 0 10px 0;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
}

figure.effect-ming p {
	padding: 1em;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale(1.5);
	transform: scale(1.5);
}

figure.effect-ming:hover h2 {
	-webkit-transform: scale(0.9);
	transform: scale(0.9);
}

figure.effect-ming:hover figcaption::before,
figure.effect-ming:hover p {
	opacity: 1;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

figure.effect-ming:hover figcaption {
	background-color: rgba(58,52,42,0);
}

figure.effect-ming:hover img {
	opacity: 0.4;
}

/*---------------*/
/***** Lexi *****/
/*---------------*/

figure.effect-lexi {
	background: -webkit-linear-gradient(-45deg, #000 0%,#fff 100%);
	background: linear-gradient(-45deg, #000 0%,#fff 100%);
}

figure.effect-lexi img {
	margin: -10px 0 0 -10px;
	max-width: none;
	width: -webkit-calc(100% + 10px);
	width: calc(100% + 10px);
	opacity: 0.9;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(10px,10px,0);
	transform: translate3d(10px,10px,0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

figure.effect-lexi figcaption::before,
figure.effect-lexi p {
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

figure.effect-lexi figcaption::before {
	position: absolute;
	right: -100px;
	bottom: -100px;
	width: 300px;
	height: 300px;
	border: 2px solid #fff;
	border-radius: 50%;
	box-shadow: 0 0 0 900px rgba(255,255,255,0.2);
	content: '';
	opacity: 0;
	-webkit-transform: scale3d(0.5,0.5,1);
	transform: scale3d(0.5,0.5,1);
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
}

figure.effect-lexi:hover img {
	opacity: 0.6;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

figure.effect-lexi h2 {
	text-align: left;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(5px,5px,0);
	transform: translate3d(5px,5px,0);
}

figure.effect-lexi p {
	position: absolute;
	right: 0;
	bottom: 0;
	padding: 0 1.5em 1.5em 0;
	width: 140px;
	text-align: right;
	opacity: 0;
	-webkit-transform: translate3d(20px,20px,0);
	transform: translate3d(20px,20px,0);
}

figure.effect-lexi:hover figcaption::before {
	opacity: 1;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

figure.effect-lexi:hover h2,
figure.effect-lexi:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

/*---------------*/
/***** Duke *****/
/*---------------*/

figure.effect-duke {
	background: -webkit-linear-gradient(-45deg, #34495e 0%,#cc6055 100%);
	background: linear-gradient(-45deg, #34495e 0%,#cc6055 100%);
}

figure.effect-duke img,
figure.effect-duke p {
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

figure.effect-duke:hover img {
	opacity: 0.1;
	-webkit-transform: scale3d(2,2,1);
	transform: scale3d(2,2,1);
}

figure.effect-duke h2 {
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: scale3d(0.8,0.8,1);
	transform: scale3d(0.8,0.8,1);
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
}

figure.effect-duke p {
	position: absolute;
	bottom: 0;
	left: 0;
	margin: 20px;
	padding: 30px;
	border: 2px solid #fff;
	text-transform: none;
	font-size: 90%;
	opacity: 0;
	-webkit-transform: scale3d(0.8,0.8,1);
	transform: scale3d(0.8,0.8,1);
	-webkit-transform-origin: 50% -100%;
	transform-origin: 50% -100%;
}

figure.effect-duke:hover h2,
figure.effect-duke:hover p {
	opacity: 1;
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
}

/* Media queries */
@media screen and (max-width: 50em) {
	.content {
		padding: 0 10px;
		text-align: center;
	}
	.grid figure {
		display: inline-block;
		float: none;
		margin: 10px auto;
		width: 100%;
	}
}


















@font-face {
	font-weight: normal;
	font-style: normal;
	font-family: 'codropsicons';
	src:url('../fonts/codropsicons/codropsicons.eot');
	src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
		url('../fonts/codropsicons/codropsicons.woff') format('woff'),
		url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
		url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
}

*, *:after, *:before { -webkit-box-sizing: border-box; box-sizing: border-box; }
.clearfix:before, .clearfix:after { display: table; content: ''; }
.clearfix:after { clear: both; }

body {
	background: #2f3238;
	color: #fff;
	font-weight: 400;
	font-size: 1em;
	font-family: 'Raleway', Arial, sans-serif;
}

a {
	outline: none;
	color: #3498db;
	text-decoration: none;
}

a:hover, a:focus {
	color: #528cb3;
}

section {
	padding: 1em;
	text-align: center;
}

.content {
	margin: 0 auto;
	max-width: 1000px;
}

.content > h2 {
	clear: both;
	margin: 0;
	padding: 4em 1% 0;
	color: #484B54;
	font-weight: 800;
	font-size: 1.5em;
}

.content > h2:first-child {
	padding-top: 0em;
}

/* Header */
.codrops-header {
	margin: 0 auto;
	padding: 4em 1em;
	text-align: center;
}

.codrops-header h1 {
	margin: 0;
	font-weight: 800;
	font-size: 4em;
	line-height: 1.3;
}

.codrops-header h1 span {
	display: block;
	padding: 0 0 0.6em 0.1em;
	color: #74777b;
	font-weight: 300;
	font-size: 45%;
}



</style>

<body>

  <div class="boxed">
  <div class="content">
  <?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'urbanclap');


$query = " SELECT `name`, `image`
 FROM `images` order by id ASC ";

 $result = mysqli_query($con,$query);

 $num = mysqli_num_rows($result);

 if($num > 0){
     while($product = mysqli_fetch_array($result)){
        ?>

      
				<h2>Julia</h2>
				<div class="grid">
					<figure class="effect-julia">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
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
					<figure class="effect-julia">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
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
				<h2>Goliath</h2>
				<div class="grid">
					<figure class="effect-goliath">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Thoughtful <span>Goliath</span></h2>
							<p>When Goliath comes out, you should run.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-goliath">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Thoughtful <span>Goliath</span></h2>
							<p>When Goliath comes out, you should run.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
			
				

				<h2>Apollo</h2>
				<div class="grid">
					<figure class="effect-apollo">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Strong <span>Apollo</span></h2>
							<p>Apollo's last game of pool was so strange.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Strong <span>Apollo</span></h2>
							<p>Apollo's last game of pool was so strange.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				
				
				<h2>Steve</h2>
				<div class="grid">
					<figure class="effect-steve">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Lonely <span>Steve</span></h2>
							<p>Steve was afraid of the Boogieman.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-steve">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Lonely <span>Steve</span></h2>
							<p>Steve was afraid of the Boogieman.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				<h2>Moses</h2>
				<div class="grid">
					<figure class="effect-moses">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Cute <span>Moses</span></h2>
							<p>Moses loves to run after butterflies.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-moses">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Cute <span>Moses</span></h2>
							<p>Moses loves to run after butterflies.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				<h2>Jazz</h2>
				<div class="grid">
					<figure class="effect-jazz">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Dynamic <span>Jazz</span></h2>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-jazz">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Dynamic <span>Jazz</span></h2>
							<p>When Jazz starts to chase cars, the whole world stands still.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				<h2>Ming</h2>
				<div class="grid">
					<figure class="effect-ming">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Funny <span>Ming</span></h2>
							<p>Ming sits in the corner the whole day. She's into crochet.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-ming">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Funny <span>Ming</span></h2>
							<p>Ming sits in the corner the whole day. She's into crochet.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				<h2>Lexi</h2>
				<div class="grid">
					<figure class="effect-lexi">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Altruistic <span>Lexi</span></h2>
							<p>Each and every friend is special. Lexi won't hide a single cookie.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-lexi">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Altruistic <span>Lexi</span></h2>
							<p>Each and every friend is special. Lexi won't hide a single cookie.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
				<h2>Duke</h2>
				<div class="grid">
					<figure class="effect-duke">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Messy <span>Duke</span></h2>
							<p>Duke is very bored. When he looks at the sky, he feels to run.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-duke">
						<img src="<?php echo $product['image']; ?>" class="img-fluid mb-2" style="height:350px;">
						<figcaption>
							<h2>Messy <span>Duke</span></h2>
							<p>Duke is very bored. When he looks at the sky, he feels to run.</p>
							<a href="#">View more</a>
						</figcaption>			
					</figure>
				</div>
			</div>
  </div>
  <?php
                }
            }
            ?>
</div>
 
</body>

</html>