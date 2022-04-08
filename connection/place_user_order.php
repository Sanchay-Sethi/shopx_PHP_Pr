<?php
    session_start();
    include('server.php');
    if(!isset($_SESSION['logged_in'])){
        header('location: ../index.php');
        exit;
    }else{
        if(isset($_POST['order_click'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $_SESSION['user_phone'] = $phone;
            $city = $_POST['city'];
            $address = $_POST['address'];
            $order_cost = $_SESSION['total'];
            $order_status = "not paid";
            $user_id = $_SESSION['user_id'];
            $order_date = date('Y-m-d H:i:s');
    
            $connect_string = $connection->prepare("INSERT INTO orders (order_cost,order_status,user_id,user_phone,user_email,user_city,user_address,order_date) VALUES (?,?,?,?,?,?,?,?); ");
            $connect_string->bind_param('isiissss',$order_cost,$order_status,$user_id,$phone,$email,$city,$address,$order_date);
            $connect_status = $connect_string->execute();
            if(!$connect_status){
                header('location: index.php');
                exit;
            }
            $order_id = $connect_string->insert_id;
    
            foreach($_SESSION['cart'] as $key => $value){
                $product = $_SESSION['cart'][$key]; 
                $product_id = $product['product_id'];
                $product_name = $product['product_name'];
                $product_image = $product['product_image'];
                $product_price = $product['product_price'];
                $product_quantity = $product['product_quantity'];
    
                $conn_string = $connection->prepare("INSERT INTO order_items (order_id,product_id,product_name,product_image,product_price,product_quantity,user_id,order_date) VALUES (?,?,?,?,?,?,?,?)");
                $conn_string->bind_param('iissiiis',$order_id,$product_id,$product_name,$product_image,$product_price,$product_quantity,$user_id,$order_date);                  
                $conn_string->execute();
            }
    
            // unset($_SESSION['cart']);
            $_SESSION['order_id'] = $order_id;
            header('location: ../payment.php?order_status=order placed');
    
        }
    }
    
?>
<h1>Please Wait...</h1>