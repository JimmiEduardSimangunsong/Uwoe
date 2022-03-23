<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Pegawai</h2>
<a class="tombol" href="?hal=pegawai_tambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Jabatan</th>
         <th>Keterangan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai ASC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><img src="gambar/<?= $data['foto'] ?>" width="100"></td>
         <td><?= $data['nama_pegawai'] ?></td>
         <td><?= $data['jenis_kelamin'] ?></td>
         <td><?= $data['tgl_lahir'] ?></td>
         <td><?= $data['nama_jabatan'] ?></td>
         <td><?= $data['keterangan'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>