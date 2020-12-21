        <div class="modal fade bd-example-modal-lg" id="tambahPeminjaman" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h3>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url().'admin/tambah_peminjaman_act' ?>" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select class="form-control" name="anggota">
                                            <option value="">-Pilih Anggota-</option>
                                            <?php foreach ($anggota as $a) { ?>
                                                <option value="<?php echo $a->id_anggota; ?>"><?php echo $a->nama_anggota; ?></option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <?php echo form_error('anggota'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="buku" class="form-control">
                                                <option value="">-Pilih Buku-</option>
                                                <?php foreach ($buku as $b) { ?>
                                                    <option value="<?php echo $b->id_buku; ?>"><?php echo $b->judul_buku; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <?php echo form_error('buku'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input type="date" name="tgl_pinjam" class="form-control">
                                            <label class="form-label">Tanggal Pinjam</label>
                                        </div>
                                        <?php echo form_error('tgl_pinjam'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input type="date" name="tgl_kembali" class="form-control">
                                            <label class="form-label">Tanggal Kembali</label>
                                        </div>
                                        <?php echo form_error('tgl_kembali'); ?>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                        <input type="text" name="denda" class="form-control">
                                            <label class="form-label">Denda</label>
                                        </div>
                                        <?php echo form_error('denda'); ?>
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