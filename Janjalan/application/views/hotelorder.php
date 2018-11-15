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
		a{text-decoration:none}
		
	</style>

	<title>JanJalan: HOME</title>
</head>

<body>
<!-- NAV BAR -->
	<div class = "w3-top">
		<div class = "w3-bar w3-theme-d3 w3-card w3-large">
			<a HREF = "<?php echo base_url().'toproviderhome'?>" class = "w3-bar-item w3-hover-white">Manajemen Hotel</a>
			<a HREF = "<?php echo base_url().'toorder'?>" class = "w3-bar-item w3-hover-lime w3-theme">Pesanan</a>
			<a HREF = "<?php echo base_url().'toreview'?>" class = "w3-bar-item w3-hover-white">Ulasan</a>
			<a HREF = "<?php echo base_url().'toinvoice'?>" class = "w3-bar-item w3-hover-white">Bukti Pembayaran</a>
			<a HREF = "#" class = "w3-bar-item w3-hover-white">Profil</a>
		</div>
	</div>
	

<!-- INTENTIONAL EMPTY -->
	<DIV STYLE = "height: 80px">
	</DIV>

	
<!-- SIDEBAR -->
	<div class = "">
	</div>
	
<!-- MAIN CONTENT -->
	<DIV CLASS = "w3-display-container w3-card" style = "width:75%; margin:0 auto">
		<div class = "w3-container w3-padding w3-theme-d3">
			<h3>Daftar Pesanan Hotel</h3>
		</div>
		
		<div class = "w3-container" >
			<?php foreach($isipesanan as $everything){?>
			<div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt"><?php echo $everything->namacustomer ?></div>
					<div class = "w3-border-top w3-padding "><?php echo $everything->jumlahmalam ?> Malam</div>
					<div class = "w3-padding ">Ulasan : <?php echo $everything->review ?> Malam</div>
					<div class = "w3-padding ">Rating : 
					<?php
						for($i=1; $i<= $everything->rate ; $i++){
						echo '<i class="w3-textborder w3-text-yellow fa fa-star" aria-hidden="true" style = "font-size: 20pt; text-shadow: 3px 2px green"></i>';
					}?>
					</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div>
			<?php } ?>
		
			<!--div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt">Aldiansyah</div>
					<div class = "w3-border-top w3-padding ">3 Malam</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div-->
			
			<!--div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt">Aldiansyah</div>
					<div class = "w3-border-top w3-padding ">3 Malam</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div>
			
			<div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt">Aldiansyah</div>
					<div class = "w3-border-top w3-padding ">3 Malam</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div>
			
			<div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt">Aldiansyah</div>
					<div class = "w3-border-top w3-padding ">3 Malam</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div>
			
			<div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt">Aldiansyah</div>
					<div class = "w3-border-top w3-padding ">3 Malam</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div>
			
			<div class = "w3-leftbar w3-border-green w3-hover-shadow w3-display-container w3-card w3-panel w3-margin w3-padding-large">
				<div class = "w3-quarter">
					<img class = "w3-circle" src = "../gallery/aot.jpg" width="100%"></img>
				</div>
				<div class = "w3-rest w3-padding">
					<div class = "w3-text-theme w3-padding w3-rest" style = "font-size: 20pt">Aldiansyah</div>
					<div class = "w3-border-top w3-padding ">3 Malam</div>
				</div>
				
				<div class = "w3-display-topright"><button class = "w3-button w3-red">Batalkan</button></div>
			</div-->
			
		</div>
	</DIV>
	
<!-- FOOTER -->
	<DIV CLASS = "w3-container w3-theme-d4 w3-margin-top w3-padding-32" style = "height: 300px">
		
	</DIV>
	
</body>