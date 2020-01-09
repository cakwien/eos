<?php
if (!empty($_GET['p']))
{
    $p=strtolower($_GET['p']);
    if ($p=="in")
    {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) 
		{
			$user = $_POST["username"];
			$pass = $_POST["password"];
            $data -> login($con,$user,$pass);
		}
		include("view/login.php");
    }
    
    else if ($p=="admin")
    {
        include('view/admin.php');
    }
    
    else if ($p=="out")
    {
        session_start();
        session_destroy();
        header("Location:?p=in");
    }
    
    else if ($p=="pendaftar")
    {
        include('view/admin.php');
    }
    
    else if ($p=="cetak")
    {
        include("view/cetak.php");
    }
    else if ($p=="ex")
    {
        include("view/export.php");
    }
    
    else
    {
        include("view/404.php");
    }
        
}
else
{
    header('Location:?p=in');
}
?>