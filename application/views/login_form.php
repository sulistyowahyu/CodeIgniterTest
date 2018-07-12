<!DOCTYPE HTML>
<html>
	<head>
		<title>Rental Mobil</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
		<style>
			body{
			}
			
			.box-login > h3{
				margin-bottom: 17px;
			}
			
			.box-login{
				background: white;
				width:320px; 
				min-height:200px; 
				margin:80px auto;
				border:1px solid #444; 
				padding:5px 16px;
				border-radius:10px;
				box-shadow: 1px 3px 2px 1px !important;
			}
		</style>
	</head>
	<body>
		<div class="box-login clear-fix" >
			<h3 class="text-center">Login Rental</h3>
			<form action="<?php echo base_url(); ?>index.php/login/cek" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" required/>
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-success btn-md" value="Login" required/>
				</div>
			</form>
		</div>
	</body>
</html>