<?php
// deklarasi dari localhost
$hostname = "localhost";
$username = "root";
$password = "12345678";
$database_name = "db-bpjs";

// koneksi ke database
$db = mysqli_connect($hostname, $username,$password,$database_name);

if ($db->connect_error){
    echo "koneksi rusak";
    die("error!");
}

?>