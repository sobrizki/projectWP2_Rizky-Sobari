<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Halaman Home</title>
		<link rel="stylesheet" href="">
</head>
<body>
<h1>Daftar Menu</h1>

<a href="<?php echo base_url('/welcome/hlmn_tmbh_menu') ?>">Tambah Menu</a>
<br>
<br>
<table border="1">
	<tr>
		<td>No</td>
		<td>Kode Menu</td>
		<td>Nama Menu</td>
		<td>Harga</td>
		<td>Gambar</td>
		<td>Aksi</td>
	</tr>
	<?php
	$count = 0;
	foreach ($queryAllMenu as $row) {
		$count = $count + 1;
?>
	<tr>
		<td><?php echo $count ?></td>
		<td><?php echo $row->kdmenu ?></td>
		<td><?php echo $row->nmmenu ?></td>
		<td><?php echo $row->harga ?></td>
		<td><img src="<?php echo base_url().'/uploads/'.$row->gambar ?>" width="100" height="100"></td>
		<td><a href="<?php echo base_url('/welcome/hlmn_edit_menu') ?>/<?php echo $row->kdmenu ?>">Edit</a> | <a href="<?php echo base_url('/welcome/fungsiDelete') ?>/<?php echo $row->kdmenu ?>">Delete</a></td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>