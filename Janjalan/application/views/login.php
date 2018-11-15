<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href= "<?php echo 'http://localhost/janjalan/assets/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href= "<?php echo 'http://localhost/janjalan/assets/css/font-awesome.css'?>">
	<link rel="stylesheet" href= "<?php echo 'http://localhost/janjalan/assets/css/w3-theme-w3schools.css'?>">			
	<link rel="stylesheet" href= "<?php echo 'http://localhost/janjalan/assets/css/w3.css'?>">
	<link rel="stylesheet" href= "<?php echo 'http://localhost/janjalan/assets/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Raleway">

	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family:"MONTSERRAT", sans-serif}	
	
		a{
			color: yellow;
			text-decoration:none;
		}
		#title{ 
			font-family:"Raleway";
			font-size:70pt;
			color: #669900;
		}
	</style>

	<title>Selamat Datang di JanJalan!</title>
</head>

<body>

<!--font face="verdana" color="green"></font>-->
	<div class = "w3-display-container">
		<div class="w3-margin w3-display-topmiddle" >
			<i class= "fa fa-moon-o" style = "font-size:70pt; color:#669900" aria-hidden="true"></i>
			<label id = "title">JanJalan</label>
		</div>
	</div>

	<div  class = "w3-display-middle w3-container w3-half">
	
		<div class = "w3-card-4">
		
			<div class = "w3-container w3-theme-d4">
				<div class = "w3-container w3-theme" style = "width : 30%;">
					<h2 class = "">LOGIN</h2>
				</div>
			</div>
		
			<form class = "w3-container w3-padding-large" >
				<p>
					<label class = "w3-margin-bottom">Username</label>
					<input class = "w3-leftbar w3-border-green w3-input" type = "text" placeholder = "Username"></input>
				</p>
				<p>
					<label>Password</label>
					<input class = "w3-leftbar w3-border-green w3-input" type = "text" placeholder = "Password"></input>
				</p>
			</form>
			
			<div class ="w3-container w3-padding-large w3-topbar w3-bottombar w3-border-green ">
				<p>
					Daftarkan penginapan Anda!
				</p>
				<a href = "<?php echo base_url().'toproviderhome' ?>" class = "w3-btn w3-round w3-hover-lime w3-theme">
					Daftarkan <b>></b>
				</a>
			</div>
		</div>
	</div>
</body>