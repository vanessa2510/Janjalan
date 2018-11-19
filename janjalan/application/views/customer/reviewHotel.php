<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<style>
	.tujuan{
		border : 1px solid black;
		width : 20%;
		margin-left : 48px;
		padding-right : 92%;
		padding-bottom : 2%;
	}
	.tulisanTujuan{
		margin-left : 135px;
		width:55px;
	}
	.searchbar{
		border : 1px solid black;
		margin-left : 4%;
		margin-top: 1%;
		width : 260px;
	}
	.checkin{
		margin-left : 35%;
	}
	.checkout{
		margin-bottom: 2%;
		margin-left : 20%;
	}
	.tulisanJmlMalam{
		margin-right:100px;
	}
	.customercare{
		border : 1px solid black;
		width : 20%;
		margin-left : 48px;
		padding-right : 24%;
		padding-bottom : 2%;
	}
	.tulisancustomercare{
		margin-left : 85px;
		margin-bottom : 10px;
		margin-top : 10px;
	}
	.bangga{
		border : 1px solid black;
		width : 20%;
		margin-left : 48px;
		padding-right : 24%;
		padding-bottom : 2%;
	}
	.tulisanbangga{
		margin-left : 40px;
		margin-bottom : 10px;
		margin-top : 10px;
	}
	.barTujuanTanggalJmlMalam{
		margin-top: 1%;
		padding-left: 4%;
		padding-right: 4%;
	}
	ul{
		list-style: none;
	}
	.cariHotel{
		margin-left:10%;
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
						<a HREF = "<?php echo base_url().'tocustomerhome' ?>" class = "w3-bar-item w3-hover-lime">Home</a>
						<a HREF = "#" class = "w3-bar-item w3-hover-lime">Tempat Rekreasi</a>
						<a HREF = "<?php echo base_url().'tocustomerorder' ?>" class = "w3-bar-item w3-hover-lime w3-theme">Check Pesanan</a>
					</div>
				</div>
			</div>
		</div>

		<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  		<img class="w3-image" src="http://localhost/janjalan/assets/gallery/picture/travel-3.jpg" alt="Travel" width="1500" height="700">
			<div class="w3-display-middle" style="width:65%">
	 <div class="w3-bar w3-theme-d3">
		 <h2 style="margin-left:2%;">Review Hotel</h2>
	 </div>
   <div class="w3-container w3-light-grey">
     <div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
       <div class = "w3-quarter">
         <img class = "w3-round" src = "http://localhost/janjalan/assets/gallery/picture/hotel-padma.jpg" width="100%"></img>
       </div>
       <div class = "w3-rest w3-padding">
         <a href="#" class = "w3-text-theme w3-padding w3-rest" style = "font-size: 15pt">Hotel Padma</a>
         <div class = "w3-border-top w3-padding ">
           <i class="w3-textborder w3-text-yellow fa fa-star" style = "font-size: 15pt;"></i>
            <i class="w3-textborder fa fa-star" style = "font-size: 15pt;"></i>
            <i class="w3-textborder fa fa-star" style = "font-size: 15pt;"></i>
            <i class="w3-textborder fa fa-star" style = "font-size: 15pt;"></i>
            <i class="w3-textborder fa fa-star" style = "font-size: 15pt;"></i>
         </div>
         <a href="<?php echo base_url().'tocustomerfinishedreview' ?>" class="w3-btn w3-black" type="submit" style="margin-left:38%; margin-top : 3%;"> SELESAI</a>
       </div>
      </div>
    </div>
    </header>
    </body>
    </html>
