<?php
$db_path = "mysql:host=localhost;dbname=aviatickets";
$db_user = "root";
$db_pass = null;
$db_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $db = new PDO ($db_path, $db_user, $db_pass, $db_options);
}catch (PDOException $exception){
    die("Не можу підключитися до БД !(0_0)!");
}

