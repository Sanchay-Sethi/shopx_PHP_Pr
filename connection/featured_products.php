<?php
    include('server.php');
    $getResult = $connection->prepare(
        "SELECT * FROM products LIMIT 4"
    );
    $getResult->execute();
    $featured_products_data = $getResult->get_result();
?>