<?php
echo 'Ласкаво просимо до Ваших володінь)';
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
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Distance, km</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <tr>
        <form action='../admin/create.php' method='post'>
        <th></th>
        <th><input type="text" name="company" id="company"></th>
        <th><input type="text" name="departure" id="departure"></th>
        <th><input type="text" name="destination" id="destination"></th>
        <th><input type="text" name="distance" id="distance"></th>
        <th><input type="text" name="price" id="price"></th>
        <th><button type="submit" class="btn btn-success">add</button></th>
        </form>
    </tr>
    </thead>
    <thead>
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Distance, km</th>
        <th>Price</th>
        <th>Action</th>
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
        echo "<td> 
                   <form action='../admin/delete.php' method='post'>
                   <input type='hidden' name='id' value='$item[0]'>
                   <input type='submit' value='delete'>
                   </form>
              </td>";
        echo '</tr>';
    }

    ?>
    </tbody>
</table>
</body>
</html>
