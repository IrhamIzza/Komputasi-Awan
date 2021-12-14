<html> 
	<head> 
	</head> 
	<body> 
		<?php 
			include "koneksi.php"; 
			$id=$_GET['id']; 
			$query="SELECT * FROM user WHERE id='$id'"; 
			$result=mysqli_query($connect, $query); 
		?> 
		<form action="prosesEdit.php" method="GET"> 
			<table> 
			<?php 
			while($row=mysqli_fetch_array($result)){
			?>
				<tr> 
					<td> Id: </td> 
					<td> <input type="text" name="id" value="<?php echo $row['id'];?>"> 
				</tr> 
				<tr> 
					<td> Nama: </td> 
					<td> <input type="text" name="nama" value="<?php echo $row['username'];?>"> </td> 
				</tr> 
				<tr> 
					<td> Password: </td> 
					<td> <textarea name="password" rows="5" cols="20"> <?php echo $row['password'];?></textarea></td> 
			</tr> 
			<tr> 
				<td><input type="submit" name="simpan" value= "Simpan"> </td> 
			</tr> 
		<?php 
		} 
		?> 
		</table> 
	</form> 
</body> 
</html> 
