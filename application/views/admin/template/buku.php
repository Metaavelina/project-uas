                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">BUKU</div>
                            
                            <ul class="dashboard-stat-list">
                                <?php foreach ($buku as $b) :?>
                                <li>
                                    <?= $b->judul_buku?>
                                    <span class="pull-right"><b><?php if($b->status_buku==1){echo "Tersedia";} else{echo "Dipinjam";} ?></b></span>
                                </li>
                                
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>