<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>assets/login.css">
    <title>LOGIN PAGE</title>
</head>
<body>

<?php if(isset($cek) && $cek == 1){ ?>
    <script type="text/javascript">alert('Data Salah, Anda Dilarang Masuk!!')</script>
<?php } ?>

    <form method="post" action="<?= base_url('LoginController/datalogin') ?>">
        <h2>L O G I N</h2>
        <input type="email" name="emailpgn" required placeholder="Email Pengguna">
        <input type="password" name="passpgn" required placeholder="Password">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>