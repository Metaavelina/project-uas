<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
<div class="page-header">
  <h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Edit Anggota</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>

<?php foreach ($anggota as $a){ ?>
<form action="<?php echo base_url().'admin/update_anggota' ?>" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
    <label>Nama Anggota</label>
    <input type="hidden" name="id" value="<?php echo $a->id_anggota; ?>">
    <input type="text" name="nama_anggota" class="form-control" value="<?php echo $a->nama_anggota; ?>">
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
    <input type="text" name="no_telp" class="form-control" value="<?php echo $a->no_telp; ?>">
    <?php echo form_error('no_telp'); ?>
  </div>

  <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" value="<?php echo $a->alamat; ?>">
    <?php echo form_error('alamat'); ?>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="<?php echo $a->email; ?>">
    <?php echo form_error('email'); ?>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" value="<?php echo $a->password; ?>">
    <?php echo form_error('password'); ?>
  </div>

  <div class="form-group">
    <label>Gambar</label>
    <?php
    if(isset($a->gambar)){
      echo '<input type="hidden" name="old_pict" value="'.$a->gambar.'">';
      echo '<img src="'.base_url().'assets/upload/'.$a->gambar.'" width="30%">';
      }
      ?>
      <input name="foto" type="file" class="form-control">
  </div>

  <div class="form-group">
    <input type="submit" value="Update" class="btn btn-default">
    <input type="button" value="Kembali" class="btn btn-primary" onclick="window.history.go(-1)">
  </div>
  </form>
  <?php } ?>