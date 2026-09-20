<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Grade</title>
</head>
<body>
    <h1>Hasil Penilaian</h1>
    Nilai anda : <?= htmlspecialchars($cekgrade['nilai'])?><br>
    Grade yang anda peroleh : <?= htmlspecialchars($cekgrade['grade'])?><br>
    Hasil anda : <?= htmlspecialchars($cekgrade['hasil'])?><br>
    <br>
    <br>    
    <?php echo '<i>Admin :'.htmlspecialchars($nmadmin) . '</i>' ?>
</body>
</html>