<!--disuruh untuk menampilkan data-->

<?php
require 'function.php';
$buku = query("SELECT * FROM buku");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Halaman</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($buku as $buku) : ?>
    <tr>
        <td><?= $buku['Judul'] ?></td>
        <td><?= $buku['Penulis'] ?></td>
        <td><?= $buku['penerbit'] ?></td>
        <td><?= $buku['halaman'] ?> Halaman</td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>