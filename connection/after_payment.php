<?php

session_start();

include('server.php');

if(isset($_POST['transaction_id'])){

            $order_id = $_POST['order_id'];
            $order_status = "paid";
            $transaction_id = $_POST['transaction_id'];
            $user_id = $_SESSION['user_id'];
            $payment_date = date('Y-m-d H:i:s');


            $stmt = $connection->prepare("UPDATE orders SET order_status=? WHERE order_id=?");
            $stmt->bind_param('si',$order_status,$order_id);

            $stmt->execute();

            $stmt1 = $connection->prepare("INSERT INTO payments (order_id,user_id,transaction_id,payment_date)
                                    VALUES (?,?,?,?); ");

            $stmt1->bind_param('iiss',$order_id,$user_id,$transaction_id,$payment_date);

            $stmt1->execute();
            if(isset($_POST['paybycart'])){
                if($_POST['paybycart']=="paymentbycart"){
                     unset($_SESSION['cart']);
                }
            }
            
            header("location: ../paymentSuccess.php?payment_message=Paid successfully, Thanks for shopping with us");

} else{

    header("location: ../index.php");
    exit;
}

?>