<?php
session_start();
require_once '../db/db.php';

$login = trim( $_POST['login'] );
$pass = trim( $_POST['pass'] );
$name = trim( $_POST['name'] );

if ( !empty($login) && !empty($pass) ){

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql1 = 'INSERT INTO users (name, login, password) VALUES (:name, :login, :pass)';
    $params1 = ['name' => $name, 'login' => $login, 'pass' => $pass];
    $stmt1 = $db->prepare($sql1);
    $stmt1->execute($params1);

    $sql2 = 'SELECT id FROM users WHERE login = :login';
    $params2 = ['login' => $login];
    $stmt2 = $db->prepare($sql2);
    $stmt2->execute($params2);
    $us = $stmt2->fetch(PDO::FETCH_ASSOC);
    $user = implode($us);
    $_SESSION['user_id'] = $user;

    header('Location:../title/buy.php');

} else {
    echo 'Здається, Ви пропустили одне з важливих полів(';
    echo '</p>';
    echo 'Спробуйте ще раз, будь ласка)';
}

?>
