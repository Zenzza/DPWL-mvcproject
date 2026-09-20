<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url()?>assets/page.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/tabel.css">
</head>
<body>
<div class="content">
    <div class="container">
        <div class=""content>
            <h2 align="center">Tambah Jadwal Mengajar</h2>
            <form action="<?= base_url('JadwalController/simpanJadwal')?>" method="post" style="width: 600px;">
                No Jadwal       <input type="text" name="nojadwal" value="<?php echo htmlspecialchars($nojadwal)?>" readonly>
                Tanggal Jadwal  <input type="date" name="tgljadwal" value="<?php echo date('Y-m-d')?> required">
                Tahun Ajaran    <input type="text" name="thajar" maxlength="8" value="<?php echo date("Y").'/'.(date('Y') + 1)?>" required>
                Semester        <select name="semester">
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                                </select>
                NIP             <select name="nip">
                                <?php foreach ($dtguru as $nipnmguru){ ?>
                                    <option value="<?= $nipnmguru['nip']?>"><?= $nipnmguru['nmguru'].'('.$nipnmguru['nip'].')' ?></option>
                                <?php } ?>
                                </select>
            <h3>Detail Jadwal</h3>
                <table id="detailTable">
                    <tr>
                        <th>Kode Mapel</th> <th>Kelompok</th> <th>Jam</th> <th>Hari</th> <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="kdmapel[]" style="width:205px;">
                                <?php foreach ($mapel as $dtmapel){ ?>
                                    <option value="<?= $dtmapel['kdmapel'] ?>"><?= $dtmapel['nmmapel'].' ('. $dtmapel['kdmapel'].')' ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><input type="text" name="kelompok[]"></td>
                        <td><input type="text" name="jam[]"></td>
                        <td><input type="text" name="hari[]"></td>
                        <td><button type="button" onclick="hapusBaris(this)">Hapus</button></td>
                    </tr>
                </table>
                <button type="button" onclick="tambahBaris()" class="btnubah">+ Tambah Detail</button>
                <button type="submit">Simpan Data</button>
                </form>

            <script>
            function tambahBaris() {
                var table = document.getElementById("detailTable");
                var row = table.insertRow(-1);

                var kdmapelOptions = `
                    <?php foreach ($mapel as $dtmapel){ ?>
                        <option value="<?= $dtmapel['kdmapel'] ?>"><?= $dtmapel['nmmapel'].' ('.$dtmapel['kdmapel'].')' ?></option>
                    <?php } ?>`;

                row.innerHTML = `
                    <td>
                        <select name="kdmapel[]">
                            ${kdmapelOptions}
                        </select>
                    </td>
                    <td><input type="text" name="kelompok[]"></td>
                    <td><input type="text" name="jam[]"></td>
                    <td><input type="text" name="hari[]"></td>
                    <td><button type="button" onclick="hapusBaris(this)">Hapus</button></td>
                `;
            }
            </script>
        </div>
    </div>
</div>
</body>
</html>