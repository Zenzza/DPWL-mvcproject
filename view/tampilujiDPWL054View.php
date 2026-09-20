<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS DPWL - Jordi Venzen</title>
</head>
<body>
    <h1>Hasil Perhitungan Luas Segitiga</h1>
    <table>
        <tr>
            <td>Nilai Alas </td>
            <td>: <b><?= htmlspecialchars($alas)?></b></td>
        </tr>
        <tr>
            <td>Nilai Tinggi </td>
            <td>: <b> <?= htmlspecialchars($tinggi)?></b></td>
        </tr>
        <tr>
            <td>Hasil </td>
            <td>: <b><?= htmlspecialchars($cekhasil['hasil'])?></b></td>
        </tr>
    </table>
    Setelah dikalikan <b><?= htmlspecialchars($kali)?></b> maka hasil akhirnya adalah <b><?= htmlspecialchars($cekhasil['hasilKali'])?></b>
    <br>
    <br>    
</body>
</html>