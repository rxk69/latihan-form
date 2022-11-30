<?php
$nama = @$_POST['nama'];
$email = @$_POST['email'];
$alamat = @$_POST['alamat'];
$nomor = @$_POST['nomor'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>table, th, td {
  border:1px solid black;
}
    </style>
</head>
<body>
<table>
  <tr>
    <th>Nama</th>
    <th>email</th>
    <th>alamat</th>
    <th>nomor</th>
  </tr>
  <tr>
    <td><?= $nama ?></td>
    <td><?= $email ?></td>
    <td><?= $alamat ?></td>
    <td><?= $nomor ?></td>
  </tr>
</table>
<script>alert ('Data Sudah Di Input')</script>
</body>
</html>