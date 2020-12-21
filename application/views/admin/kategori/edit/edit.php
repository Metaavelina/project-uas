<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>

<?php 
foreach($kategori as $k) : ?>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT KATEGORI
                    </h2>
                </div>    

                <div class="body">
                    <form action="<?php echo base_url().'admin/update_kategori' ?>" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                    
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" name="id" value="<?php echo $k->id_kategori; ?>">
                                        <input type="text" value="<?= $k->nama_kategori?>" name="nama_kategori" class="form-control">
                                        <label class="form-label">Kategori Buku</label>
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
<?php endforeach;?>