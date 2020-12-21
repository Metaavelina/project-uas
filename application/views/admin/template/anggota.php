                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="font-bold m-b--35">ANGGOTA</div>
                            
                            <ul class="dashboard-stat-list">
                                <?php foreach ($anggota as $a) :?>
                                <li>
                                    <?= $a->nama_anggota?>
                                    <span class="pull-right"><b><?php echo $a->gender; ?></b></span>
                                </li>
                                
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>