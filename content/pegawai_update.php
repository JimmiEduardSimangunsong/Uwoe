<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   $error = "";
   if($foto == ""){
      $query = mysqli_query($con, "UPDATE pegawai SET
         nama_pegawai = '$_POST[nama]',
         jenis_kelamin = '$_POST[jk]',
         tgl_lahir = '$_POST[tanggal]',
         id_jabatan = '$_POST[jabatan]',
         keterangan = '$_POST[keterangan]'
      WHERE id_pegawai='$_POST[id]'");
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 1000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 1MB)!";
      }else{
         $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$_POST[id]'");
         $data = mysqli_fetch_array($query);
         if(file_exists("gambar/$data[foto]")) unlink("gambar/$data[foto]");

         move_uploaded_file($lokasi, "gambar/".$foto);
         $query = mysqli_query($con, "UPDATE pegawai SET
            foto = '$foto',
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tgl_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
         WHERE id_pegawai='$_POST[id]'");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_edit&id=$_POST[id]'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
   }
?>