<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_information_dishes","*");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Dishes</title>
    <link rel="stylesheet" href="../css/main.css" />
</head>
<body>
    <div class="container-admin">
        <h2 class="title-admin">List Dishes</h2>
        <button class="btn-admin"><a class="btn-admin-a" href="../home.php">Back HomePage</a></button>
        <table class="table-admin">
            <?php
                foreach($items as $item){
                    echo "<tr>";
                    echo "<td class='td-admin'>".$item["dish_name"]."</td>";
                    echo "<td class='td-admin'><a href='edit-dish.php?id=".$item["dish_id"]."'>Edit</a> <a href='delete-dish.php?id=".$item["dish_id"]."'>Delete</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
