<!DOCTYPE html>
<html>
<head>
<title>Tambah Makanan</title>
</head>
<body>
<form action="<?= base_url('makanan/insert_makanan') ?>" method="post" enctype="multipart/form-data">
	<!-- <table> -->
		<tr>
		<td>id makanan</td>
		<td><input type="text" name="id_makanan"></td><br>
	</tr>
	<tr>
		<td>nama makanan</td>
		<td><input type="text" name="nama_makanan"></td><br>
	</tr>
	<tr>
		<td>harga makanan</td>
		<td><input type="text" name="harga_makanan"></td><br>
	</tr>
	<tr>
		<td>upload file</td>
		<input type="file" name="foto_makanan"><br>
	</tr>
	<td>
		 <button type="submit" class="btn btn-primary pull-right" value="submit" name="submit">Tambah</button>
	</td>
	<!-- </table> -->
</form>
</body>
</html>