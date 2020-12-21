<?= $this->session->flashdata('message');?>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
        <div class="modal fade bd-example-modal-lg" id="tambahAnggota" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Anggota</h3>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url().'admin/tambah_anggota_act' ?>" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="nama_anggota" id="nama_anggota" class="form-control">
                                            <label class="form-label">Nama Anggota</label>
                                        </div>
                                        <?php echo form_error('nama_anggota'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="no_telp" id="no_telp" class="form-control">
                                            <label class="form-label">Telepon</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="alamat" id="alamat" class="form-control">
                                            <label class="form-label">Alamat</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" id="email" class="form-control">
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control">
                                            <label class="form-label">Password</label>
                                        </div>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>
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