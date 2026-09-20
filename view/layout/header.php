<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/menu.css?v=<?= time() ?>">
    <title>SISTEM INFORMASI JADWAL GURU</title>
</head>

<body style="background-color:white;">
    <div class="navbar">
        <a href="<?= base_url('MenuController')?>">Home</a>

    <div class="dropdown">
    <button class="dropbtn">Master
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="<?= base_url('GuruController/index')?>">Data Guru</a>
        <a href="<?= base_url('MapelController/index')?>">Data Mapel</a>
        <a href="<?= base_url('RuangController054/index')?>">Data Ruangan</a>
    </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Transaksi
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="<?= base_url('JadwalController/index')?>">Data Jadwal</a>
        <a href="#">Cetak Jadwal</a>
    </div>
    </div>

        <div class="dropdown">
    <button class="dropbtn">Laporan
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="#">Jadwal Guru</a>
    </div>
    </div>

    <a href="<?=base_url('LoginController/logout'); ?>" onclick="return confirm('Ingin Keluar dari sistem..?');">Logout</a>
    <?php echo "<h2 class='welcome-admin'>Selamat Datang : ".htmlspecialchars($nmadmin)."</h2>"; ?>


</div>