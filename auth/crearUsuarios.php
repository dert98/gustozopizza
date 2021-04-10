<?php
    $config = file_get_contents("../config.json");
    $config = json_decode($config, true);
    $link = mysqli_connect("localhost","root","");
    $sql = "CREATE DATABASE ".$config["db_name"];
    $result	= mysqli_query($link,$sql); 
    include("../dbml.php");
    $dbml = new dbManager("midb","id");
    $sql = "CREATE TABLE usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $dbml->qy($sql);
    $dbml = new dbManager("usuarios","id");
    $dbml->insert("dert","Dert","Driver","dertdriver@hotmail.com");
    $dbml->save();
    $dbml->insert("edu","Edu","edumo","dertd@hotmail.com");
    $dbml->save();
    $dbml->insert("mariano","Mariano","maca","dertc@hotmail.com");
    $dbml->save();
?>