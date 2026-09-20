<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url()?>assets/page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<div class="content">
    <div class="container">
        <div class="content">
            <h2>UBAH DATA GURU</h2>
            <form method="post" action="<?= base_url('GuruController/ubahGuru')?>">
                NIP <input readonly type="text" name="nip" maxlength="10" value="<?=htmlspecialchars($ambilGuru['nip'])?>">
                Nama Guru <input required type="text" name="nmguru" maxlength="100" value="<?=htmlspecialchars($ambilGuru['nmguru'])?>">
                Tempat Lahir<input required type="text" name="tmptlahir" maxlength="50" value="<?=htmlspecialchars($ambilGuru['tmptlahir'])?>">
                Tanggal Lahir<input type="date" name="tgllahir" value="<?=htmlspecialchars($ambilGuru['tgllahir'])?>">
                Jenis Kelamin<select required name="jenkel" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki" <?=($ambilGuru['jenkel'] == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?=($ambilGuru['jenkel'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                </select>
                Pendidikan Terakhir<select required name="pendidikanakhir" required>
                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                    <option value="SMA" <?=($ambilGuru['pendidikanakhir'] == 'SMA') ? 'selected' : '' ?>>SMA</option>
                    <option value="S1" <?=($ambilGuru['pendidikanakhir'] == 'S1') ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?=($ambilGuru['pendidikanakhir'] == 'S2') ? 'selected' : '' ?>>S2</option>
                    <option value="S3" <?=($ambilGuru['pendidikanakhir'] == 'S3') ? 'selected' : '' ?>>S3</option>
                </select>
                Jurusan<select required name="jurusan" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Sistem Informasi" <?=($ambilGuru['jurusan'] == 'Sistem Informasi') ? 'selected' : '' ?>>Sistem Informasi</option>
                    <option value="Teknik Informatika"<?=($ambilGuru['jurusan'] == 'Teknik Informatika') ? 'selected' : '' ?>>Teknik Informatika</option>
                    <option value="IPA" <?=($ambilGuru['jurusan'] == 'IPA') ? 'selected' : '' ?>>IPA</option>
                    <option value="Bahasa Inggris" <?=($ambilGuru['jurusan'] == 'Bahasa Inggris') ? 'selected' : '' ?>>Bahasa Inggris</option>
                </select>
                <button type="submit">Ubah</button>
                &#8592; <a href="<?= base_url('GuruController/index')?>">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>