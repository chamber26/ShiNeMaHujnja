<?php
require_once '../db/db.php';

$connect = $db->prepare('delete from tickets where id = :id');
$connect->bindParam(':id', $_POST['id']);
$connect->execute();
header("Location: admin_cabinet.php");