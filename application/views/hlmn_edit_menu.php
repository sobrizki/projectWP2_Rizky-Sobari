<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Edit</title>
</head>
<body>
<h3>Halaman Edit Menu</h3>
<form action="<?php echo base_url('welcome/fungsiEdit') ?>" method="post">
<table>
<tr>
        <td>Kode Menu</td>
        <td>:</td>
        <td><input type="text" name="kdmenu" value="<?php echo $queryMenuDetail->kdmenu ?>" readonly></td>
    </tr>
    <tr>
        <td>Nama Menu</td>
        <td>:</td>
        <td><input type="text" name="nmmenu" value="<?php echo $queryMenuDetail->nmmenu ?>"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><input type="text" name="harga" value="<?php echo $queryMenuDetail->harga ?>"></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><input type="text" name="gambar" value="<?php echo $queryMenuDetail->gambar ?>"></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit">Update Menu</button></td>
    </tr>
</table>
</form>
</body>
</html>