<?php 
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
	<table>
		<tr>
			<td colspan="5">
				<td>DATA</td>
				<a href="tambah.php">Tambah</a>
			</td>
		</tr>
		<tr>
			<th>id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
		</tr>
			<?php 
				$qry = mysqli_query($koneksi,"SELECT * FROM users");
				while($user = mysqli_fetch_array($qry)){
			 ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['level']; ?></td>
			<td><?php echo $user['fullname']; ?></td>
			<td>
			<a onclick="return confirm('Yakin untuk menghapus ?')"
			href="hapus.php?id=<?php echo $user['id']; ?>">Hapus Data</a>
			<a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
			</td>
		</tr>
		<?php  
		}
		?>
	</table>
</body>
</html>