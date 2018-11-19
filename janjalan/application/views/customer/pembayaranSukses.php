<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<style>
	ul{
		list-style: none;
	}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 4px;
    text-align: left;
}
.form1{
	margin-left: 2%;
}
.informasiPemesan{
  margin-bottom: 5%;
}
.bank{
  margin-left: 5%;
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
            <a HREF = "<?php echo base_url().'tocustomerorder' ?>" class = "w3-bar-item w3-hover-lime">Check Pesanan</a>
          </div>
        </div>
      </div>
    </div>

<div class="w3-bar w3-theme-d3 w3-display-middle" style="margin-top:50%;">
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
      <img class="w3-image" src="http://localhost/janjalan/assets/gallery/picture/travel-3.jpg" alt="Travel" width="1500" height="700">
      <div class="w3-container w3-display-middle w3-white w3-padding-16">
        <label><i class="fa fa-check" style="font-size:40px; margin-left:43%;"></i></label>
        <div><h2>PEMBAYARAN BERHASIL</h2></div>
      </div>

</header>
</body>
</html>
