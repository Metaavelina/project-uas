<script src="https://cdn.rawgit.com/FicriPebriyana/efek/0a935a6c/efek%20salju.js" type="text/javascript"></script>
<div class="constraint">
    <div class="page-header">
        <h3 style="font-family: 'Comic Sans MS', serif; font-size: 32px; color: white; text-shadow: 3px 2px 1px crimson;">Data Anggota</h3>
    </div>

    <?php foreach($anggota as $a) :?>
    
    <div class="container">    
    <div class="row">
        <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading post-thumb">
                <img class="img img-responsive" style="max-height:300px; max-width: 330px;" src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>" />
            </div>

            <div class="panel-body post-body">
                <h3 class="post-title">
                    <a style="text-decoration:none; max-height: 100px;" role="button" data-toggle="modal" data-target="#detailData<?= $a->id_anggota?>"><?= $a->nama_anggota?></a>
                </h3>
            </div>

        </div>
    </div>

    <?php endforeach;?>

</div>

<?php $no = 0;
foreach($anggota as $a) : $no++?>
<div class="modal fade bd-example-modal-lg" id="detailData<?= $a->id_anggota?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Detail Buku</h3>
        </div>
        <div class="modal-body">
			<center>
			<img class="mr-3" style="max-height: 200px; " src="<?php echo base_url().'/assets/upload/'.$a->gambar; ?>"><br><br>
				<label for="">Nama Lengkap  : <?= $a->nama_anggota;?></label><br>
				<label for="">Jenis Kelamin : <?= $a->gender;?></label><br>
				<label for="">Telepon : <?= $a->no_telp?></label><br>
				<label for="">Email : <?= $a->email;?></label>
			</center>
        </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<br>
<br>