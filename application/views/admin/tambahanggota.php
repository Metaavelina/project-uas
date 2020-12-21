<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
<div class="page-header">
  <h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Anggota Baru</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'admin/tambah_anggota_act' ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nama Anggota</label>
      <input type="text" name="nama_anggota" id="nama_anggota" class="form-control">
      <?php echo form_error('nama_anggota'); ?>
    </div>

    <div class="form-group">
      <label>Gender</label>
        <select name="gender" id="gender" class="form-control">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <div class="form-group">
      <label>No.Telp</label>
      <input type="number" name="no_telp" id="no_telp" class="form-control">
    </div>

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" id="alamat" class="form-control">
    </div>

 <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>
    
 <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" id="password" class="form-control">
    </div>

<div class="form-group">
      <label>Gambar</label>
      <input type="file" name="foto" id="foto" class="form-control">
    </div>


    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
  </div>
</form>
</div>
<br>
<br>