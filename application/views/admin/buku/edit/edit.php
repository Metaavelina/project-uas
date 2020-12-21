<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>

<?php 
foreach($buku as $b) : ?>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT BUKU
                    </h2>
                </div>    

                <div class="body">
                    <form action="<?php echo base_url().'admin/update_buku' ?>" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="id_kategori" class="form-control">
                                            <option value="<?php echo $b->id_kategori; ?>"><?php echo $b->nama_kategori; ?></option>
                                            <?php foreach ($kategori as $k) { ?>
                                                <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <?php echo form_error('id_kategori'); ?>
                                </div>
                                    
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="hidden" name="id" value="<?php echo $b->id_buku; ?>">
                                        <input type="text" value="<?= $b->judul_buku?>" name="judul_buku" class="form-control">
                                        <label class="form-label">Judul Buku</label>
                                    </div>
                                    <?php echo form_error('judul_buku'); ?>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="<?= $b->pengarang?>" name="pengarang" class="form-control">
                                        <label class="form-label">Pengarang</label>
                                    </div>
                                    <?php echo form_error('pengarang'); ?>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" value="<?= $b->thn_terbit?>" name="thn_terbit" class="form-control">
                                        <label class="form-label">Tahun Terbit</label>
                                    </div>
                                    <?php echo form_error('thn_terbit'); ?>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="<?= $b->penerbit?>" name="penerbit" class="form-control">
                                        <label class="form-label">Penerbit</label>
                                    </div>
                                    <?php echo form_error('penerbit'); ?>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="<?= $b->isbn?>" name="isbn" class="form-control">
                                        <label class="form-label">ISBN</label>
                                    </div>
                                    <?php echo form_error('isbn'); ?>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="<?= $b->jumlah_buku?>" name="jumlah_buku" class="form-control">
                                        <label class="form-label">Jumlah Buku</label>
                                    </div>
                                    <?php echo form_error('jumlah_buku'); ?>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="lokasi" id="lokasi" class="form-control">
                                            <option value="<?php echo $b->lokasi; ?>"><?php echo $b->lokasi; ?></option>
                                            <option value="Rak 1">Rak 1</option>
                                            <option value="Rak 2">Rak 2</option>
                                            <option value="Rak 3">Rak 3</option>
                                        </select>
                                    </div>
                                    <?php echo form_error('lokasi'); ?>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="status" id="status_buku" class="form-control">
                                            <option <?php if($b->status_buku == "1"){echo "selected='selected'";} echo $b->status_buku; ?> value="1">Tersedia</option>
                                            <option <?php if($b->status_buku == "0"){echo "selected='selected'";} echo $b->status_buku; ?> value="0">Sedang dipinjam</option>
                                        </select>
                                    </div>
                                    <?php echo form_error('status'); ?>
                                </div>

                                
                                <div class="form-group">
                                    <div class="form-line"> 
                                        <?php
                                            if(isset($b->gambar)){
                                                echo '<input type="hidden" name="old_pict" value="'.$b->gambar.'">';
                                                echo '<img src="'.base_url().'assets/upload/'.$b->gambar.'" width="30%">';
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