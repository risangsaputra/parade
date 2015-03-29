<!DOCTYPE html>
<html>
<head>
	<title>laravel</title>
</head>
<body>
	<h1>daftar User</h1>
	<p><a href="">Tambah user</a></p>
	<table>
		<tr>
			<th>nama user</th>
			<th>Email</th>
			<th>Option</th>
			<?php
			if (count($daftar_user) == 0){
				echo '<tr><td colspan="3">belum ada data </td></tr>';
			}else{
				foreach ($daftar_user as $usr) {
					echo '<tr><td>'.$usr->name.'</td><td>'.$usr->email.'</td>';

					echo '<td><a href="">Edit</a> <a href="">Delete</td></tr>';
					
				}
			}

			?>
			</tr>
		
	</table>
</body>
</html>