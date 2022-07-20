<h3> Tambah Data </h3>

<form action= "" method="post">
<table>
    <tr>
        <td width="130"> Nama Pegawai</td>
        <td><input type="text" name="nama_akun"></td>
    </tr>
    <tr>
        <td>Usia Pegawai</td>
        <td><input type="text" name="usia_akun"></td>
    </tr>
    <tr>
        <td>Asal Pegawai</td>
        <td><input type="text" name="asal_akun"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>


<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into pegawai set
    nama_akun = '$_POST[nama_akun]',  
    usia_akun = '$_POST[usia_akun]',
    asal_akun = '$_POST[asal_akun]'");

    echo "Data Akun Telah Tersimpan";
}

?>