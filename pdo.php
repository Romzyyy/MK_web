<?php
$serve = "localhost";
$username = "root";
$password = "";
$dbName = "db_sekolah";

// $connect = mysqli_connect($serverName, $username, $password);
// $sql = "CREATE DATABASE $dbName";

// if($connect-> query($sql) == TRUE){
//    echo "Database created";
// }else{
//     echo "Created failed :".mysqli_error($connect);
// }

try{
    $connect = new PDO("mysql:host=$serve;dbName=$dbName",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE $dbName";
    $connect->exec($sql);
    echo "Created database";
} catch(PDOException $e){
    echo "Failed :" .$e->getMessage();
}

?>