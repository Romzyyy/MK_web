<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "nim_2102510046";

$conn = mysqli_connect($host, $username, $password);
$sql = "CREATE DATABASE $dbName";
if($conn-> query($sql)){
    echo "connection Connect";
}else{
    echo "connection failed";
}
$sqlCreate = "CREATE TABLE product (
    id INT(11),
    Nama VARCHAR(25),
    Description VARCHAR(25),
    Price VARCHAR(25),
    Stok INT(10)
    )";
$connect = mysqli_connect($host, $username, $password, $dbName);
if($connect->query($sqlCreate)){
    echo "Table Created";
}else{
    echo "query table error";
}
$sqlInsert = "INSERT INTO product (id, Nama, Description, Price, Stok) VALUES (1, 'mie', 'makanan', '3000', 10);";
$sqlInsert .= "INSERT INTO product (id, Nama, Description, Price, Stok) VALUES (2, 'yakult', 'minuman', '2000', 20);";
$sqlInsert .= "INSERT INTO product (id, Nama, Description, Price, Stok) VALUES (3, 'aqua', 'minuman', '5000', 15);";
if($connect->multi_query($sqlInsert)){
    echo "Data  Successfully";
}else{
    echo "Data error";
}
?>