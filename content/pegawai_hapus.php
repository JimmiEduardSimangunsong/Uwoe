<?php
   if(!defined('INDEX')) die("");

   if(file_exists("gambar/$_GET[foto]")) unlink("gambar/$_GET[foto]");
   $query = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
   }
?>