<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
<div class="page-header">
  <h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Transaksi Selesai</h3>
</div>

<form action="<?php echo base_url().'admin/transaksi_selesai_act' ?>" method="post">
	<?php foreach ($peminjaman as $p) { ?>
	<input type="hidden" name="id" value="<?php echo $p->id_pinjam ?>">
	<input type="hidden" name="buku" value="<?php echo $p->id_buku ?>">
	<input type="hidden" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>">
	<input type="hidden" name="denda" value="<?php echo $p->denda ?>">
	<div class="form-group">
		<label>Anggota</label>
		<select class="form-control" name="anggota" disabled>
			<option value="">-Pilih Anggota-</option>
			<?php foreach ($anggota as $k) { ?>
			<option <?php if($p->id_anggota==$k->id_anggota)
			{
				echo "selected='selected'";
			} 
			?> 
			value="<?php echo $k->id_anggota; ?>"><?php echo $k->nama_anggota; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Buku</label>
			<select class="form-control" name="buku" disabled>
			<option value="">-Pilih Buku-</option>
			<?php foreach ($buku as $m) { ?>
			<option <?php
				if($p->id_buku==$m->id_buku){echo "selected='selected'";} ?> 
			value="<?php echo $m->id_buku; ?>"><?php echo $m->judul_buku; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Tanggal Pinjam</label>
		<input class="form-control" type="date" name="tgl_pinjam" value="<?php echo $p->tgl_pinjam ?>" disabled>
	</div>
	<div class="form-group">
		<label>Tanggal Kembali</label>
		<input class="form-control" type="date" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>" disabled>
	</div>
	<div class="form-group">
		<label>Denda/Hari</label>
		<input class="form-control" type="text" name="denda" value="<?php echo $p->denda ?>" disabled>
	</div>
	<div class="form-group">
		<label>Tanggal dikembalikan oleh Anggota</label>
		<input class="form-control" type="date" name="tgl_dikembalikan">
		<?php echo form_error('tgl_dikembalikan'); ?>
	</div>
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary btn-sm">
	</div>
</form>
<?php } ?>