<?php

	$pelanggan = array(
					"id_pelanggan"  => "", 
					"nama_pelanggan"=> "",
					"nik" 			=> "", 
					"alamat" 		=> "", 
					"jenis_kelamin" => "", 
					"no_hp" 		=> ""
				);
				
	$url = base_url()."pelanggan/simpan";
	
	if(isset($value) && $value!=null){
		$pelanggan = (array) $value;
		$url .= "/".$pelanggan['id_pelanggan'];
	}
				
?>


<div class="row">
<div class="col-md-8">
	<div class="panel panel-primary">
		<div class="panel panel-heading">
				<span class="panel-title">From Pelanggan</span>
		</div>
	<div class="panel-body">
		<form class="form-horizontal" action="<?php echo $url;?>" method="POST">
		
		<div class="form-group">
						<label class="control-label col-md-4">Nama Pelanggan</label>
						<div class="col-md-4">
						<input type="text" value="<?php echo $pelanggan['nama_pelanggan'];?>" class="form-control" name="nama_pelanggan" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">NIK</label>
							<div class="col-md-2">
								<input type="text" value="<?php echo $pelanggan['nik'];?>" class="form-control" name="nik" required>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Alamat</label>
							<div class="col-md-3">
								<input type="text" value="<?php echo $pelanggan['alamat'];?>" class="form-control" name="alamat" required>
							</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-3">Jenis Kelamin</label>
						<div class="col-md-2 col-sm-4">
						<input type="text" class="form-control" value="<?php echo $pelanggan['jenis_kelamin'];?>" name="jenis_kelamin" required>
						</div>
						</div>
						
					<div class="form-group">
						<label class="control-label col-md-4 col-sm-3">No HP</label>
						<div class="col-md-2 col-sm-4">
						<input type="text" class="form-control" value="<?php echo $pelanggan['no_hp'];?>" name="no_hp" required>
						</div>
						</div>
				
			
			
				<div class="form-group clearfix">
					<input type="submit" class="btn btn-primary pull-right" value="simpan">
					<input type="reset" class="btn btn-warning pull-right" value="Batal">
				</div>
		</from>
		</div>
	</div>
	</div>
		
</div>