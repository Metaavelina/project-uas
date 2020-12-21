<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>E-Library UBSI</title>
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
	
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">E-Library</a>
            <small>Universitas Bina Sarana Informatika</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?php echo base_url().'welcome/login' ?>" method="POST">
                    <div class="msg"></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
							<input type="text" class="form-control" name="admin_username" placeholder="Username" required autofocus>
							<?php echo form_error('username');?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
							<input type="password" class="form-control" name="admin_password" placeholder="Password" required>
							<?php echo form_error('password');?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
							<a href="<?php echo base_url().'welcome/register' ?>">Register Now!</a>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">LOGIN</button>
                        </div>
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
    <script src="../../js/pages/examples/sign-in.js"></script>
</body>
</html>