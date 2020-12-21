<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} 
?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT PROFIL
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo site_url().'member/update_profil' ?>" method="POST" >

                            <input type="hidden" id="email_address" name="id_anggota" class="form-control" value="<?= $this->session->userdata('id_anggota');?>">

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="email_address" name="nama_anggota" class="form-control" value="<?= $this->session->userdata('nama_anggota');?>">
                                        <label class="form-label">Nama</label>
                                        <?php echo form_error('nama_anggota'); ?>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea rows="4" name="alamat" class="form-control no-resize"><?= $this->session->userdata('alamat');?></textarea>
                                        <label class="form-label">Alamat</label>
                                        <?php echo form_error('alamat'); ?>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" name="email" id="email_address" class="form-control" value="<?= $this->session->userdata('email');?>">
                                        <label class="form-label">Email</label>
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="no_telp" id="email_address" class="form-control" value="<?= $this->session->userdata('no_telp');?>">
                                        <label class="form-label">Telepon</label>
                                        <?php echo form_error('telepon'); ?>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-success m-t-15 waves-effect">SIMPAN</button>
                                <button type="button" class="btn btn-danger m-t-15 waves-effect" onclick="window.history.go(-1)">BATAL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>