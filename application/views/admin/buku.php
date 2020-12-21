<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
<div class="page-header">
	<h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Data Buku</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_buku'; ?>" class="btn btn-primary btn"><span class="glyphicon glyphicon-plus"></span> &emsp; Buku Baru</a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable" style="font-family: 'Comic Sans MS', serif, text-align: center;">
		<thead>
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>ISBN</th>
				<th>Lokasi</th>
				<th>Status</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach($buku as $b){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" width="80" height="80" alt="gambar tidak ada " ></td>
				<td><?php echo $b->judul_buku ?></td>
				<td><?php echo $b->pengarang ?></td>
				<td><?php echo $b->penerbit ?></td>
				<td><?php echo $b->thn_terbit ?></td>
				<td><?php echo $b->isbn ?></td>
				<td><?php echo $b->lokasi ?></td>
				<td>
					<?php 
					if($b->status_buku == "1"){
						echo "Tersedia";
					}else if($b->status_buku == "0"){
						echo "Sedang dipinjam";
					}
					?>
				</td>
				<td nowrap="nowrap" style="text-align: center;">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url(). 'admin/edit_buku/' .$b->id_buku; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-primary btn-xs" href="<?php echo base_url(). 'admin/hapus_buku/' .$b->id_buku; ?>"><span class="glyphicon glyphicon-remove"></span></a>
					
				</td>
			</tr>
<?php } ?>
</tbody>
	</table>
</div>
</div>
<br>
<br>