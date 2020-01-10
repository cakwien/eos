<?php

class data
{
    function login($con,$username,$password)
    {
        $q = mysqli_query($con, "SELECT * FROM user WHERE
			username = '$username' and password = md5('$password')");
		$cek = mysqli_fetch_array($q);
		if(!empty($cek[0]))
		{
			session_start();
			$_SESSION["username"] = $username;
           
            
			header("Location:?p=admin");
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
    
    
    function tampil($con)
    {
        $list=array();
        $q=mysqli_query($con,"select * from peserta");
        while($dt=mysqli_fetch_array($q))
        {
            $list[]=$dt;
        }
        return $list;
    }
    
    function jumdaftar($con)
    {
        $q=mysqli_query($con,"select count(idpeserta) as jumlah from peserta");
        $dt=mysqli_fetch_array($q);
        return $dt;
    }
    
    function cekbayar($con,$id)
    {
        $q=mysqli_query($con,"select tf from peserta where idpeserta='$id'");
        $c=mysqli_fetch_array($q);
        if ($c > 0)
        {
           $note='<a class="btn-sm btn-success">Verified</a>';
        }else
        {
            $note='<a class="btn-sm btn-danger">Not Verified</a>';
        }
        return $note;
            
    }
    
    function cekbayar2($con,$id)
    {
        $q=mysqli_query($con,"select tf from peserta where idpeserta='$id'");
        $c=mysqli_fetch_array($q);
        if ($c > 0)
        {
           $note='<i class="fa fa-check-square"></i>';
        }else
        {
            $note='<i class="fa fa-close"></i>';
        }
        return $note;
            
    }
    
    function bykelas($con,$kelas)
    {
        $q=mysqli_query($con,"select count(kelas) as jumlah from peserta where kelas = '$kelas'");
        $dt=mysqli_fetch_array($q);
        return $dt; 
    }
}

?>