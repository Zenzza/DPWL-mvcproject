<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test POST</title>
</head>
<body>
    <h3>Hasil : </h3>
    <div id="hasil">Menunggu Respon...</div>

    <script type="text/javascript">
        fetch("<?=base_url('PostController/ambil')?>", {
            method : 'POST',
            headers : { 'Content-Type' : 'application/x-www-form-urlencoded'},
            body : 'nama=Jordi&&nilai=99'
        }).then(res => res.text()).then(data =>{
            document.getElementById('hasil').innerHTML = data;
        })
        .catch(err => {
            document.getElementById('hasil').innerHTML = 'Gagal ambil data: ' + err;
        });
    </script>
</body>
</html>