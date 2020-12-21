<body class="theme-red">
    <!-- Page Loader -->
    <?php 
      $this->load->view('admin/template/loader');
    ?>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <?php
      $this->load->view('admin/template/search');
    ?>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php
      $this->load->view('admin/template/nav');
    ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?php
          $this->load->view('admin/template/sidenav');
        ?>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php 
              $this->load->view('admin/kategori/judul');
            ?>

            <!-- Widgets -->
            <?php 
              $this->load->view('admin/kategori/kategori');
            ?>
            <!-- #END# Widgets -->
            
            </div>
        </div>
    </section>
