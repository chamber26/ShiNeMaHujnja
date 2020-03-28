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

    <form action="../client/client_signup.php" method="post">
        <button type="submit" class="btn btn-success"> Зареєструватися </button>
    </form>
    </br>
    <form action="../client/client_signin.php" method="post">
        <button type="submit" class="btn btn-success"> Авторизуватися </button>
    </form>
    </br>


<table>
    <thead>
        <tr>
             <th>ID</th>
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

    $connect = $db->query("select * from tickets");
    $items = $connect->fetchAll(PDO::FETCH_NUM);
    foreach($items as $item)
    {
        echo '<tr>';
        echo '<td>'.$item[0].'</td>';
        echo '<td>'.$item[1].'</td>';
        echo '<td>'.$item[2].'</td>';
        echo '<td>'.$item[3].'</td>';
        echo '<td>'.$item[4].'</td>';
        echo '<td>'.$item[5].'</td>';
        echo '</tr>';
    }

    ?>
    </tbody>
</table>
</body>
</html>
