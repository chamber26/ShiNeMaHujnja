<?php
session_start();
require_once '../db/db.php';

$tickets_id = $_POST['id'];
//echo $tickets_id;
$user_id = $_SESSION['user_id'];
//echo $user_id;

    $sql1 = 'SELECT company, departure, destination, distance, price FROM tickets  WHERE id = :tickets_id';
    $params1 = ['tickets_id' => $tickets_id];
    $stmt1 = $db->prepare($sql1);
    $stmt1->execute($params1);
    $string1 = $stmt1->fetch(PDO::FETCH_NUM);

    $company = $string1[0];
    $departure = $string1[1];
    $destination = $string1[2];
    $distance = $string1[3];
    $price = $string1[4];

    $sql2 = 'SELECT name FROM users WHERE id = :user_id';
    $params2 = ['user_id' => $user_id];
    $stmt2 = $db->prepare($sql2);
    $stmt2->execute($params2);
    $string2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $user_name=implode($string2);

//    $user_n = 'vitaljka';

    $sql3 = 'INSERT INTO added_tickets (user_name, company, departure, destination, distance, price, user_id, tickets_id) VALUES ( :user_name, :company, :departure, :destination, :distance, :price, :user_id,:tickets_id )';
    $params3 = ['user_name' => $user_name, 'company' => $company, 'departure' => $departure, 'destination' => $destination, 'distance' => $distance, 'price' => $price   , 'user_id' => $user_id, 'tickets_id' => $tickets_id];
    $stmt3 = $db->prepare($sql3);
    $stmt3->execute($params3);

    header("Location: ../title/buy.php");

//    $sql4 = 'INSERT INTO added_tickets (user_name) VALUE (:user_name)';
//    $params4 = ['user_name' => $user_name];
//    $stmt4 = $db->prepare($sql4);
//    $stmt4->execute($params4);

?>