<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_latihanlsp');



function read($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function register ($data){
    global $conn;
    
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username =strtolower(stripslashes(htmlspecialchars($data["username"])));
    $password =mysqli_real_escape_string ($conn, htmlspecialchars($data["password"])) ;


    //cek username
    $result = mysqli_query($conn, " SELECT username FROM tbl_user WHERE username ='$username'");

    if (mysqli_fetch_assoc($result)){
        echo" <script>
                alert ('username sudah ada !');
                document.location.href ='tampilandata.php';
              </script>";

        exit;        
    }
