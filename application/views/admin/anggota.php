<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
<div class="page-header">
	<h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Data Anggota</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary btn"><span class="glyphicon glyphicon-plus"></span> &emsp; Anggota Baru</a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable" style="font-family: 'Comic Sans MS', serif, text-align: center;">
		<thead>
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Nama Anggota</th>
				<th>Gender</th>
				<th>No.Telp</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach($anggota as $a){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><img src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>" width="80" height="80" alt="gambar tidak ada " ></td>
				<td><?php echo $a->nama_anggota ?></td>
				<td><?php echo $a->gender ?></td>
				<td><?php echo $a->no_telp ?></td>
				<td><?php echo $a->alamat ?></td>
				<td><?php echo $a->email ?></td>
				<td nowrap="nowrap" style="text-align: center;">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url(). 'admin/edit_anggota/' .$a->id_anggota; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-primary btn-xs" href="<?php echo base_url(). 'admin/hapus_anggota/' .$a->id_anggota; ?>"><span class="glyphicon glyphicon-remove"></span></a>
					
				</td>
			</tr>
<?php } ?>
</tbody>
	</table>
</div>
</div>
<br>
<br>