<div class="row">
	<div class="col-md-12">
		<div class="panel panel-danger">
			<div class="panel-heading clearfix">
				<span class="panel-title"> Daftar Pelanggan </span>
				<a href="<?php echo base_url();?>pelanggan/tambah" class="btn btn-warning pull-right">Tambah</a>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<th>NIK</th>
							<th>Alamat</th>
							<th>Jenis_Kelamin</th>
							<th>No_Hp</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						foreach($pelanggan as $row){
							$i++;
							echo'
						<tr>
							<td>'.$i.'</td>
							<td>'.$row->nama_pelanggan.'</td>
							<td>'.$row->nik.'</td>
							<td>'.$row->alamat.'</td>
							<td>'.$row->jenis_kelamin.'</td>
							<td>'.$row->no_hp.'</td>
						
							<td>
								<a href ="'.base_url().'pelanggan/ubah/'.$row->id_pelanggan.'" class="btn btn-danger btn-sm">Ubah</a>
								<a href ="javascript:confirmHapus('.$row->id_pelanggan.')" class="btn btn-success btn-sm">Hapus</a>
							</td>
						
						</tr>';
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
	var yakin=confirm("Anda yakin menghapus pelanggan dengan "+id);
	if(yakin){
		window.location="<?php echo base_url(); ?>pelanggan/hapus/"+id;
	}
}
</script>