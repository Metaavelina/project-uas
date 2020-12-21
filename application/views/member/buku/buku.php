
    <?php foreach($buku as $b) :?>
    
        <div class="container">    
            <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default card">
                    <div class="panel-heading post-thumb">
                        <img class="img img-responsive" src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" />
                    </div>

                    <div class="panel-body post-body">
                        <a class="label label-default" href="#"><?= $b->nama_kategori?></a>
                        <h3 class="post-title">
                            <a href="#" role="button" style="text-decoration:none;" data-toggle="modal" data-target="#detailData<?= $b->id_buku?>"><?= $b->judul_buku?></a>
                        </h3>
                    </div>
                </div>
            </div>

            <?php endforeach;?>

        </div>
        <?php
            $this->load->view('member/buku/modal');
        ?>
<br>
<br>