<?= $this->session->flashdata('message');?>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
        <div class="modal fade bd-example-modal-lg" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Kategori</h3>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url().'admin/tambah_kategori_act' ?>" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                <input type="hidden" name="id_kategori" class="form-control">

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="nama_kategori" class="form-control">
                                            <label class="form-label">Kategori Buku</label>
                                        </div>
                                        <?php echo form_error('nama_kategori'); ?>
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