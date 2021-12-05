<?php
    $conn = new mysqli("localhost", "user", "password", "main");
    $sql = "SELECT image_path FROM products WHERE id=4";
    $img = $conn->query($sql);
    $row = $img -> fetch_assoc();
    echo "<img width='300' height='300' src='".$row['image_path']."'>";
    $conn->close();
/*
    $filter= 'product_price';
    $cond= '12.99';
    $sql = "SELECT image_path FROM products WHERE $filter=$cond";
    $result = $conn->query($sql);
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td><img width='300' height='300' src='".$row['image_path']."'></td></tr>";
    }


    DO NOT DELETE THIS FILE PLZ
    this code can be used to do filters where $filter is equal to the actual filter (size, color etc) and the condition is equal to whatever it is
    (white, 8.5x11, etc)
*/
?>

