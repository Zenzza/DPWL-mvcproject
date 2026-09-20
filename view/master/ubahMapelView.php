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
            <form method="post" action="<?= base_url('MapelController/ubahMapel')?>">
                Kode Mapel <input readonly type="text" name="kdmapel" maxlength="10" value="<?=htmlspecialchars($ambilMapel['kdmapel'])?>">
                Nama Mapel <input required type="text" name="nmmapel" maxlength="100" value="<?=htmlspecialchars($ambilMapel['nmmapel'])?>">
                <button type="submit">Ubah</button>
                &#8592; <a href="<?= base_url('MapelController/index')?>">Batal</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>