<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS DPWL - Jordi Venzen</title>
</head>
<body>
    <form method="post" action="<?= base_url('UjiDPWL054Controller/proseshasil') ?>">
        <h2>HITUNG LUAS SEGITIGA (L = 0.5 x a x t)</h2>
        <table>
            <tr>
                <td><label for="">Nilai Alas </label></td>
                <td><input type="number" name="alas" required placeholder="Nilai Alas"></td>
            </tr>            
            <tr>
                <td><label for="">Nilai Tinggi </label></td>
                <td><input type="number" name="tinggi" required placeholder="Nilai Tinggi"></td>
            </tr>
            <tr>
                <td><label for="">Hasil Dikalikan </label></td>
                <td><input type="number" name="kali" required placeholder="Hasil Dikalikan"></td>
            </tr>
        </table>
        <button type="submit">Proses</button>
    </form>
</body>
</html>