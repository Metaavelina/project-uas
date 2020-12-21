<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEMINJAMAN
                            </h2>
                        </div>
                        <br>
                        <a href="#" role="button" style="text-decoration:none;" data-toggle="modal" data-target="#tambahPeminjaman" class="btn btn-primary btn"><i class="material-icons">add</i> &emsp; Peminjaman Baru</a>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Anggota</th>
                                        <th>Buku</th>
                                        <th>Tgl. Pinjam</th>
                                        <th>Tgl. Kembali</th>
                                        <th>Denda/Hari</th>
                                        <th>Tgl. Dikembalikan</th>
                                        <th>Total Denda</th>
                                        <th>Status Buku</th>
                                        <th>Status Pinjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($peminjaman as $p){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $p->nama_anggota ?></td>
                                        <td><?php echo $p->judul_buku ?></td>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
                                        <td><?php echo $p->denda ?></td></td>
                                        <td>
                                            <?php
                                                if($p->tgl_pengembalian =="0000-00-00"){
                                                    echo "-";
                                                }else{
                                                    echo date('d/m/Y',strtotime($p->tgl_pengembalian));
                                                } 
                                            ?>
                                        </td>
                                        <td><?php echo "Rp. ". number_format($p->total_denda)." ,-"; ?></td>
                                        <td>
                                            <?php
                                                if($p->status_buku == "1"){ 
                                                    echo "Dikembalikan";
                                                }else{
                                                    echo "-";
                                                } 
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($p->status_peminjaman == "1"){
                                                    echo "Selesai";
                                                }else {
                                            ?>
                                            <a class="btn btn-sm btn-success" href="<?php echo base_url().'admin/transaksi_selesai/'.$p->id_pinjam; ?>">
                                            <span class="glyphicon glyphicon-ok"></span> Transaksi Selesai</a>
                                            <br>
                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/transaksi_hapus/'.$p->id_pinjam; ?>">
                                            <span class="glyphicon glyphicon-remove"></span> Batalkan Transaksi </a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                $this->load->view('admin/peminjaman/tambah');
            ?>
            <!-- #END# Striped Rows -->