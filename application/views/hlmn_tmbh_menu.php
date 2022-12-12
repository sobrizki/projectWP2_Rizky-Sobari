<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Tambah</title>
</head>
<body>
<h3>Halaman Tambah Menu</h3>
<form action="<?php echo base_url('welcome/fungsiTambahMenu') ?>" method="post">
<table>

<tr>
        <td>Kode Menu</td>
        <td>:</td>
        <td><input type="text" name="kdmenu"></td>
    </tr>
    <tr>
        <td>Nama Menu</td>
        <td>:</td>
        <td><input type="text" name="nmmenu"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><input type="text" name="harga"></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="text" name="gambar"></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit">Tambah Menu</button></td>
    </tr>
</table>
</form>
</body>
</html>