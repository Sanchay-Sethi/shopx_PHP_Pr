<?php include('components/navbar.php'); ?>
<?php
  session_start();
?>
<head>
    <title>Payment</title>
</head>
<body>

    <section id = "" class = "my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="font-weight-bold">Pay Your Amount</h2>
            <hr class="mx-auto">
        </div>
        <div class="max-auto container text-center">
            <p>Total Amount : ₹ <?php echo $_SESSION['total']; ?></p>
            <input type="submit" name = "" class = "btn btn-secondary" id = "checkout-btn" value = "Pay Now">
        </div>
    </section>

<?php include('components/footer.php'); ?>