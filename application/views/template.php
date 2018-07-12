
<!DOCTYPE HTML>
<html>
	<head>
		<title>Rental Mobil</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	</head>
	
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle"
					data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>">Rental Mobil</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li id="beranda" >
						<a href="<?php echo base_url(); ?>">Beranda</a>
					</li>
					<li id="mobil" >
						<a href="<?php echo base_url(); ?>mobil">Mobil</a>
					</li>
					<li id="pelanggan" >
						<a href="<?php echo base_url(); ?>pelanggan">Pelanggan</a>
					</li>
					<li id="peminjaman" >
						<a href="<?php echo base_url(); ?>peminjaman">Peminjaman</a>
					</li>
					<li id="pengembalian" >
						<a href="<?php echo base_url(); ?>pengembalian">Pengembalian</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo base_url(); ?>beranda/keluar">
							<span class="fa fa-sign-out"></span> Keluar
						</a>
					</li>
				</ul>
			</div>
		  </div>
		</nav> 
		
		<div class="container">
	
			<?php if($this->session->flashdata('notif')) {?>
				
				<div class="alert alert-<?php echo $this->session->flashdata('type')?>" alert-dismissible>
				<a href="#" class="close" data-dismiss="alert" arial-label="close">x</a>	
				
				<h4><?php echo $this->session->flashdata('pesan')?></h4>
				</div>
			

		<?php }?>


			<?php
				if(isset($halaman)){
					include('halaman/'.$halaman.'.php');
				}
				else{
					echo '<div class = "jumbotron">
						  <h1 class="text-success">Selamat Datang Di Rental Mobil</h1>
						  <p>Anda login sebagai : '.$this->session->userdata('nama').'</p>
						  </div>
					';
				}
			
			?>


		</div>
		
	</body>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script>
		$().ready(function(){
			$("#<?php echo $menu;?>").addClass('active');
		});
		
	</script>
</html>










