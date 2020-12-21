        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?= base_url();?>assets/upload/jakarta2.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('nama');?></div>
                    <div class="email"><?= $this->session->userdata('username');?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?= base_url().'member/logout'; ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?= base_url().'admin'; ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/buku';?>">
                            <i class="material-icons">assignment</i>
                            <span>Buku</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/anggota';?>">
                            <i class="material-icons">person_add</i>
                            <span>Anggota</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/peminjaman';?>">
                            <i class="material-icons">laptop_mac</i>
                            <span>Peminjaman</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url().'admin/kategori';?>">
                            <i class="material-icons">info</i>
                            <span>Kategori</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Meta Avelina</a>.
                </div>
                <div class="version">
                    <b>Nim: </b> 12193041
                </div>
            </div>
            <!-- #Footer -->
        </aside>