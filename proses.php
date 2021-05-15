<?php
//memulai session
session_start();
 
//tampung data dari form
$username = $_POST['email'];
$password = $_POST['password'];
 
//cek login
if($username == $user && MD5($password) == $pass)
{
   //set session
   $_SESSION['login'] = TRUE;
   //cek remember me
   if (isset($_POST['remember']))
   {
      //set waktu saat ini
      $time = time();
      //set cookie
      setcookie('login', $user, $time + 3600);
   }
   //redirect ke halaman utama
   header('location:./welcome.php');
   exit();
} else {
   header('location:./index.php');
}
?>