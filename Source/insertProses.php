<?php  
    include "koneksi.php";
    
    $id=$_GET['id'];
    $username=$_GET['username'];
    $password=$_GET['password'];

    $sql="INSERT INTO user(id, username, password)
          VALUE('$id', '$username','$password')";

    if (mysqli_query($connect, $sql)) {
        echo "Record berhasil ditambahkan";

    } else {
        echo "Record gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
    
?>

<a href="adminedit.php">Lihat data di Tabel</a>