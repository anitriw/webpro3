<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<style type="text/css">
.table-data{
 width: 100%;
 border-collapse: collapse;
 }
 .table-data tr th,
 .table-data tr td{
 border:1px solid black;
 font-size: 11pt;
 font-family:Verdana;
 padding: 10px 10px 10px 10px;
 }
 h3{
 font-family:Verdana;
 }
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
<script type="text/javascript">
window.print();
</script>
</body>
</html>
