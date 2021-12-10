<?php
require 'koneksi.php';

if ( isset($_POST ["submit"])){


    
    //cek data berhasil atau tidak
    if (register($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'tampilandata.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal ditambahkan !');
            document.location.href = 'tampilandata.php';
        </script>
        ";
    }
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <style>
    label{
        display: block;
    }
    </style>
</head>
<body>
    <h1>TAMBAH USER</h1>
    <form action="" method="post">
        <tr>
            <li>
            <label for="nama"> Nama : </label>
            <input type="text" name= "nama" id="nama">
            </li>
            
            <li>
            <label for="email"> Email : </label>
            <input type="text" name= "email" id="email">
            </li>
            
            <li>
            <label for="username"> Username : </label>
            <input type="text" name= "username" id="username">
            </li>
            
            <li>
            <label for="password"> Password : </label>
            <input type="password" name= "password" id="password">
            </li>
   
            <li>
                <button type="submit" name= "submit">Tambah Data!</button>
            </li>
        </ul>

    
    
</form>


</body>
</html>