<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: #f1c40f">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo base_url().'/assets/upload/'.$this->session->userdata('gambar');?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= $this->session->userdata('nama_anggota');?></span>
                  <strong><span class="text-secondary text-small"><?= $this->session->userdata('email');?></span></strong>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="<?php echo base_url().'member'; ?>">
                <span class="menu-title" style="color: black">Dashboard</span>
                <i class="mdi mdi-home menu-icon" style="color: black"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Daftar Menu</span>
                <i class="menu-arrow" style="color: black"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon" style="color: black"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="buku-lain/">Buku</a></li>
                  <li class="nav-item"> <a class="nav-link" href="mahasiswa/">Mahasiswa</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>