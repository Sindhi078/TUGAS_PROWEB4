<?php
session_start();
$user = $_POST["inEmail"];
$pass =$_POST["inPassword"];
//=========================
$dbuser = "admin@gmail.com";
$dbpass = "admin123";
//=========================
if($user == $dbuser && $pass = $dbpass){
?>
   <script>
       window.location="tambahan.php";
    </script>
 <?php
}else{
    if(isset($_SESSION["gagal"])){
        $_SESSION["gagal"]++;
    }else{
        $_SESSION["gagal"]=1;
    }
    header("location:index.php");
}

