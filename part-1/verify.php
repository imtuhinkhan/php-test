<?php require('inc/header.php') ?>
<?php
$_SESSION['card_type'] = isset($_POST['card_type']) ? $_POST['card_type'] : "";
$_SESSION['card_number']  = isset($_POST['card_number']) ? $_POST['card_number'] : "";
$_SESSION['expire']  = isset($_POST['expire']) ? $_POST['expire'] : "";
$_SESSION['cvv2']  = isset($_POST['cvv2']) ? $_POST['cvv2'] : "";
?>
<div class="col-12">
<form class="row g-3" method="POST" action="verify.php">
<div class="col-12">
<h3>Customer Details</h3>
<p><b>First Name:</b> <?php echo $_SESSION['first_name'] ?></p>
<p><b>Last Name:</b> <?php echo $_SESSION['last_name'] ?></p>
<p><b>Address:</b><?php echo $_SESSION['address'] ?></p>
<p><b>City:</b><?php echo $_SESSION['city'] ?></p>
<p><b>State:</b><?php echo $_SESSION['state'] ?></p>
<p><b>Email:</b><?php echo $_SESSION['email'] ?></p>
<p><b>Phone:</b><?php echo $_SESSION['phone'] ?></p>
</div>

<div class="col-12">
<h3>Payment Details</h3>
<p><b>Card Type:</b> <?php echo $_SESSION['card_type'] ?></p>
<p><b>Card Number:</b> <?php echo $_SESSION['card_number'] ?></p>
<p><b>Expriration Date:</b><?php echo $_SESSION['expire'] ?></p>
<p><b>Verification Code(CVV2):</b><?php echo $_SESSION['cvv2'] ?></p>
</div>
<?php require('inc/footer.php') ?>