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
            <h2>TAMBAH DATA RUANGAN</h2>
            <form method="post" action="<?= base_url('RuangController054/simpanRuang')?>">
                Kode Ruangan <input required type="text" name="koderuang054" maxlength="5">
                Nama Ruangan <input required type="text" name="namaruang054" maxlength="30">
                Status Ruangan <select required name="status054" required>
                    <option value="">-- Pilih Status Ruangan --</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
                <button type="submit">Simpan</button>
                &#8592; <a href="<?= base_url('RuangController054/index')?>">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>