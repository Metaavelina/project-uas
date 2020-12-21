<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>

<?php 
foreach($anggota as $a) : ?>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT ANGGOTA
                    </h2>
                </div>    

                <div class="body">
                    <form action="<?php echo base_url().'admin/update_anggota' ?>" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <div class="col-sm-12">

                            <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="hidden" name="id" value="<?php echo $a->id_anggota; ?>">
                                            <input type="text" value="<?php echo $a->nama_anggota; ?>" name="nama_anggota" id="nama_anggota" class="form-control">
                                            <label class="form-label">Nama Anggota</label>
                                        </div>
                                        <?php echo form_error('nama_anggota'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="<?php echo $a->gender; ?>"><?php echo $a->gender; ?></option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" value="<?php echo $a->no_telp; ?>" name="no_telp" id="no_telp" class="form-control">
                                            <label class="form-label">Telepon</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="<?php echo $a->alamat; ?>" name="alamat" id="alamat" class="form-control">
                                            <label class="form-label">Alamat</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" value="<?php echo $a->email; ?>" name="email" id="email" class="form-control">
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                        <?php
                                            if(isset($a->gambar)){
                                                echo '<input type="hidden" name="old_pict" value="'.$a->gambar.'">';
                                                echo '<img src="'.base_url().'assets/upload/'.$a->gambar.'" width="30%">';
                                            }
                                        ?>
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>
                                        <?php echo form_error('foto'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-success m-t-15 waves-effect">SIMPAN</button>
                                    <button type="button" class="btn btn-danger m-t-15 waves-effect" onclick="window.history.go(-1)">BATAL</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>