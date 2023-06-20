<?php 

//$inipath = php_ini_loaded_file();

// if ($inipath) {
//    echo 'Loaded php.ini: ' . $inipath;
// } else {
//    echo 'A php.ini file is not loaded';
// }

// //echo phpinfo();
// if(in_array("mysql",PDO::getAvailableDrivers())){
//    echo "you got it";
// }else{
//    echo "no";
// }
require "functions.php";
//require "router.php";

//connect to MySql DB

$dsn = "mysql:host=localhost;port=3306;dbname=nick_db;user=root;password=XAcc87op;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll();

dd($posts);