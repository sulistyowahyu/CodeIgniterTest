<div class="row">
	<div class="col-md-12">
		<div class="panel panel-danger">
			<div class="panel-heading clearfix">
				<span class="panel-title"> Daftar Peminjaman </span>
				<a href="<?php echo base_url(); ?>peminjaman/tambah" class="btn btn-warning pull-right">Tambah</a>
			</div>
			<div class="panel-body table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>ID Peminjaman</th>
							<th>Mobil</th>
							<th>Pelanggan</th>
							<th>Tgl Pinjam</th>
							<th>Lama Sewa</th>
							<th>Biaya</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
						foreach($peminjaman as $row){
							$i++;
							echo'
								<tr>
									<td>'.$i.'</td>
									<td>'.$row->merk_mobil.'</td>
									<td>'.$row->nama_pelanggan.'</td>
									<td>'.$row->tgl_pinjam.'</td>
									<td>'.$row->lama_sewa.'</td>
									<td>'.$row->biaya.'</td>
									<td>';
									if($row->tgl_kembali=="0000-00-00"){
										echo '<a href ="'.base_url().'peminjaman/kembalikan/'.$row->id_peminjaman.'" class="btn btn-success btn-sm">Proses Kembali</a>';
									}
									echo '</td>
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
		var yakin = confirm("Anda yakin menghapus peminjaman dengan id "+id);

		if(yakin){
			window.location = "<?php echo base_url(); ?>peminjaman/hapus/"+id;
		}
	}
</script>