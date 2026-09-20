<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Matakuliah</title>
</head>
<body>
    <h2>Daftar Matakuliah</h2>
        <table border="1" >
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Kode Matkul</td>
                    <td>Nama Matkul</td>
                    <td>SKS</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    foreach ($datamtk as $mtk) {
                        echo "<tr>";
                        echo "<td>".$i++.".</td>";
                        echo "<td>".$mtk['kode']."</td>";
                        echo "<td>".$mtk['nama']."</td>";
                        echo "<td>".$mtk['sks']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>
