<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Sign In | Bootstrap Based Admin Template - Material Design</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page" background="<?php echo base_url();?>assets/images/icon3.jpg">
	<div class="login-box">
		<div class="logo">
			<a href="javascript:void(0);">Daftar Data Diri Anda </a>
		</div>
		<div class="card">
<div class="body">
                <form id="sign_up" method="POST" novalidate="novalidate">
                        
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Nama Anda" required="" autofocus="" aria-required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Confirm Password" required="" aria-required="true">
                        </div>
                    </div>
                    <h2>Data Anak</h2>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_anak" minlength="6" placeholder="Nama Anak" required="" aria-required="true">
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="tgl" minlength="6" placeholder="tanggal Lahir Anak" required="" aria-required="true">
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="berat" minlength="6" placeholder="berat anak" required="" aria-required="true">
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="tinggi" minlength="6" placeholder="Tinggi Anak" required="" aria-required="true">
                        </div>
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="jk" minlength="6" placeholder="Jenis Kelamin Anak" required="" aria-required="true">
                        </div>
                    </div>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Daftar Segera</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo site_url("welcome/login"); ?>">Sudah Punya Akun?</a>
                    </div>
                </form>
            </div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<scriplugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

	<!-- Validation Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pages/examples/sign-in.js"></script>
</body>

</html>