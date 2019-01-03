<!DOCTYPE HTML>
<html>
<head>
<title>Pelayanan kependudukan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url();?>/assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url();?>/assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/amcharts.js"></script>  
<script src="<?php echo base_url();?>/assets/admin/js/serial.js"></script>  
<script src="<?php echo base_url();?>/assets/admin/js/light.js"></script> 
<script src="<?php echo base_url();?>/assets/admin/js/radar.js"></script> 
<link href="<?php echo base_url();?>/assets/admin/css/barChart.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url();?>/assets/admin/css/fabochart.css" rel='stylesheet' type='text/css' />
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!--clock init-->
<script src="<?php echo base_url();?>/assets/admin/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="<?php echo base_url();?>/assets/admin/js/skycons.js"></script>

<script src="<?php echo base_url();?>/assets/admin/js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
    // $(function(){
    //   $.ajaxSetup({
    //     type:"POST",
    //     url: "<?php echo base_url('index.php/register/get_data') ?>",
    //     cache: false,
    //   });

    //   $("#province").change(function(){
    //     var value=$(this).val();
    //     if(value>0){
    //       $.ajax({
    //         data:{modul:'regency',id:value},
    //         success: function(respond){
    //           $("#regency").html(respond);
    //         }
    //       })
    //     }
    //   });


    //   $("#regency").change(function(){
    //     var value=$(this).val();
    //     if(value>0){
    //       $.ajax({
    //         data:{modul:'district',id:value},
    //         success: function(respond){
    //           $("#district").html(respond);
    //         }
    //       })
    //     }
    //   });
    // });
    </script>
</head> 
<body>
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
                      <li><a href="<?php echo base_url()?>#">Akta Kelahiran</a></li>
                      <li class="active">Edit Data Akta</li>
                    </ol>
                     </div>
                     
<!-- <?php
 $message = $this->session->flashdata('notif');
    if($message){
        echo '<div class="alert alert-warning">' .$message. '</div>';
    }?> -->
                              
  <!--<script>
    window.print();
</script>-->

    <section class="content-header">
      <h3>Edit Data Akta Kelahiran</h3>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body pad table-responsive">
            <div  class="form-horizontal">

                                   <?php
                                            if(isset($akta)){
                                                foreach($akta as $row){
                                                  $nik = $row->nik;
                                            ?>
          <?php echo form_open_multipart('admin/update/'.$nik)?>
                <br>
                    <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">NIK</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nik" name="nik" rows="2" cols="130,9" value="<?php echo $row->nik; ?>" readonly><?php echo $row->nik; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>  

                 <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Nama Ayah</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nmkpl" name="nmkpl" rows="2" cols="130,9" value="<?php echo $row->nm_kpl_keluarga; ?>" required><?php echo $row->nm_kpl_keluarga; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>  

                 <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Nama Ibu</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nmibu" name="nmibu" rows="2" cols="130,9" value="<?php echo $row->nama_ibu; ?>" required><?php echo $row->nama_ibu; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>  

                 <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Nama Lengkap</h4>
                    </div>
                    <div class="box-body pad">
                      <textarea id="nm" name="nm" rows="2" cols="130,9" value="<?php echo $row->nm_lengkap; ?>" required><?php echo $row->nm_lengkap; ?></textarea>
                    </div>
                  </div>
                  </div>
                </div>

                <!-- <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Jenis Kelamin</h4>
                    </div>
                    <div class="box-body pad">
                      <input type="text" id="jk" value="<?php echo $row->jk; ?>" name="jk" required><br>
                      <input type="radio" id="jk" value="Laki - Laki" name="jk" ><label class="light">Laki - Laki</label><br>
                      <input type="radio" id="jk" value="Perempuan" name="jk" ><label class="light">Perempuan</label>
                    </div>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Tempat Dilahirkan</h4>
                    </div>
                    <div class="box-body pad">
                      <input type="text" id="ttl" value="<?php echo $row->tmpt_dilahirkan; ?>" name="ttl" required><br>
                      <input type="radio" id="ttl" value="Rumah Sakit" name="ttl" ><label class="light">Rumah Sakit</label><br>
                      <input type="radio" id="ttl" value="Puskesmas" name="ttl" ><label class="light">Puskesmas</label><br>
                      <input type="radio" id="ttl" value="Poliklinik" name="ttl" ><label class="light">Poliklinik</label><br>
                      <input type="radio" id="ttl" value="Rumah" name="ttl" ><label class="light">Rumah</label><br>
                      <input type="radio" id="ttl" value="Lainnya" name="ttl" ><label class="light">Lainnya</label>
                    </div>
                  </div>
                  </div>
                </div> -->

                 <!-- <div class="form-group">
            <label class="col-sm-2 control-label">Provinsi</label>
            <div class="col-sm-10">
              <select class="form-control" name="province" id="province">
                <option value='0'>--Pilih Provinsi--</option>
                <?php foreach($provinces as $province) {
                  echo "<option value='$province->id'>$province->name</option>";
                } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Kabupaten/Kota</label>
            <div class="col-sm-10">
              <select class="form-control" name="regency" id="regency">
                <option value='0'>--Pilih Kabupaten/Kota--</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Kecamatan</label>
            <div class="col-sm-10">
              <select class="form-control" name="district" id="district">
                <option value='0'>--Pilih Kecamatan--</option>
              </select>
            </div>
          </div><br>

                <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <h4 class="box-title">Tanggal Lahir</h4>
                    </div>
                    <div class="box-body pad">
                      <input id="tgl" name="tgl" value="<?php echo $row->tgl_lahir; ?>" class="form-control" type="date" rows="1" cols="73" placeholder="Tanggal Lahir" required></input>
                    </div>
                  </div>
                  </div>
                </div>
                                        
                  <div class="form-group">
                  <div class="col-md-12">
                  <div class="box box-info">
                    <div class="box-header">
                      <!-- /. tools -->
                    </div> 
                    <!-- /.box-header -->
                    <div align="center">
                      <button type="submit" name="submit" class="btn btn-danger">Simpan</button>
                    </div>
                    <?php echo form_close(); ?>
                  </div>
                  </div>
          <!-- /.box -->
        </div>
                  <?php }
                                             }
                                                ?>
</div>
</div>
</div>
</section>
                   <!--footer section start-->
                    </section>
                    <!-- <?php $this->load->view('admin/footer') ?> -->