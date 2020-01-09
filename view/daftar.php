<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>....</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="shortcut icon" href="img/smansa.png"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="plugins/font.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
   <center> <img src="img/mlw.png" width="80" height="80"> </center>
  <div class="login-logo">
    <b>8th </b><br>ENGLISH OLYMPIAD of SMK NEGERI 1 BANYUWANGI<br>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan isi data diri anda...</p>
     

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group has-feedback">
          <label> Nama Lengkap :</label>
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
        
      <div class="form-group has-feedback">
    <label> Jenis Kelamin / Gender :</label>
        <select name="jeniskelamin" class="form-control">
             <option value="L">Laki-Laki</option>
             <option value="P">Perempuan</option>
             </select>
      </div>
        
         <div class="form-group has-feedback">
          <label> Tempat Kelahiran :</label>
        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tplahir" required>
        <span class="glyphicon glyphicon-tag form-control-feedback"></span>
      </div>
        
         <div class="form-group has-feedback">
         <label> Tanggal Lahir :</label>
        <input type="date" class="form-control" placeholder="Tgl Lahir" name="tglahir" required>
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>
        
        
        
        <div class="form-group has-feedback">
            <label>Alamat Rumah :</label>
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
        
        <div class="form-group has-feedback">
            <label>No HP :</label>
        <input type="text" class="form-control" placeholder="No. HP / WA" name="hp" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
        
        <div class="form-group has-feedback">
            <label>Asal Sekolah :</label>
        <input type="text" class="form-control" placeholder="No. HP / WA" name="hp" required>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
        
         <div class="form-group has-feedback">
        <label>Kelas :</label>
             <select name="agama" class="form-control">
             <option value="VII">VII</option>
             <option value="VIII">VIII</option>
             <option value="IX">IX</option>
             </select>
      </div>
        
        
        
        <div class="form-group has-feedback">
            <label>Nama Pendamping :</label>
        <input type="text" class="form-control" placeholder="Nama Pendamping Peserta" name="fb" required>
        <span class="fa fa-user form-control-feedback"></span>
      </div>
        
        <div class="form-group has-feedback">
            <label>No. Telp. Pendamping :</label>
        <input type="text" class="form-control" placeholder="No Telp/WA Pendamping " name="ig" required>
        <span class="fa fa-phone form-control-feedback"></span>
      </div>
        
             
        <div class="form-group has-feedback">
            <label>Upload bukti transfer biaya pendaftaran :</label>
        <input type="file" class="form-control"  name="poto">
      </div>
        
        
        
      <div class="row">
 
        <!-- /.col -->
        <div class="col-xs-12">
            
            <label><input name="setuju" type="checkbox" required> Saya mendaftarkan diri menjadi peserta 8th ENGLISH OLYMPIAD of SMKN 1 BANYUWANGI serta siap mematuhi segala peraturan yang telah ditentukan oleh panitia</label>
            <input type="submit" value="DAFTARKAN DIRI SAYA !" class="btn btn-success btn-block btn-flat" name="submit">
        </div>
          
          
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->

   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->

</body>
</html>
