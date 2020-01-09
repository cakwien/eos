<?php

date_default_timezone_set('Asia/Jakarta');

if(!empty($_GET["p"]))
{
	$p = strtolower($_GET["p"]);

	if($p == "login")
	{
		//PROSES LOGIN
		if (!empty($_POST["username"]) && !empty($_POST["password"])) 
		{
			$user = $_POST["username"];
			$pass = $_POST["password"];
            $data -> login($con,$user,$pass);
		}
		include("view/login.php");
	}

    else if ($p == "admin")
    {
        
        include("view/admin.php");
        
    }
    else if ($p=="logout")
    {
        session_start();
        session_destroy();
        header("Location:?p=login");
    }
    
    else if($p=="inputanggota")
    {
        if (!empty($_POST['simpan']))
        {
            $nama=$_POST['nama'];
            $panggil=$_POST['panggil'];
            $tplahir=$_POST['tplahir'];
            $tglahir=$_POST['tglahir'];
            $gender=$_POST['gender'];
            $alamat=$_POST['alamat'];
            $regional=$_POST['regional'];
            $agama=$_POST['agama'];
            $hp=$_POST['hp'];
            $fb=$_POST['fb'];
            $ig=$_POST['ig'];
            $email=$_POST['email'];
            $motivasi=$_POST['motivasi'];
            $poto=$_FILES['poto']['name'];
			$tmp_files=$_FILES['poto']['tmp_name'];
            $input=$data->spanggota($con,$nama,$panggil,$tplahir,$tglahir,$gender,$alamat,$regional,$agama,$hp,$fb,$ig,$email,$motivasi,$poto,$tmp_files);
        }
        include("view/admin.php");
    }
    
    else if ($p== md5("daftar"))
    {
        if (!empty($_POST['submit']))
        {
            $nopeserta=$_POST['nopeserta'];
            $nama=$_POST['nama'];
            $jeniskelamin=$_POST['jeniskelamin'];
            $tplahir=$_POST['tplahir'];
            $tglahir=$_POST['tglahir'];
            $alamat=$_POST['alamat'];
            $telp=$_POST['telp'];
            $sekolah=$_POST['sekolah'];
            $kelas=$_POST['kelas'];
            $pendamping=$_POST['pendamping'];
            $telpendamping=$_POST['telpendamping'];
            $tgldaftar=date('Y-m-d H:i:s');
            $tf=$_FILES['tf']['name'];
            $tmp_files=$_FILES['tf']['tmp_name'];                
            $input=$data->spanggota($con,$nama,$panggil,$tplahir,$tglahir,$gender,$alamat,$regional,$agama,$hp,$fb,$ig,$email,$motivasi,$poto,$tmp_files);
        }
        include("view/daftar.php");
    }
    
    else if ($p=="daftar-anggota")
    {
        include("view/admin.php");
    }
    
    else if ($p==md5("daftareos"))
    {
        
        if(!empty($_POST['daftar']))
        {
            $nopeserta=$_POST['nopeserta'];
            $nama=$_POST['nama'];
            $email=$_POST['email'];
            $jeniskelamin=$_POST['jeniskelamin'];
            $tplahir=$_POST['tplahir'];
            $tgl=$_POST['tgl'];
            $bln=$_POST['bln'];
            $thn=$_POST['thn'];
            $tglahir=$tgl." ".$bln." ".$thn;
            $alamat=$_POST['alamat'];
            $telp=$_POST['telp'];
            $sekolah=$_POST['sekolah'];
            $kelas=$_POST['kelas'];
            $pendamping=$_POST['pendamping'];
            $telpendamping=$_POST['telpendamping'];
            $tgldaftar=date('Y-m-d H:i:s');
            $tf=$_FILES['tf']['name'];
            $tmp_files=$_FILES['tf']['tmp_name'];  
            $input=$data->daftar($con,$nopeserta,$nama,$email,$jeniskelamin,$tplahir,$tglahir,$alamat,$telp,$sekolah,$kelas,$pendamping,$telpendamping,$tgldaftar,$tf,$tmp_files);
        }
        include("view/pendaftaran.php");
    }
    
    else if ($p=="cetak")
    {
        $id=$_GET['id'];
        include("view/cetak.php");
    }
    
    else 
    {
       include ("view/404.php");
    }
}
else
{
    include("awal.php");
}