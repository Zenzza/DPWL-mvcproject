<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
        <table border="1" >
            <thead>
                <tr>
                    <td>No.</td>
                    <td>NIM</td>
                    <td>Nama Mahasiswa</td>
                    <td>Alamat</td>
                    <td>No.Telp</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    foreach ($datamhs as $mhs) {
                        echo "<tr>";
                        echo "<td>".$i++.".</td>";
                        echo "<td>".$mhs['nim']."</td>";
                        echo "<td>".$mhs['nama']."</td>";
                        echo "<td>".$mhs['alamat']."</td>";
                        echo "<td>".$mhs['notelp']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>
