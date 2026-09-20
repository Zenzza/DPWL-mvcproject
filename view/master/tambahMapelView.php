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
            <h2>TAMBAH DATA MAPEL</h2>
            <form method="post" action="<?= base_url('MapelController/simpanMapel')?>">
                Kode Mapel <input required type="text" name="kdmapel" maxlength="10">
                Nama Mapel <input required type="text" name="nmmapel" maxlength="100">
                <button type="submit">Simpan</button>
                &#8592; <a href="<?= base_url('MapelController/index')?>">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>