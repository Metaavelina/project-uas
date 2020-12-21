<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
    <div class="page-header">
        <h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Data Buku</h3>
    </div>

    <?php foreach($buku as $b) :?>
    
    <div class="container">    
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading post-thumb">
                        <img class="img img-responsive" src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" />
                    </div>

                    <div class="panel-body">
                        <a class="label label-default"><?= $b->nama_kategori?></a>
                        <h3 class="post-title">
                            <a style="text-decoration:none; max-height: 200px;" role="button" data-toggle="modal" data-target="#detailData<?= $b->id_buku?>"><?= $b->judul_buku?></a>
                        </h3>
                    </div>
                </div>
            </div>

            <?php endforeach;?>
        </div>

        <?php $no = 0;
            foreach($buku as $m) : $no++?>
        <div class="modal fade bd-example-modal-lg" id="detailData<?= $m->id_buku?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Detail Buku</h3>
                    </div>
                    <div class="modal-body">
                        <center>
                            <h3><?= $m->judul_buku?></h3>
                            <img style="max-height: 300px;" src="<?php echo base_url().'/assets/upload/'.$m->gambar; ?>" />
                            <br><br>
                            <p>Pengarang            : <?= $m->pengarang;?></p>
                            <p>Penerbit/Tanggal Terbit  : <?= $m->penerbit?>, <?= date('d F Y', strtotime($m->thn_terbit));?></p>
                            <p>Pengarang            : <?= $m->pengarang;?></p>
                            <p>ISBN                 : <?= $m->isbn;?></p>
                            <p>Jumlah Buku          : <?= $m->jumlah_buku;?></p>
                        </center>        
                    </div>
                </div>
            </div>
        </div>
<?php endforeach;?>
<br>
<br>