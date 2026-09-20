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
    <h2 align="center">DAFTAR DATA GURU</h2>
    <table class="simple-table">
        <tr><td colspan="9"><a href="<?=base_url('GuruController/tambahGuru')?>" class="btn">Tambah Data</a></td></tr>
        <tr>
        <th>No.</th>                        <th>NIP</th>
        <th>Nama Guru</th>                  <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>              <th>JenKel</th>
        <th>Pendidikan Terakhir</th>        <th>Jurusan</th>
        <th>Aksi</th>
        </tr>
            <?php
                $i=1;
                foreach($dataguru as $guru){
            ?>
                <tr>
                    <td><?= $i++ ?></td>                        <td><?= $guru['nip']?></td>
                    <td><?= $guru['nmguru']?></td>              <td><?= $guru['tmptlahir']?></td>
                    <td><?= $guru['tgllahir']?></td>            <td><?= $guru['jenkel']?></td>
                    <td><?= $guru ['pendidikanakhir']?></td>    <td><?= $guru['jurusan']?></td>
                    <td>
                        <a href="<?=base_url('GuruController&method=ubah&nip=' . $guru['nip']); ?>" class="btnubah">Ubah</a>
                        <a href="<?=base_url('GuruController&method=hapus&nip=' . $guru['nip']); ?>" class="btnhapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
</div>
</body>
</html>