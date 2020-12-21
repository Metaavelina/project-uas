                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>PEMINJAMAN PENDING</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tgl. Transaksi</th>
                                            <th>Tgl. Pinjam</th>
                                            <th>Kembali</th>
                                            <th>Denda/Hari</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $no = 1; 
                                        foreach($transaksi as $p) :
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= date('d/m/Y',strtotime($p->tgl_pencatatan));?></td>
                                            <td><?= date('d/m/Y',strtotime($p->tgl_pinjam));?></td>
                                            <td><?= date('d/m/Y',strtotime($p->tgl_kembali));?></td>
                                            <td><?= "Rp. ".number_format($p->denda)." ,-";?></td>
                                        </tr>
                                    </tbody>                                    
                            <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>