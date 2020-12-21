<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ANGGOTA PERPUSTAKAAN
                            </h2>
                        </div>
                        <br>
                        <a href="#" role="button" style="text-decoration:none;" data-toggle="modal" data-target="#tambahAnggota" class="btn btn-primary btn"><i class="material-icons">add</i> &emsp; Anggota Baru</a>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Anggota</th>
                                        <th>Gender</th>
                                        <th>No.Telp</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($anggota as $a){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><img src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>" width="80" height="80" alt="gambar tidak ada " ></td>
                                        <td><?php echo $a->nama_anggota ?></td>
                                        <td><?php echo $a->gender ?></td>
                                        <td><?php echo $a->no_telp ?></td>
                                        <td><?php echo $a->alamat ?></td>
                                        <td><?php echo $a->email ?></td>
                                        <td nowrap="nowrap" style="text-align: center;">
                                            <a class="btn btn-success btn-xs" href="<?php echo base_url(). 'admin/edit_anggota/' .$a->id_anggota; ?>"><i class="material-icons">edit</i></a>
                                            <a class="btn btn-danger btn-xs" href="<?php echo base_url(). 'admin/hapus_anggota/' .$a->id_anggota; ?>"><i class="material-icons">delete</i></span></a>
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
                $this->load->view('admin/anggota/tambah');
            ?>
            <!-- #END# Striped Rows -->