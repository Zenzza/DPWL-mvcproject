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
            <h2>TAMBAH DATA GURU</h2>
            <form method="post" action="<?= base_url('GuruController/simpanGuru')?>">
                NIP <input required type="text" name="nip" maxlength="10">
                Nama Guru <input required type="text" name="nmguru" maxlength="100">
                Tempat Lahir<input required type="text" name="tmptlahir" maxlength="50">
                Tanggal Lahir<input type="date" name="tgllahir">
                Jenis Kelamin<select required name="jenkel" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                Pendidikan Terakhir<select required name="pendidikanakhir" required>
                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
                Jurusan<select required name="jurusan" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="IPA">IPA</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                </select>
                <button type="submit">Simpan</button>
                &#8592; <a href="<?= base_url('GuruController/index')?>">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>