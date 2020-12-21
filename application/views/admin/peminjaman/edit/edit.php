<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TRANSAKSI SELESAI
                    </h2>
                </div>    

                <div class="body">
                    <form action="<?php echo base_url().'admin/transaksi_selesai_act' ?>" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                        <?php foreach($peminjaman as $p) : ?>
                            <input type="hidden" name="id" value="<?php echo $p->id_pinjam ?>">
                            <input type="hidden" name="buku" value="<?php echo $p->id_buku ?>">
                            <input type="hidden" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>">
                            <input type="hidden" name="denda" value="<?php echo $p->denda ?>">
                            <div class="col-sm-12">

                                    <div class="form-group">
                                        <div class="form-line">
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
                                        <?php echo form_error('anggota'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control" name="buku" disabled>
                                            <option value="">-Pilih Buku-</option>
                                            <?php foreach ($buku as $m) { ?>
                                            <option <?php
                                                if($p->id_buku==$m->id_buku){echo "selected='selected'";} ?> 
                                            value="<?php echo $m->id_buku; ?>"><?php echo $m->judul_buku; ?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <?php echo form_error('buku'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input class="form-control" type="date" name="tgl_pinjam" value="<?php echo $p->tgl_pinjam ?>" disabled>
                                            <label class="form-label">Tanggal Pinjam</label>
                                        </div>
                                        <?php echo form_error('tgl_pinjam'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input class="form-control" type="date" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>" disabled>
                                            <label class="form-label">Tanggal Kembali</label>
                                        </div>
                                        <?php echo form_error('tgl_kembali'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input class="form-control" type="text" name="denda" value="<?php echo $p->denda ?>" disabled>
                                            <label class="form-label">Denda</label>
                                        </div>
                                        <?php echo form_error('denda'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input class="form-control" type="date" name="tgl_dikembalikan">
                                            <label class="form-label">Tanggal dikembalikan oleh Anggota</label>
                                        </div>
                                        <?php echo form_error('tgl_dikembalikan'); ?>
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