<div class="row">
	<div class="col-md-12">
		<div class="panel panel-danger">
			<div class="panel-heading clearfix">
				<span class="panel-title"> Daftar Mobil </span>
				<a href="<?php echo base_url();?>mobil/tambah" class="btn btn-warning pull-right">Tambah</a>
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Merek</th>
							<th>No Polisi</th>
							<th>Warna</th>
							<th>Tahun</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i=0;
						foreach($mobil as $row){
							$i++;
							echo'
							<tr>
							<td>'.$i.'</td>
							<td>'.$row->merk_mobil.'</td>
							<td>'.$row->no_polisi.'</td>
							<td>'.$row->warna.'</td>
							<td>'.$row->tahun.'</td>
							<td>'.$row->status.'</td>
							<td>
								<a href ="'.base_url().'mobil/ubah/'.$row->id_mobil.'" class="btn btn-danger btn-sm">Ubah</a>
								<a href ="javascript:confirmHapus('.$row->id_mobil.')" class="btn btn-success btn-sm">Hapus</a>
							</td>
						</tr>
							';
							
						}
					?>
						
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
		</div>
	</div>
</div>
<script>
function confirmHapus(id){
	var yakin=confirm("Anda yakin menghapus mobil dengan "+id);
	if(yakin){
		window.location="<?php echo base_url(); ?>mobil/hapus/"+id;
	}
}
</script>