<?php
   session_start();
   include "library/config.php";

   $username = $_POST['username'];
   $password = md5($_POST['password']);

   $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
   $data = mysqli_fetch_array($query);
   $jml = mysqli_num_rows($query);

   if($jml > 0){
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      
      header('location: index.php');
   }else{
      echo "<p align='center'>Login Gagal</p>";
      echo "<meta http-equiv='refresh' content='2; url=login.php'>";
   }
?>