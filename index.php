<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: tahoma, arial}
        table {border-collapse: collapse; width: 100%; margin-bottom: 20px;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
        th {background: #FDB0C0; font-size: 12px; border-color: #AEC6CF}
        h1, h3 {text-align: center}
    </style>
</head>
<body>
    <h1>Koperasi Sejahtera</h1>

    <h3>Tabel anggota</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Anggota</th>
                <th>nama</th>
                <th>alamat</th>
                <th>tanggal_lahir</th>
                <th>nomor_telepon</th>

            </tr>
        </thead>
        <tbody>
            <?php include 'koneksi.php'; ?>
            <?= $sql = "SELECT * FROM anggota";
            $query = mysqli_query($koneksi, $sql);
            while($row = mysqli_fetch_array($query)) 
            {?>
            <tr>
                <td><?php echo $row['ID_Anggota']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['tanggal_lahir']; ?></td>
                <td><?php echo $row['nomor_telepon']; ?></td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Pegawai</th>
                <th>nama_pegawai</th>
                <th>jabatan</th>
                <th>nomor_telepon</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['nama_pegawai']; ?></td>
                <td><?php echo $row['jabatan']; ?></td>
                <td><?php echo $row['nomor_telepon']; ?></td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Simpanan</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Simpanan</th>
                <th>ID_Anggota</th>
                <th>ID_Pegawai</th>
                <th>tanggal_simpanan</th>
                <th>jumlah_simpanan</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM simpanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Simpanan']; ?></td>
                <td><?php echo $row['ID_Anggota']; ?></td>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['tanggal_simpanan']; ?></td>
                <td><?php echo $row['jumlah_simpanan']; ?></td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pinjaman</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Pinjaman</th>
                <th>ID_Anggota</th>
                <th>ID_Pegawai</th>
                <th>ID_Jenis_Pinjaman</th>
                <th>tanggal_pinjaman</th>
                <th>jumlah_pinjaman</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pinjaman';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Pinjaman']; ?></td>
                <td><?php echo $row['ID_Anggota']; ?></td>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['ID_Jenis_Pinjaman']; ?></td>
                <td><?php echo $row['tanggal_pinjaman']; ?></td>
                <td><?php echo $row['jumlah_pinjaman']; ?></td>


            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    
    <h3>Tabel Jenis Pinjaman</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Jenis_Pinjaman</th>
                <th>nama_jenis_pinjaman</th>
                <th>bunga</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM jenis_pinjaman';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Jenis_Pinjaman']; ?></td>
                <td><?php echo $row['nama_jenis_pinjaman']; ?></td>
                <td><?php echo $row['bunga']; ?></td>


            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel keanggotaan</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Keanggotaan</th>
                <th>ID_Anggota</th>
                <th>status_keanggotaan</th>
                <th>tanggal_bergabung</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM keanggotaan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Keanggotaan']; ?></td>
                <td><?php echo $row['ID_Anggota']; ?></td>
                <td><?php echo $row['status_keanggotaan']; ?></td>
                <td><?php echo $row['tanggal_bergabung']; ?></td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>