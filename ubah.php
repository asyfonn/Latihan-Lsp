<?php
require 'koneksi.php';

$id = $_GET["id"];

$uh = read ("SELECT * FROM tbl_user WHERE id = $id")[0];


if ( isset($_POST ["submit"])){
    
    
    if (ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah !');
                document.location.href = 'tampilandata.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal diubah !');
            document.location.href = 'tampilandata.php';
        </script>
        ";
    }
    
    
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data</title>

    <title>Tambah Data</title>
    <style>
    label{
        display: block;
    }
    </style>

</head>
<body>
    <h1>Ubah data user</h1>
    
    <form action="" method = "post" >
    <input type="hidden"name= "id" value="<?=$uh["id"]; ?>">
    <ul>
        <li>
            <label for="nama">Nama</label>
            <input type="text"name ="nama"value ="<?=$uh["nama"];?>">
        </li>
        <li>
            <label for="email">Email</label>
            <input type="text"name ="email"value ="<?=$uh["email"];?>">
        </li>
        <li>
            <label for="username">Username</label>
            <input type="text"name ="username"value ="<?=$uh["username"];?>">
        </li>
        <li>
            <label for="password">Password</label>
            <input type="text"name ="password"value ="<?=$uh["password"];?>">
        </li>
        <li>
            <button type="submit" name= "submit">Ubah data !</button>
        </li>

    </ul>

    </form>


</body>
</html>