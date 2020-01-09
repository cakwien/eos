<?php
class data{
    
    function login($con,$username,$password)
    {
        $q = mysqli_query($con, "SELECT * FROM user WHERE
			username = '$username' and password = md5('$password')");
		$cek = mysqli_fetch_array($q);
		if(!empty($cek[0]))
		{
			session_start();
			$_SESSION["username"] = $username;
            
			header("location: ?p=admin");
		}
		else
		{
			echo '
			<script>
				alert("Login Gagal.. Username / Password tidak cocok...");
				window.location.href="";
			</script>
			';
		}
    }
    
    function infouser($con)
	{
		$aktif = $_SESSION['username'];
        $query = mysqli_query($con,"SELECT * from user WHERE username = '$aktif'");
		return $query->fetch_array(MYSQLI_ASSOC);
    }
    
   function daftar($con,$nopeserta,$nama,$email,$jeniskelamin,$tplahir,$tglahir,$alamat,$telp,$sekolah,$kelas,$pendamping,$telpendamping,$tgldaftar,$tf,$tmp_files)
   {
      $cek=mysqli_query($con,"select * from peserta where nama='$nama' && email='$email'");
       $cek2=mysqli_fetch_array($cek);
       if ($cek2 > 0)
       {
          echo '<script>alert("Data Anda Sudah Terdaftar !");window.location.href="";</script>';
       }
       else
       {
           $q=mysqli_query($con,"insert into peserta value('','$nopeserta','$nama','$email','$jeniskelamin','$tplahir','$tglahir','$alamat','$telp','$sekolah','$kelas','$pendamping','$telpendamping','$tgldaftar','$tf')");
       if ($q)
       {
           move_uploaded_file($tmp_files, 'img/tf/'.$nopeserta.'.jpg');
           $np=$nopeserta;
          echo '<script>alert("Pendaftaran Berhasil, Sampai Jumpa di perlombaan");window.location.href="?p=cetak&id='.$np.'";</script>';
       }else
       {
            echo '<script>alert("Pendaftaran GAGAL !");window.location.href="";</script>';
       }
           
           
       }
       
       
      
   }
    
    function tampil($con,$id)
    {
        $q=mysqli_query($con,"select * from peserta where nopeserta='$id'");
        $dt=mysqli_fetch_array($q);
        return $dt; 
    }
    
    
        
        
}
?>