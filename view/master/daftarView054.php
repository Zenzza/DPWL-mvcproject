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
    <h2 align="center">DATA RUANGAN</h2>
    <table class="simple-table">
        <tr><td colspan="9"><a href="<?=base_url('RuangController054/tambahRuang')?>" class="btn">Tambah Data</a></td></tr>
        <tr>
        <th>No.</th>                        <th>Kode Ruang</th>
        <th>Nama Ruang</th>                 <th>Status Ruang</th>
        <th>Aksi</th>
        </tr>
            <?php
                $i=1;
                foreach($dataruang as $ruang){
            ?>
                <tr>
                    <td><?= $i++ ?></td>                        <td><?= $ruang['koderuang054']?></td>
                    <td><?= $ruang['namaruang054']?></td>       <td><?= $ruang['status054']?></td>
                    <td>
                        <a href="<?=base_url('RuangController054&method=ubah&koderuang054=' . $ruang['koderuang054']); ?>" class="btnubah">Ubah</a>
                        <a href="<?=base_url('RuangController054&method=hapus&koderuang054=' . $ruang['koderuang054']); ?>" class="btnhapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
</div>
</body>
</html>