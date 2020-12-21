<?php $no = 0;
            foreach($buku as $m) : $no++?>
        <div class="modal fade bd-example-modal-lg" id="detailData<?= $m->id_buku?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
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