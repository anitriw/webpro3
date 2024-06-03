<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: Attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires:0"); ?>

</style>
<h3><center>Laporan Data Anggota</center></h3>
<br/>
<table class="table-data">
 <thead>
 <tr><th>No</th>
 <th>Nama Anggota</th>
 <th>Email</th>
 <th>Member Sejak</th>
 <th>Image</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 foreach($laporan as $a){
 ?>
 <tr>
 <th scope="row"><?= $no++; ?></th>
 <td><?= $a['nama']; ?></td>
 <td><?= $a['email']; ?></td>
 <td><?= $a['tanggal_input']; ?></td>
 <td><?= $a['image']; ?></td>
 </tr>
   <?php
  }
  ?>
 </tbody>
</table>
