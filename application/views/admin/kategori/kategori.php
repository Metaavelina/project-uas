<!-- Striped Rows -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                KATEGORI BUKU
                            </h2>
                        </div>
                        <br>
                        <a href="#" role="button" style="text-decoration:none;" data-toggle="modal" data-target="#tambahKategori" class="btn btn-primary btn"><i class="material-icons">add</i> &emsp; Kategori Baru</a>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th style="text-align: center;">No</th>
                                    <th>Nama Kategori</th>
                                    <th style="text-align: center;">Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        foreach($kategori as $k){
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no++; ?></td>
                                        <td><?php echo $k->nama_kategori ?></td>
                                        <td style="text-align: center;">
                                            <a class="btn btn-success btn-xs" href="<?php echo base_url(). 'admin/edit_kategori/' .$k->id_kategori; ?>"><i class="material-icons">edit</i></a>
                                            <a class="btn btn-danger btn-xs" href="<?php echo base_url(). 'admin/hapus_kategori/' .$k->id_kategori; ?>"><i class="material-icons">delete</i></span></a>
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
                $this->load->view('admin/kategori/tambah');
            ?>
            <!-- #END# Striped Rows -->