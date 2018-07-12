<?php
$mobil = array(
		"id_mobil"=>"",
		"merk_mobil"=>"",
		"no_polisi"=>"",
		"warna"=>"",
		"tahun"=>"",
		"status"=>""
		

		);
		
$url = base_url()."mobil/simpan";
if(isset($value) &&	 $value!=null){
	$mobil	=	(array)	$value;
	$url .= "/".$mobil['id_mobil'];
	
}
?>
<div class="row">
<div class="col-md-8">
	<div class="panel panel-primary">
		<div class="panel panel-heading">
				<span class="panel-title">From Mobil</span>
		</div>
	<div class="panel-body">
		<form class="form-horizontal" action="<?php echo $url;?>" method="POST">
			<div class="form-group">
				<label class="control-label col-md-4">Merek Mobil</label>
					<div class="col-md-4">
				<input type="text" value="<?php echo $mobil['merk_mobil'];?>"class="from-control" name="merk_mobil" required>
				</div>
			</div>
				
			<div class="form-group">
				<label class="control-label col-md-4">NO Polisi</label>
				<div class="col-md-4">
				<input type="text" value="<?php echo $mobil['no_polisi'];?>"class="from-control" name="no_polisi" required>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-4">Warna</label>
				<div class="col-md-4">
				<input type="text" value="<?php echo $mobil['warna'];?>" class="from-control" name="warna" required>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-4">Tahun</label>
				<div class="col-md-4">
				<input type="text" value="<?php echo $mobil['tahun'];?>" class="from-control" name="tahun" required>
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