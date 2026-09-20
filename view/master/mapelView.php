<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?= base_url() ?>assets/tabel.css?v=<?= time() ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<div class="content">
    <h2 align="center">DAFTAR DATA MATKUL</h2>
    <table class="simple-table">
        <tr><td colspan="9"><a href="<?=base_url('MapelController/tambahMapel')?>" class="btn">Tambah Data</a></td></tr>
        <tr>
        <th>No.</th>                        <th>Kode Mapel</th>
        <th>Nama Mapel</th>                 <th>Aksi</th>
        </tr>
            <?php
                $i=1;
                foreach($datamapel as $mapel){
            ?>
                <tr>
                    <td><?= $i++ ?></td>                        <td><?= $mapel['kdmapel']?></td>
                    <td><?= $mapel['nmmapel']?></td>              
                    <td>
                        <a href="<?=base_url('MapelController&method=ubah&kdmapel=' . $mapel['kdmapel']); ?>" class="btnubah">Ubah</a>
                        <a href="<?=base_url('MapelController&method=hapus&kdmapel=' . $mapel['kdmapel']); ?>" class="btnhapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
</div>
</body>
</html>