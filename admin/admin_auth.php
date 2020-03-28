<?php
require_once '../db/db.php';

$login = trim( $_POST['login'] );
$pass = trim( $_POST['pass'] );
if ( !empty($login) && !empty($pass) ) {

    $sql = 'SELECT login, password FROM admins WHERE login = :login';
    $params1 = [':login' => $login];

    $stmt = $db->prepare($sql);
    $stmt->execute($params1);

    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user){

        if( password_verify($pass, $user->password) ){
            header( 'Location: admin_cabinet.php' );
        }else{
            echo 'Нажаль логін або пароль невірний(((';
        }

    }else {
        echo 'Нажаль логін або пароль невірний(((';
    }
}else {
    echo 'Здається, Ви пропустили одне з важливих полів(';
    echo "</p>";
    echo 'Спробуйте ще раз, будь ласка)';
    }
?>

