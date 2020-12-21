<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>E-Library BSI</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url()?>assets/member/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url()?>assets/member/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url()?>assets/member/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
	<link href="<?= base_url()?>assets/member/css/style.css" rel="stylesheet"></head>

</head>

	<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-danger alert-danger'>";
			echo $this->session->flashdata('alert');
			echo "</div";
		} else if($_GET['pesan']=='logout'){
			if($this->session->flashdata())
			{
			  echo "<div class='alert alert-danger alert-success'>";
			  echo $this->session->flashdata('Anda telah logout');
			  echo "</div>";
		}
	   }else if($_GET['pesan']=='Belum Login'){
	   	if($this->session->flashdata())
	   {
	   	 echo "<div class='alert alert-danger alert-primary'>";
	   	 echo $this->session->flashdata('alert');
	   	 echo "</div";
	   }
	 }
	}else{
		if($this->session->flashdata())
		{
			echo "<div class='alert alert-danger alert-message'>";
			echo $this->session->flashdata('alert');
			echo "</div>";
		}
	}
    ?>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">E-Library</a>
            <small>Universitas Bina Sarana Informatika</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" action="<?php echo base_url().'welcome/register_act' ?>" method="POST">
                    <div class="msg"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_admin" placeholder="Nama Langkap" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">Saya sudah membaca <a href="javascript:void(0);">peraturan</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">DAFTAR</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo base_url().'welcome' ?>">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>