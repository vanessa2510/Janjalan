<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<style>
	ul{
		list-style: none;
	}
</style>
<html>
	<head>
		<title> Janjalan </title>
	</head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href= "http://localhost/janjalan/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href= "http://localhost/janjalan/assets/css/font-awesome.css">
	<link rel="stylesheet" href= "http://localhost/janjalan/assets/css/w3-theme-w3schools.css">
	<link rel="stylesheet" href= "http://localhost/janjalan/assets/css/w3.css">
	<link rel="stylesheet" href= "http://localhost/janjalan/assets/lib/font-awesome.min.css">
	<link rel="stylesheet" href= "http://localhost/janjalan/assets/lib/font-awesome.css">
	<link rel="stylesheet" href= "http://localhost/janjalan/assets/lib/w3.css">
	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href= "https://use.fontawesome.com/releases/v5.4.1/css/all.css">

  <body class="w3-light-grey">
    <div class="w3-top">
      <div class="" style="background-color: #f8f8f8;">
        <!-- Navigation Bar -->
        <div class="w3-bar w3-white w3-border-bottom w3-xlarge">
          <a href="<?php echo base_url().'tocustomerhome' ?>" class="w3-bar-item w3-button w3-text-black w3-hover-lime"><b><i class="fa fa-bed w3-margin-right"></i>Janjalan</b></a>
        </div>
        <!-- Tampilan Bar Home -->
        <div class="tampilanBar">
          <div class = "w3-bar w3-theme-d3 w3-card w3-large">
            <a HREF = "<?php echo base_url().'tocustomerhome' ?>" class = "w3-bar-item w3-hover-lime w3-theme">Home</a>
            <a HREF = "#" class = "w3-bar-item w3-hover-lime">Tempat Rekreasi</a>
            <a HREF = "#" class = "w3-bar-item w3-hover-lime">Check Pesanan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- tampilan hasil pencarian -->
		<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  		<img class="w3-image" src="http://localhost/janjalan/assets/gallery/picture/travel-3.jpg" alt="Travel" width="1500" height="700">
			<div class="w3-card w3-center w3-display-topleft w3-theme-d3" style="width:20%; height:16%; margin-left:1%; margin-top:20%;">
					<ul>
						<li style = "margin-top:15%;margin-bottom:2%;margin-right:15%;">Tujuan :</li>
						<li style="margin-bottom : 4%;margin-right:15%;">Bandung</li>
						<li style ="margin-bottom:2%;margin-right:15%;" class="">Check in :</li>
						<li style="margin-bottom : 4%;margin-right:15%;">23 Oktober 2018</li>
						<li style="margin-bottom:2%;margin-right:15%;"class="">Check out : </li>
						<li style="margin-bottom : 4%;margin-right:15%;">25 Oktober 2018</li>
						<a href="<?php echo base_url().'tocustomerhome' ?>" class="w3-button w3-black" style="margin-bottom:2%;margin-right:15%;">Ubah Pencarian</a>
					</ul>
			</div>

  <!-- Slideshow Header -->
  <div class="w3-row-padding w3-section w3-display-middle w3-theme-d3" style="float:right; background-color: #f8f8f8; width:55%; padding-bottom:2%; padding-left:20px;">
		<h2 class="w3-text-white">Hotel Padma</h2>
		<div class="w3-display-container">
			<img src="http://localhost/janjalan/assets/gallery/picture/hotel-padma.jpg" style="width:80%;margin-bottom:10px;">
		</div>
		<div class="w3-display-container mySlides">
			<img src="http://localhost/janjalan/assets/gallery/picture/hotel-padma-1.jpg" style="width:80%;margin-bottom:10px;">
		</div>
		<div class="w3-display-container mySlides">
			<img src="http://localhost/janjalan/assets/gallery/picture/hotel-padma-2.jpg" style="width:80%;margin-bottom:10px;">
		</div>
		<div class="w3-display-container mySlides">
			<img src="http://localhost/janjalan/assets/gallery/picture/hotel-padma-3.jpg" style="width:80%;margin-bottom:10px;">
		</div>
		<a href="<?php echo base_url().'tocustomerhotelprice' ?>" class="w3-button w3-black" style="margin-left:40%;">PERIKSA HARGA</a>
	<!--	<p class="w3-text-white">Mohon Maaf, kamar pilihan Anda penuh</p> -->
	</div>

    </header>


  </body>
  </html>
