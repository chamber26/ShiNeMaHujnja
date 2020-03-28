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

<table>
    <thead>
        <tr>
             <th>ID</th>
             <th>Company</th>
             <th>Departure</th>
             <th>Destination</th>
             <th>Distance</th>
             <th>Price</th>
             <th>
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
        echo "<td> <form action='../client/tickets_add.php' method='post'>
                    <input type='hidden' name='id' value='$item[0]'>
                    <input type='submit' value='buy'>
                    </form>
             </td>";
        echo '</tr>';
    }
    ?>

    <form action='../client/client_cabinet.php'>
        <input type='submit' value='MY_CABINET'>
    </form>

    </tbody>
</table>



</body>
</html>
