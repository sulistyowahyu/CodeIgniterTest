<?php

$peminjaman = array(
			"tanggal" => "",
			"merek_mobil" => "",
			"no_polisi" => "",
			"nama_pelanggan" => ""
	);
$url = base_url()."peminjaman/simpan";

if(isset($value) && $value!=null){
	$peminjaman 	 = (array) $value;
	$url 			.= "/".$peminjaman['tanggal'];
}
?>
<div class="row">
	<div class="col-md-8">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<span class="panel-title">Form Peminjaman</span>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" action="<?php echo $url; ?>" method="POST">

				<div class="form-group">
					<label class="col-md-4">Tanggal</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $peminjaman['tanggal'];?>" class="form-control" name="tanggal" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Merek Mobil</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $peminjaman['merek_mobil'];?>" class="form-control" name="merek_mobil" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Nomer Polisi</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $peminjaman['no_polisi'];?>" class="form-control" name="no_polisi" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4">Nama Pelanggan</label>
					<div class="col-md-8">
						<input type="text" value="<?php echo $peminjaman['nama_pelanggan'];?>" class="form-control" name="nama_pelanggan" required>
					</div>
				</div>

				<div class="col-md-12 clearfix">
					<input type="submit" class="btn btn-primary pull-right" value="Simpan">
					<input type="reset" class="btn btn-default pull-left" value="Batal">
				</div>

			</form>
		</div>
	</div>

	</div>
</div>