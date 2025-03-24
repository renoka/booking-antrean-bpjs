<?php
// memanggil file database.php
    include "../service/database.php";

    $notif_login = "";

// mengambil input dari halaman login
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // mencocokkan data yang ada di database
        $inputdata = "SELECT * FROM user WHERE username='$username' AND password='$password' ";

        // tampung ke dalam variabel hasil
        $hasil = $db->query($inputdata);
        if($hasil->num_rows){
            $data = $hasil->fetch_assoc();
            // echo "username = ". $data["username"] ; //tes apakah username dan pw sesuai
            // echo "password = ". $data["password"] ;
            // echo "data ada";

            // mengarahkan ke dashboard
            header("Location: dashboard.php");

        }else{
            $notif_login = "data tidak ada";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - BPJS Kesehatan</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            height: 100vh;
            align-items: center;
            background: linear-gradient(180deg, #61d3f2, #7eaedb00);
        }

        div {
            width: 400px;
            height: 450px;
            align-content: center;
            justify-items: center;
            border: 4px solid grey;
            background-color: white;
        }

        h2 {
            font-size: 50px;
        }

        form {
            width: 300px;
        }
    </style>
</head>

<body>
    <div>
        <h2>Login</h2>

        <i><?=$notif_login?></i>
        <form action="login.php" method="POST">
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

            <button type="submit"
                style="background-color: blue; color: white; border-radius: 5px; width: 100%; height: 30px" name="login">Login</button>
            <br>

            <p style="text-align: center;">Belum mempunyai akun? <a href="register.php">Silakan daftar</a></p>
        </form>
    </div>
</body>

</html>