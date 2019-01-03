<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Global stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/icon/icomoon/styles.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/minified/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/minified/core.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/minified/components.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<<?php echo base_url('assets/css/minified/colors.min.css'); ?>" rel="stylesheet" type="text/css">
	<!-- Global stylesheet -->

	<!--  -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js'); ?>"></script>
	<!--  -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/app.js'); ?>"></script>
</head>
<body>
	<!-- main navbar -->
	<div class="navbar navbar-inverse">
		<h3><marquee><strong>Akta Kelahiran</strong></marquee></h3>
	</div>
	<!-- Main Navbar -->

	<!-- Page Container -->
	<div class="page-container login-container">
		
		<!-- page content -->
		<div class="content-wrapper">
			
			<!-- content area -->
			<div class="content">
				
				<!-- simple login form -->
				<form action="<?php echo site_url('#'); ?>" method="post">
					<div class="panel panel-body login-form">
						<div class="text-center">
							
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>

							<h5 class="content-group">LOGIN MANG</h5>
						</div>

						<?php

						$data=$this->session->flashdata('sukses');
						if ($data!="") { ?>
							<div class="alert alert-success"><strong>SUKSES!</strong><?=$data;?></div>
						<?php } ?>

						<?php

						$data2=$this->session->flashdata('error');

						if ($data2!="") { ?>
							<div class="alert alert-danger"><strong>Error!</strong><?=$data2;?></div>
						<?php } ?>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" name="username" placeholder="Username">

							<div class="form-control-feedback">
								
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="password" class="form-control" name="password" placeholder="Password">

							<div class="form-control-feedback">
								
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group">
							
							<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
						</div>
					</div>
				</form>

				<div class="footer text-muted">
					&copy;2016. <a href="#" target="blank">Seta Permana</a> 
				</div>
				<!-- Footer -->
			</div>
			<!-- /content area -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->

</body>
</html>