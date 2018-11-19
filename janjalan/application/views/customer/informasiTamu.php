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

  <?php echo $error; ?>
  
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
      <div class="w3-display-middle" style="width:65%">
				<div class="w3-bar w3-theme-d3">
		 			<h2  style="margin-left:2%">METODE PEMBAYARAN</h2>
	 			</div>
        <div class="w3-container w3-white w3-padding-16">
					<form action = "<?php echo base_url().'customerupload' ?>" method = "post" enctype = "multipart/form-data">
						<input type="radio" name="bank" class="bank"> Transfer Rekening Bank<br>
						  <input type="radio" name="bank" class="bank"> Transfer Virtual Account (ATM/SMS/Internet)<br>
						  <input type="radio" name="bank" class="bank"> Kartu Kredit<br>
						  <input type="radio" name="bank" class="bank"> Payment Point: Alfamart via DOKU<br>
						  <input type="radio" name="bank" class="bank"> Payment Point: Indomaret<br>
						  <input type="radio" name="bank" class="bank"> BCA Klikpay (Bukan KlikBCA)<br>
						<input type="radio" name="bank" class="bank"> CIMB Clicks<br>
						  <input type="radio" name="bank" class="bank"> BCA Sakuku<br>
						  <input type="radio" name="bank" class="bank"> Mandiri Clickpay<br>
						  <input type="radio" name="bank" class="bank"> Mandiri e-cash<br>
						  <input type="radio" name="bank" class="bank"> Danamon Online Banking<br>
						  <input type="radio" name="bank" class="bank"> IB Muamalat <br>
						  
						  <b>Bukti Transfer</b>
						  <input type="file" name="userfile" required />
						  <input type="submit" value="upload" /> 


			       <a href="<?php echo base_url().'tocustomersuccesspayment' ?>" class="w3-button w3-black" style="margin-bottom:2%;margin-right:15%;margin-left:60%;margin-top: 1%">Selesaikan Pembayaran</a>
					</form>
    </div>
      </div>
      </header>
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


<!--div class="form1">
<h2>INFORMASI TAMU </h2>
<h5><b>KONFIGURASI KAMAR 1:</h5>
<form>
  <b>Nama Lengkap Tamu<br>
  <input type="text" name="firstname">
  <input type="radio" name="join" value="Pemesan tidak ikut menginap">  Pemesan tidak ikut menginap<br>
  <b>Jumlah Orang Dewasa<br>
  <input type="text" name="jmlorgdewasa"><br>
  <b>Konfigurasi<br>
  <input type="text" name="konfigurasi"><br>

</form>
</div-->

  </body>
  </html>
