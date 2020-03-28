<?php
require_once '../db/db.php';

$company = trim ( $_POST['company'] );
$departure = trim ( $_POST['departure'] );
$destination = trim ( $_POST['destination'] );
$distance = trim ( $_POST['distance'] );
$price = trim ( $_POST['price'] );

$sql3 = 'INSERT INTO tickets (company, departure, destination, distance, price) VALUES ( :company, :departure, :destination, :distance, :price)';
$params3 = ['company' => $company, 'departure' => $departure, 'destination' => $destination, 'distance' => $distance, 'price' => $price];
$stmt3 = $db->prepare($sql3);
$stmt3->execute($params3);

header("Location: admin_cabinet.php");