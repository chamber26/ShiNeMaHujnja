<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ua">

<head>

    <style>
        table {
            font-family: arial;
            border-collapse: collapse;
            width: 50%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 10px;
        }
        tr:nth-child(even){
            background-color: #dddddd;
        }
    </style>
</head>

<body>

<h1>Ласкаво просимо до Ваших володінь)</h1>
<h1>Будь ласка, підтвердіть Ваше замовлення)</h1>

<table>
    <thead>
    <tr>
        <th>User_Name</th>
        <th>Company</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Distance</th>
        <th>Price</th>
    </tr>
    </thead>

    <tbody>

    <?php
    require_once '../db/db.php';

    $user_id = $_SESSION['user_id'];

    $sql = "select * from added_tickets WHERE user_id = :user_id ";
    $params = ['user_id' => $user_id];
    $table = $db->prepare($sql);
    $table->execute($params);
    $show = $table->fetchAll(PDO::FETCH_NUM);
    foreach($show as $item)
    {
        echo '<tr>';
        echo '<td>'.$item[1].'</td>';
        echo '<td>'.$item[2].'</td>';
        echo '<td>'.$item[3].'</td>';
        echo '<td>'.$item[4].'</td>';
        echo '<td>'.$item[5].'</td>';
        echo '<td>'.$item[6].'</td>';
        echo '</tr>';

    }

    ?>

    </tbody>

</table>

<form action='../client/confirmed.php' method='post'>
    <input type='submit' value='SUBMIT'>
</form>

</body>
</html>
