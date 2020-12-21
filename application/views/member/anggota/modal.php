<?php $no = 0;
            foreach($anggota as $m) : $no++?>
        <div class="modal fade bd-example-modal-lg" id="detailData<?= $m->id_anggota?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h3 class="modal-title" id="exampleModalLabel">Detail Anggota</h3>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img style="max-height: 300px;" src="<?php echo base_url().'/assets/upload/'.$m->gambar; ?>" />
                            <br><br>
                            <p>Nama                 : <?= $m->nama_anggota;?></p>
                            <p>Jenis Kelamin        : <?= $m->gender;?></p>
                            <p>Email                : <?= $m->email;?></p>
                        </center>        
                    </div>
                </div>
            </div>
        </div>
<?php endforeach;?>