
    <?php foreach($anggota as $a) :?>
    
    <div class="container">    
        <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default card">
                <div class="panel-heading post-thumb">
                    <img class="img img-responsive" style="max-height:200px;" src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>" />
                </div>

                <div class="panel-body post-body">
                    <h3 class="post-title">
                        <a href="#" role="button" style="text-decoration:none;" data-toggle="modal" data-target="#detailData<?= $a->id_anggota?>"><?= $a->nama_anggota?></a>
                    </h3>
                </div>
            </div>
        </div>

        <?php endforeach;?>

    </div>
    <?php
        $this->load->view('member/anggota/modal');
    ?>
<br>
<br>