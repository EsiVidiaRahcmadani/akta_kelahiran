
									 <!--footer section start-->
										<footer>
										   <p>© 2016 Informatic Engineering. All Rights Reserved. Created By Faisal Syarifuddin & Ayu Permata Sari</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a><span id="logo"> <h1>SIDRAP</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->

							<div class="down">	
									  <a><span class=" name-caret"><h3 class="profile-username text-center"><?php echo $this->session->userdata('username')?> </h3></span></a>
									<ul>
									<li><a class="tooltips" href="<?php echo base_url()?>admin/profile"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="<?php echo base_url()?>logout"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
							</div>

							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="<?php echo base_url()?>admin"><i class="lnr lnr-apartment"></i> <span>Home</span></a></li>
										<li id="menu-academico" ><a href=""><i class="fa fa-file-text-o"></i> <span>Data User</span><span class="fa fa-angle-right" style="float: right"></span></a>
											<ul id="menu-academico-sub">
											<li id="menu-academico-boletim" ><a href="<?php echo base_url()?>">Data Pendaftar</a></li>
										    <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>">Data Pengelola</a></li>
										</ul>
											</li>
										<li id="menu-academico" ><a href=""><i class="fa fa-pencil-square-o"></i> <span>Kelola Akta</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>admin/data">Akta Kelahiran</a></li>
										    <li id="menu-academico-boletim" ><a href="<?php echo base_url()?>admin/berkas">Berkas</a></li>
										  </ul>
									 	</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/vroom.css">
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/vroom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/CSSPlugin.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js"></script>
</body>
</html>