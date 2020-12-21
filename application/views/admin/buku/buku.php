<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BUKU PERPUSTAKAAN
                            </h2>
                        </div>
                        <br>
                        <a href="#" role="button" style="text-decoration:none;" data-toggle="modal" data-target="#tambahBuku" class="btn btn-primary btn"><i class="material-icons">add</i> &emsp; Buku Baru</a>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>ISBN</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($buku as $b){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" width="80" height="80" alt="gambar tidak ada " ></td>
                                        <td><?php echo $b->judul_buku ?></td>
                                        <td><?php echo $b->pengarang ?></td>
                                        <td><?php echo $b->penerbit ?></td>
                                        <td><?php echo $b->thn_terbit ?></td>
                                        <td><?php echo $b->isbn ?></td>
                                        <td><?php echo $b->lokasi ?></td>
                                        <td>
                                            <?php 
                                            if($b->status_buku == "1"){
                                                echo "Tersedia";
                                            }else if($b->status_buku == "0"){
                                                echo "Sedang dipinjam";
                                            }
                                            ?>
                                        </td>
                                        <td nowrap="nowrap" style="text-align: center;">
                                            <a class="btn btn-success btn-xs" href="<?php echo base_url(). 'admin/edit_buku/' .$b->id_buku; ?>"><i class="material-icons">edit</i></a>
                                            <a class="btn btn-danger btn-xs" href="<?php echo base_url(). 'admin/hapus_buku/' .$b->id_buku; ?>"><i class="material-icons">delete</i></span></a>
                                            
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
                $this->load->view('admin/buku/tambah');
            ?>
            <!-- #END# Striped Rows -->