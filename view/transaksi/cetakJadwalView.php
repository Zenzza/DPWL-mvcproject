<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url()?>assets/tabel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAFTAR JADWAL MENGAJAR</title>
</head>
<body>
<h2 align="center">DAFTAR JADWAL MENGAJAR</h2>
<table class="simple-table">
<tr><td colspan="6">    NIP: <?= htmlspecialchars($ambiljadwal[0]['nip']) ?></br>
                        Nama Guru: <?= htmlspecialchars($ambiljadwal[0]['nmguru']) ?>
    </td>
</tr>
<tr>
    <th>No.</th> <th>Kode Mapel</th> <th>Nama Mapel</th> <th>Kelompok</th> <th>Jam</th> <th>Hari</th>
</tr>
    <?php    
    $i=1;
    foreach($ambiljadwal as $cetjad){
    ?>
        <tr>
            <td ><?= $i++ ?></td>
            <td><?= $cetjad['kdmapel']?></td> <td><?= $cetjad['nmmapel']?></td> <td><?= $cetjad['kelompok']?></td> <td><?= $cetjad['jam']?></td>
            <td><?= $cetjad['hari']?></td>
        </tr>
        <?php } ?>
    <tr>
        <td colspan="6" style="text-align: right; margin-top: 38px; font-style: italic;">
            Pangkalpinang, <?= date('d-m-Y') ?><br>
            Ka. Taa Usaha<br>
            Mr. XYZ
        </td>
    </tr>
</table>
</body>
</html>
<script>
    window.print();
    window.onafterprint = function() { 
        window.close();
    };
   
</script>
