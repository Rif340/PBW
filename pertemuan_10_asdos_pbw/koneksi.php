<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "pemrograman_web_contoh";

//$conn = new mysqli($servername, $username, $password, $dbname);

//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";


$conn = new mysqli(
    'localhost',
    'root',
    '',
    'pemrograman_web_contoh'
);

if ($conn->connect_error){
    die("Gagal :" . $conn->connect_error);
}

?>