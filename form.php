<?php
$nama = @$_POST['nama'];
$email = @$_POST['email'];
$alamat = @$_POST['alamat'];

if ($nama) {
    echo "<strong>Nama  :</strong> {$nama} <br>";
}
if ($email) {
    echo "<strong>Email :</strong> {$email} <br>";
}
if ($alamat) {
    echo "<strong>Alamat:</strong> {$alamat} <br>";
}
?>