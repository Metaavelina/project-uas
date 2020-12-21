<?= $this->session->flashdata('message');?>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
        <div class="modal fade bd-example-modal-lg" id="tambahBuku" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Buku</h3>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url().'admin/tambah_buku_act' ?>" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="id_kategori">
                                                <option value="">--Pilih Kategori--</option>
                                                <?php foreach ($kategori as $k) { ?>
                                                    <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <?php echo form_error('id_kategori'); ?>
                                    </div>
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="judul_buku" class="form-control">
                                            <label class="form-label">Judul Buku</label>
                                        </div>
                                        <?php echo form_error('judul_buku'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="pengarang" class="form-control">
                                            <label class="form-label">Pengarang</label>
                                        </div>
                                        <?php echo form_error('pengarang'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="date" name="thn_terbit" class="form-control">
                                            <label class="form-label">Tahun Terbit</label>
                                        </div>
                                        <?php echo form_error('thn_terbit'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="penerbit" class="form-control">
                                            <label class="form-label">Penerbit</label>
                                        </div>
                                        <?php echo form_error('penerbit'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="isbn" class="form-control">
                                            <label class="form-label">ISBN</label>
                                        </div>
                                        <?php echo form_error('isbn'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="jumlah_buku" class="form-control">
                                            <label class="form-label">Jumlah Buku</label>
                                        </div>
                                        <?php echo form_error('jumlah_buku'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="lokasi" id="lokasi" class="form-control">
                                                <option value="Rak 1">Rak 1</option>
                                                <option value="Rak 2">Rak 2</option>
                                                <option value="Rak 3">Rak 3</option>
                                            </select>
                                        </div>
                                        <?php echo form_error('lokasi'); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>
                                        <?php echo form_error('foto'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                        <select name="status_buku" id="status_buku" class="form-control">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Sedang dipinjam</option>
                                        </select>
                                        </div>
                                        <?php echo form_error('status'); ?>
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