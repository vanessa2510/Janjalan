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

		<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  		<img class="w3-image" src="http://localhost/janjalan/assets/gallery/picture/travel-3.jpg" alt="Travel" width="1500" height="700">
			<div class="w3-display-middle" style="width:65%">
	 <div class="w3-bar w3-theme-d3">
		 <h2> <i class="w3-bar-item"><i class="fa fa-bed w3-margin-right"></i>Cari Hotel</h2>
	 </div>
	 <div class="w3-container w3-white w3-padding-16">
      <form>
        <div class="w3-row-padding" style="margin:0 -16px;">
					<div class="w3-half" style="margin-left:25%; margin-bottom:2%;">
						<label><i class="fa fa-search"></i>Cari hotel</label>
            <input class="w3-input w3-border" type="text" placeholder="Cari kota atau hotel.." name="cariHotel" required>
					</div>
          <div class="w3-half w3-margin-bottom" style="margin-left:25%;">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>
          <div class="w3-half" style="margin-left:25%;">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
          </div>
        </div>
        <a href="<?php echo base_url().'tocustomerhotelresult' ?>" class="w3-btn w3-black" type="submit" style="margin-left:38%; margin-top : 3%;"><i class="fa fa-search w3-margin-right"></i> Search availability</a>

      </form>
				<a href="#">Lihat Filter Pencarian</a>
    </div>
		</header>

		<!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>Good Offers Right Now</h3>
    <h6>Up to <strong>50%</strong> discount.</h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="http://localhost/janjalan/assets/gallery/picture/bali.jpg" alt="Bali" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Bali</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="http://localhost/janjalan/assets/gallery/picture/sby.jpg" alt="Surabaya" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Surabaya</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="http://localhost/janjalan/assets/gallery/picture/bandung.jpg" alt="Bandung" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Bandung</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="http://localhost/janjalan/assets/gallery/picture/jogja.jpg" alt="Jogja" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Jogja</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="http://localhost/janjalan/assets/gallery/picture/jkt.jpg" alt="Jakarta" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Jakarta</span>
          </div>
        </div>
      </div>
    </div>
  </div>
		<!-- contact -->
		<div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Chicago, US<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-theme-d3 w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<!--
		<div class="barTujuanTanggalJmlMalam w3-bar w3-card w3-black w3-padding-48">
			<div class="w3-display-container">
				<ul>
				<li class="tulisanTujuan w3-display-left">Tujuan</li>
				<li class="checkin">Checkin</li>
				<li class="checkout">Checkout</li>
				<li class="tulisanJmlMalam w3-display-right">Jumlah Malam</li>
			</ul>
			</div>

			<div class="searchbar w3-bottomleft">
				<input type="text" placeholder="Nama Hotel atau Kota ..">
			</div>

		</div>



		<table boder="1">
        <tr>
            <td>baris 1 kolom 2</td>
        </tr>
    </table>
		<br>
		<div class="customercare">
			<div class="tulisancustomercare">CUSTOMER&nbspCARE</div>
				<div class="container">
					&nbspBooking&nbsp24&nbspHours<br>
					&nbsp08xx&nbspxxxx&nbspxxxx<br>
					&nbsp09.00&nbsps/d&nbsp17.00<br>
					&nbspcs@janjalan.com<br>
					&nbspwww.facebook.com/janjalan
				</div>
		</div>
		<br>
		<div class="bangga">
			<div class="tulisanbangga">KAMI&nbspBANGGA&nbspDAPAT MEMBERIKAN&nbspLAYANAN&nbspBERIKUT</div>
				<div class="container">
					&nbspTempat&nbsptidur&nbspsesuai&nbsppilihan
					&nbspFasilitas&nbspkamar&nbspsesuai&nbsppilihan
					&nbspReview&nbspjujur&nbspdan&nbspasli&nbspdari&nbsppenginap
					&nbspLayanan&nbspprima&nbspcustomer&nbspcare
				</div>
		</div>
	-->
	</body>

</html>
