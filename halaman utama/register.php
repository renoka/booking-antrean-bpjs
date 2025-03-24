<?php
    include "../service/database.php";

    // notif untuk berhasil atau tidak data saat daftar
    $notif_daftar = "";


    if (isset($_POST["daftar"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        // input data ke database
        $inputdata = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

        // cek apakah data sudah masuk atau belum
        if($db->query($inputdata)){
        //     echo "input data berhasil";
            $notif_daftar = "Berhasil Daftar. Silakan Login";
        }else{
        //     echo "input data gagal ";
            $notif_daftar = "Gagal Daftar. Silakan coba lagi";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - BPJS Kesehatan</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            height: 100vh;
            align-items: center;
            background-color: springgreen;
        }
        div{
            width: 400px;
            height: 450px;
            align-content: center;
            justify-items: center;
            border: 4px solid grey;
            background-color: white;
        }
        h2{font-size: 50px;}
        form{width: 300px;}
        button:hover{background-color: wheat;}
    </style>
</head>
<body>
<div>
    <h2>Daftar</h2>

    <i><?=$notif_daftar?></i>
    <form action="register.php" method="POST">
        <label for="username" style="font-size: 21px;">Username:</label> <br>
        <input type="text" name="username" placeholder="masukan username" required style="height: 30px;
    width: 100%;
    text-align: center;
    font-size: 15px;"> <br> <br>
            
        <label for="password" style="font-size: 21px;">Password:</label> <br>
        <input type="password" name="password" placeholder="masukan password" required style=" height: 30px;
    width: 100%;
    text-align: center;
    font-size: 15px;"> <br> <br> <br>
            
        <button type="submit" style="background-color: blue; color: white; border-radius: 5px; width: 100%; height: 30px" name="daftar" >Daftar</button> <br> <br>
        <a href="index.php"><button type="button" style="border-radius: 5px; width: 100%; height: 30px;">Kembali</button></a>

    </form>
</div>
</body>
</html>
