<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon text-white mr-2" style="background:radial-gradient(circle at top left, #fdbb2d, #22c1c3)">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin" href="buku.php">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                      <a href="<?php echo base_url().'member/buku'?>" style="text-decoration: none; color: white;">Buku<i class="mdi mdi-book-open-variant mdi-24px float-right"></i></a>
                    </h4>
                    <h2 class="mb-5"><?php echo $this->M_perpus->get_data('buku')->num_rows(); ?></h2>
                    <h6 class="card-text">Data Buku Yang Ada Di Perpustakaan</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">
                      <a href="<?php echo base_url().'member/anggota'?>" style="text-decoration: none; color: white;">Anggota <i class="mdi mdi-account mdi-24px float-right"></i></a>
                    </h4>
                    <h2 class="mb-5"><?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?></h2>
                    <h6 class="card-text">Data Mahasiswa Yang Menjadi Anggota</h6>
                  </div>
                </div>
              </div>
            </div>