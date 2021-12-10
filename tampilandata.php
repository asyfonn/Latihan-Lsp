<?php
session_start();


if (!isset ($_SESSION["login"])){

    header("Location: login.php");
    exit; 
}


   require 'koneksi.php';

   $users = read ("SELECT * FROM tbl_user");

 ?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Tampilan Data</title>
</head>
<body>
    <h1>Data User</h1>
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>  No</th>
            <th>  Nama</th>
            <th>  Email</th>
            <th>  Username</th>         
            <th>  Password</th>
            <th>  Ubah | Hapus</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach($users as $u) :?>
        <tr>
             <td><?= $u['id'] ?></td>
             <td><?= $u['nama'] ?></td>
             <td><?= $u['email'] ?></td>
             <td><?= $u['username'] ?></td>
             <td><?= $u['password'] ?></td>
             <td>
              <a href="ubah.php?id=<?= $u ["id"]; ?> ">Ubah</a> |
              <a href="hapus.php?id=<?= $u ["id"]; ?>"  onclick="return confirm ('yakin ?')";>Hapus</a>
             </td>
        </tr>    

        <?php $i++ ?>
        <?php endforeach ?> 


        </table>

     <button> <a href="logout.php">Log Out !</a></button>   
</body>
</html>