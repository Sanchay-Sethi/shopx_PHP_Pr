<?php
    include('server.php');
    $getResult = $connection->prepare(
        "SELECT * FROM products WHERE product_category='mens' LIMIT 4"
    );
    $getResult->execute();
    $featured_mens_shirt_data = $getResult->get_result();
?>