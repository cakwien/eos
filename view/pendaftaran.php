<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EOS 8 SMKN 1 BANYUWANGI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
 <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="shortcut icon" href="img/logo.png"/>
    <script type="text/javascript" src="build/js/my.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet"
        href="">
</head>


<body class="hold-transition skin-red fixed sidebar-mini">
<section class="content">
      <div class="row">
<div class="col-md-8 col-md-offset-2">        
<div class="box box-info">
    <div class="box-header with-border">
              <img src="img/bgeos.jpeg" class="img-responsive">
            </div>
           
            <div class="box-header with-border">
              <center><h3 class="box-title">Pendaftaran 8th ENGLISH OLYMPIAD OF SMKN 1 BANYUWANGI</h3></center>
               
            </div>
     <div class="box-header with-border">
             <a href="?p=snk" class="btn btn-block btn-info">SYARAT DAN KETENTUAN</a>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Nama Lengkap :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="text" class="form-control"  placeholder="Nama Lengkap" name="nama" value="" required>
                    <input type="hidden" class="form-control"  name="tgldaftar" value="<?php echo date('Y-m-d H:i:s'); ?>" required>
                    <input type="hidden" class="form-control"  name="nopeserta" value="<?php echo nopes($con,"","5");?>" required>
                </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Alamat Email :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="email" class="form-control"  placeholder="Email" name="email" value="" required>
                  </div>
                </div>
                  
                   
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Jenis Kelamin :</label>
                  <div class="col-md-10 col-sm-4">
                   <label><input type="radio" name="jeniskelamin" value="L"> Laki-Laki</label>
                       <label><input type="radio" name="jeniskelamin" value="P"> Perempuan</label>
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Tempat Lahir :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="text" class="form-control"  placeholder="Tempat Kelahiran" name="tplahir" value="" required>
                  </div>
                </div>

              
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Tanggal Lahir :</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="tgl">
                          <option value=""> Tanggal </option>
                        <?php for ($i=1; $i<=31; $i++)
                        {
                        ?>
                          <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                        <?php } ?>  
                          
                          
                          </select>
                  </div>
                      <div class="col-sm-3">
                    <select class="form-control" name="bln">
                          <option value=""> Bulan </option>
                          <option value="Januari"> Januari </option>
                          <option value="Februari"> Februari </option>
                          <option value="Maret"> Maret </option>
                          <option value="April"> April </option>
                          <option value="Mei"> Mei </option>
                          <option value="Juni"> Juni </option>
                          <option value="Juli"> Juli </option>
                          <option value="Agustus"> Agustus </option>
                          <option value="September"> September </option>
                          <option value="Oktober"> Oktober </option>
                          <option value="Nopember"> Nopember </option>
                          <option value="Desember"> Desember </option>
                          
                          </select>
                  </div>
                      <div class="col-sm-2">
                          
                     <select class="form-control" name="thn">
                          <option value=""> Tahun </option>
                        <?php 
                         $th=date('Y');
                         
                         for ($i=$th - 25; $i<=$th; $i++)
                        {
                        ?>
                          <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                        <?php } ?>  
                          
                          
                          </select>
                          
                  </div>
                </div>
                 
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Alamat :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="text" class="form-control"  placeholder="Alamat / Domisili" name="alamat" value="" required>
                  </div>
                </div>
                  
                   <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">No. HP :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="text" class="form-control"  placeholder="No. HP / WA" name="telp" value="" required>
                  </div>
                </div>
                 
                   <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Asal Sekolah :</label>
                  <div class="col-md-5 col-sm-2">
                    <input type="text" class="form-control"  placeholder="SMP Asal" name="sekolah" value="" required>
                  </div>
                    <div class="col-md-5 col-sm-2">
                    <select class="form-control">
                        <option>Kecamatan Sekolah</option>
                        <?php
                        $k=$data->kecamatan($con);
                        foreach ($k as $kec)
                        {
                        ?>
                        <option value="<?php echo $kec['idkecamatan'];?>"><?php echo $kec['kecamatan'];?></option>
                        <?php 
                        } ?>
                        </select>
                  </div>
                </div>
                 
                   <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Kelas :</label>
                  <div class="col-md-10 col-sm-4">
                   <label><input type="radio" name="kelas" value="VII"> VII (Tujuh)</label>
                       <label><input type="radio" name="kelas" value="VIII"> VIII (Delapan)</label>
                       <label><input type="radio" name="kelas" value="IX"> IX (Sembilan)</label>
                  </div>
                </div>
                              
                  
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Nama Pendamping :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="text" class="form-control"  placeholder="Nama Lengkap Guru Pendamping" name="pendamping" value="" required>
                  </div>
                </div>
                  
                 <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">No. Telp. Pendamping :</label>
                  <div class="col-md-10 col-sm-4">
                    <input type="text" class="form-control"  placeholder="No HP / WA" name="telpendamping" value="" required>
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label">Upload Bukti Transfer : </label>
                  <div class="col-md-10 col-sm-4">
                      <input type="file" class="form-control" name="tf" accept="image/*">
                      <label style="font-size:12px; font-style:italic">File Upload yang disarankan berextensi JPG dengan ukuran maksimal 2 MB</label>
                  </div>
                </div>  
                  
                  <div class="form-group">
                  <label class="col-sm-2 col-md-2 control-label"><input type="checkbox" name="setuju" required></label>
                  <div class="col-md-10 col-sm-4">
                     <label>Semua data tersebut benar adanya, saya siap menjadi peserta EOS 8 SMKN 1 BANYUWANGI dan siap mengikuti tata tertib peserta.</label>
                  </div>
                </div>  
                  
                  
                  
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input name="daftar" type="submit" Value="DAFTARKAN DIRI SAYA !" class="btn btn-block btn-success">
                
               
              </div>
         
            </form>
          </div>
</div>


     
    </div>
    
</section>

</body>
