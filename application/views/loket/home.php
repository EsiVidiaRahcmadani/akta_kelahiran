<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Akta Kelahiran</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/loket/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="assets/loket/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/loket/css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Akta Kelahiran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Berkas</a>
          <!-- </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li> -->
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Clarence
            <span class="text-primary">Taylor</span>
          </h1>
          <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
            <a href="mailto:name@email.com">name@email.com</a>
          </div>
          <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column"
      id="experience">   <div class="my-auto">     <h2 class="mb-5">Data Akta
      Kealhiran</h2>

              <form action="<?php echo base_url()?>#" method=POST>
                <input type=submit value="Tambah Data">
              </form>    
            </div>
            <!-- /.box-header -->
            <!-- <div class="box-body">

          <form action="<?php print site_url();?>#" method=POST>
                <input type=submit value="Cari NIK Anda">
                <input type="text" name=cari> 
          </form><br> -->
          <div class="outter-wp"> 
                  <div class="sub-heard-part">
                     <ol class="breadcrumb m-b-0">
                      <li class="active">Data Belum Selesai</li>
                    </ol>
                  </div>

              <table id="example1" align="center" class="table table-bordered table-striped">
                <thead>
                                        <tr>
                                            <th><div align="center">No</div></th>
                                            <th><div align="center">NIK</div></th>
                                            <th><div align="center">Nama Ayah</div></th>
                                            <th><div align="center">Nama Ibu</div></th>
                                            <th><div align="center">Nama Lengkap</div></th>
                                            <th><div align="center">Jenis Kelamin</div></th>
                                            <th><div align="center">Tempat Dilahirkan</div></th>
                                            <th><div align="center">Provinsi</div></th>
                                            <th><div align="center">Tanggal Lahir</div></th>
                                            <th><div align="center">Tanggal Daftar</div></th>
                                            <th><div align="center">Tanggal Pengambilan</div></th>
                                            <th><div align="center">Status</div></th>
                                            <th><div align="center">Aksi</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                          if(isset($belum)){
                                                foreach($belum as $row){
                                            ?>
                                        <tr>
                                            <td><div align="center"><br><?php echo $no++; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nik; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nm_kpl_keluarga; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nama_ibu; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nm_lengkap; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->jk; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->tmpt_dilahirkan; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->province_id; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->tgl_lahir; ?></div></td>
                                            <td><div align="center"><br><?php echo date("Y-m-d H:i:s",strtotime($row->tgl_daftar)); ?></div></td>
                                            <td><div align="center"><br><?php echo $row->tgl_ambil; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->status; ?></div></td>
                                            <td class="center"><div align="center">
                            <!-- <a href="<?php echo base_url()?>#<?php print $row->nik; ?>/<?php print $row->id_berkas; ?>" type="button" target="_blank" class="fa fa-print"><b> Cetak</b></a><br><br> -->
                            <a href="<?php echo site_url('#'.$row->nik)?>" class="lnr lnr-pencil" type="button"><b>Update</b></a><br><br>
                            <a href="<?php echo site_url('loket/edit/'.$row->nik)?>" class="fa fa-pencil-square-o" type="button"><b> Edit</b></a><br><br>
                            <a href="<?php echo site_url('loket/hapus/'.$row->nik)?>" class="  fa fa-smile-o" type="button" onclick="return confirm('Anda Yakin ?');"><b> Hapus</b></a></div></td>
                                        </tr>
                                    <?php }
                                             }
                                                ?>
                                    </tbody>
              </table>

              <div class="outter-wp"> 
                  <div class="sub-heard-part">
                     <ol class="breadcrumb m-b-0">
                      <li class="active">Data Selesai</li>
                    </ol>
                  </div>

              <table id="example1" align="center" class="table table-bordered table-striped">
                <thead>
                                        <tr>
                                            <th><div align="center">No</div></th>
                                            <th><div align="center">NIK</div></th>
                                            <th><div align="center">Nama Ayah</div></th>
                                            <th><div align="center">Nama Ibu</div></th>
                                            <th><div align="center">Nama Lengkap</div></th>
                                            <th><div align="center">Jenis Kelamin</div></th>
                                            <th><div align="center">Tempat Dilahirkan</div></th>
                                            <th><div align="center">Provinsi</div></th>
                                            <th><div align="center">Tanggal Lahir</div></th>
                                            <th><div align="center">Tanggal Daftar</div></th>
                                            <th><div align="center">Tanggal Pengambilan</div></th>
                                            <th><div align="center">Status</div></th>
                                            <th><div align="center">Aksi</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                          if(isset($selesai)){
                                                foreach($selesai as $row){
                                            ?>
                                        <tr>
                                            <td><div align="center"><br><?php echo $no++; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nik; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nm_kpl_keluarga; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nama_ibu; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->nm_lengkap; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->jk; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->tmpt_dilahirkan; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->province_id; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->tgl_lahir; ?></div></td>
                                            <td><div align="center"><br><?php echo date("Y-m-d H:i:s",strtotime($row->tgl_daftar)); ?></div></td>
                                            <td><div align="center"><br><?php echo $row->tgl_ambil; ?></div></td>
                                            <td><div align="center"><br><?php echo $row->status; ?></div></td>
                                            <td class="center"><div align="center">
                            <!-- <a href="<?php echo base_url()?>#<?php print $row->nik; ?>/<?php print $row->id_berkas; ?>" type="button" target="_blank" class="fa fa-print"><b> Cetak</b></a><br><br> -->
                            <a href="<?php echo site_url('#'.$row->nik)?>" class="lnr lnr-pencil" type="button"><b>Update</b></a><br><br>
                            <a href="<?php echo site_url('loket/edit/'.$row->nik)?>" class="fa fa-pencil-square-o" type="button"><b> Edit</b></a><br><br>
                            <a href="<?php echo site_url('loket/hapus/'.$row->nik)?>" class="  fa fa-smile-o" type="button" onclick="return confirm('Anda Yakin ?');"><b> Hapus</b></a></div></td>
                                        </tr>
                                    <?php }
                                             }
                                                ?>
                                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

        </div>

      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Berkas</h2>

          <div class="page-container">
   <!--/content-inner-->
  <div class="left-content">
     <div class="inner-content">
    <!-- header-starts -->
      <div class="header-section">
              <!--/profile_details-->
                <div class="profile_details_left">
                  <ul class="nofitications-dropdown">
                      <li class="dropdown note">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i></i> <span class="badge"></span></a>      
                    </li>
                                    
              <div class="clearfix"></div>  
                </ul>
              </div>
              <div class="clearfix"></div>  
              <!--//profile_details-->
            </div>
            <!--//menu-right-->
          <div class="clearfix"></div>
        </div>
          <!-- //header-ends -->
            <div class="outter-wp"> 
                  <div class="sub-heard-part">
                     <ol class="breadcrumb m-b-0">
                      <!-- <li><a href="<?php echo base_url()?>#">Home</a></li> -->
                      <li class="active">Berkas Kelahiran</li>
                    </ol>
                  </div>

             <?php
                            $message = $this->session->flashdata('notif');
                                if($message){
                             echo '<div class="alert alert-success">' .$message. '</div>';
                                }?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Berkas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <form action="<?php print site_url();?>Berkas/cari" method=POST>
                <input type=submit value="Cari NIK Anda">
                <input type="text" name=cari> 
            </form><br>

              <table id="example1" align="center" class="table table-bordered table-striped">
                <thead>
                                        <tr>
                                            <th><div align="center">No</div></th>
                                            <th><div align="center">NIK</div></th>
                                            <th><div align="center">Surat Ket. Kelahiran</div></th>
                                            <th><div align="center">Fotocopy KK</div></th>
                                            <th><div align="center">Fotocopy Akta Nikah</div></th>
                                            <th><div align="center">KTP</div></th>
                                            <th><div align="center">Surat Ket. RT</div></th>
                                            <th><div align="center">Surat Ket. RW</div></th>
                                            <th><div align="center">Aksi</div></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                          if(isset($berkas)){
                                                foreach($berkas as $row){
                                            ?>
                                        <tr>
                                            <td><div align="center"><?php echo $no++; ?></div></td>
                                            <td><div align="center"><?php echo $row->nik; ?></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->srt_ket_kelahiran) ?>" width="150px" height="100px"><br>
                            <a class="preview" href="<?php echo base_url ('uploads/'.$row->srt_ket_kelahiran); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ftcopy_kk) ?>" width="150px" height="100px"><br>
                            <a class="preview" href="<?php echo base_url ('uploads/'.$row->ftcopy_kk); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ftcop_aktanikah) ?>" width="150px" height="100px"><br>
                            <a class="preview" href="<?php echo base_url ('uploads/'.$row->ftcop_aktanikah); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->ktp) ?>" width="150px" height="100px"><br>
                            <a class="preview" href="<?php echo base_url ('uploads/'.$row->ktp); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->srt_ket_rt) ?>" width="150px" height="100px"><br>
                            <a class="preview" href="<?php echo base_url ('uploads/'.$row->srt_ket_rt); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></div></td>
                                            <td><div align="center"><img src="<?php echo base_url('uploads/'.$row->srt_ket_rw) ?>" width="150px" height="100px"><br>
                            <a class="preview" href="<?php echo base_url ('uploads/'.$row->srt_ket_rw); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a></div></td>

                                            <td class="center"><div align="center">
                            <a href="<?php echo site_url('Berkas/editberkas/'.$row->id_berkas)?>" type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Edit Berkas"><i class="fa fa-edit"></i></a></div></td>
                                        </tr>
                                    <?php }
                                             }
                                                ?>
                                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

        </div>
      </section>

      <!-- <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline dev-icons">
            <li class="list-inline-item">
              <i class="fab fa-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-css3-alt"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-js-square"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-angular"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-react"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-node-js"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Interests</h2>
          <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
          <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
        </div>
      </section>

      <hr class="m-0">

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Certifications</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Google Analytics Certified Developer</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Mobile Web Specialist - Google Certification</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              2<sup>nd</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - James Buchanan High School - Hackathon 2006</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              3<sup>rd</sup>
              Place - James Buchanan High School - Hackathon 2005</li>
          </ul>
        </div>
      </section> -->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/loket/vendor/jquery/jquery.min.js"></script>
    <script src="assets/loket/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/loket/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/loket/js/resume.min.js"></script>

  </body>

</html>
