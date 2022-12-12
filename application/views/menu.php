<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Halaman Menu</title>
		<link rel="stylesheet" href="">
</head>
<body>
<h1>Daftar Menu</h1>

<a href="<?php echo base_url('/welcome/hlmn_tmbh_menu') ?>">Pesan</a>
<br>
<br>
<table border="1">
	<tr>
		<td>No</td>
		<td>Kode Menu</td>
		<td>Menu</td>
		<td>Harga</td>
	</tr>
	<?php
	$count = 0;
	foreach ($queryAllAdmin as $row) {
		$count = $count + 1;
?>
	<tr>
		<td><?php echo $count ?></td>
		<td><?php echo $row->kdmenu ?></td>
		<td><?php echo $row->nmmenu ?></td>
		<td><?php echo $row->harga ?></td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>