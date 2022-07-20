<h3> Data Barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Pegawai</th>
        <th>Usia Pegawai</th>
        <th>Asal Pegawai</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from pegawai");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama_akun]</td>
            <td>$tampil[usia_akun]</td>
            <td>$tampil[asal_akun]</td>
        </tr>";

        $no++;
    }

    ?>
</table>