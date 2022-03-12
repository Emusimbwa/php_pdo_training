<?php

$pdo = null;

try{

    $pdo = new PDO(
        "mysql:host=127.0.0.1;dbname=mydatabase", "root", "root", 
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]

    );

}catch(Exception $e){
    var_dump($e->getMessage());
    exit();
}

$res = $pdo->query("SELECT * FROM users");
$users = $res->fetchAll();

foreach($users as $user){
 echo "<b>$user->firstName</b> a $user->age ans et son adresse email est: <i>'$user->email'</i></br>";
}
