            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <a href="<?= base_url().'member/buku';?>" style="text-decoration: none; color: white;">BUKU</a>
                            </div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $this->M_perpus->get_data('buku')->num_rows(); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">
                                <a href="<?= base_url().'member/anggota';?>" style="text-decoration: none; color: white;">Anggota</a>
                            </div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>