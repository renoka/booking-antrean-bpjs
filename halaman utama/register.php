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
    
    <form action="process_login.php" method="POST">
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
            
        <button type="submit" style="background-color: blue; color: white; border-radius: 5px; width: 100%; height: 30px">Daftar</button> <br> <br>
        <a href="index.php"><button type="button" style="border-radius: 5px; width: 100%; height: 30px;">Kembali</button></a>

    </form>
</div>
</body>
</html>
