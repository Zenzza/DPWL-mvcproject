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
        <tr><td colspan="9"><a href="<?=base_url('JadwalController/tambahJadwal')?>" class="btn">Tambah Data</a></td></tr>
        <tr>
        <th>No.</th>                        <th>No. Jadwal</th>
        <th>Tanggal Jadwal</th>             <th>Tahun Ajaran</th>
        <th>Semester</th>                   <th>NIP / Nama Guru</th>
        <th>Aksi</th>
        </tr>
            <?php
                $i=1;
                foreach($ambiljadwal as $jadguru){
            ?>
                <tr>
                    <td><?= $i++ ?></td>                        <td><?= $jadguru['nojadwal']?></td>
                    <td><?= $jadguru['tgljadwal']?></td>        <td><?= $jadguru['thajar']?></td>
                    <td><?= $jadguru['smt']?></td>              <td><?= $jadguru['nip'].'/'.$jadguru['nmguru']?></td>
                    <td>
                        <a href="<?=base_url('JadwalController&method=cetak&nojadwal=' . $jadguru['nojadwal']); ?>" target="_blank" class="btnubah">Cetak Jadwal</a>
                        <a href="<?=base_url('GuruController&method=ubah&nip=' . $guru['nip']); ?>" class="btnubah">Ubah</a>
                        <a href="<?=base_url('GuruController&method=hapus&nip=' . $guru['nip']); ?>" class="btnhapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
</div>
</body>
</html>