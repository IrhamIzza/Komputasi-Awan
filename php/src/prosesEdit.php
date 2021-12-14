<?php 
	include "koneksi.php"; 
	$id=$_GET['id']; 
	$username=$_GET['username']; 
	$password=$_GET['password']; 
	$query= "UPDATE user SET username='$username', password='$password' WHERE id='$id'"; 
	$result=mysqli_query($connect, $query); 
	if($result){ 
		echo "Berhasil update data ke database "; 
?> 
	<a href="adminedit.php">Lihat data di Tabel</a> 
<?php 
	}else{ 
		echo "Gagal update data" . mysqli_error($connect); 
	}
?>