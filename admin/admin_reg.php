<?php
require_once '../db/db.php';

$login = trim( $_POST['login'] );
$pass = trim( $_POST['pass'] );
$name = trim( $_POST['name'] );
if ( !empty($login) && !empty($pass) ){

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO admins (name, login, password) VALUES (:name, :login, :pass)';
    $params = ['name' => $name, 'login' => $login, ':pass' => $pass];

    $stmt = $db->prepare($sql);
    $stmt->execute($params);

    echo 'Ви успішно пройшли всю реєстрацію)';
} else {
    echo 'Здається, Ви пропустили одне з важливих полів(';
    echo '</p>';
    echo 'Спробуйте ще раз, будь ласка)';
}
?>