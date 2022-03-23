<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Jabatan</h2>
<form method="post" action="?hal=jabatan_insert">
   
   <div class="form-group">
      <label for="nama">Nama</label>   
      <div class="input"><input type="text" id="nama" name="nama"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
   
</form>