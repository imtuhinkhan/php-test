<?php require('inc/header.php') ?>
<?php
if(!isset($_POST['save'])) {
    $_SESSION['card_type'] = isset($_POST['card_type']) ? $_POST['card_type'] : "";
    $_SESSION['card_number']  = isset($_POST['card_number']) ? $_POST['card_number'] : "";
    $_SESSION['expire']  = isset($_POST['expire']) ? $_POST['expire'] : "";
    $_SESSION['cvv2']  = isset($_POST['cvv2']) ? $_POST['cvv2'] : "";
}

//saving data 
$fname = $_SESSION['first_name'];
$lname = $_SESSION['last_name'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$card_type = $_SESSION['card_type'];
$card_number = $_SESSION['card_number'];
$card_exp_date = $_SESSION['expire'];

if(isset($_POST['save'])) {
    $customer="INSERT INTO customer_details (first_name,last_name,address,city,state,phone,email) VALUES ('$fname','$lname','$address','$city','$state','$phone','$email')";
    echo $payment="INSERT INTO payment_details (card_type,card_number,card_exp_date) VALUES ('$card_type','$card_number','$card_exp_date')";
    if ($conn->query($customer) === TRUE) {
        if ($conn->query($payment) === TRUE) {
            $_SESSION['success'] = 1; ?>
        <?php
            header("Location:index.php");
        }
      } else {
        echo "Error: " . $conn->error;
      }
}
?>
<style>
    p{
        border: 1px solid black;
    padding: 10px;
    border-radius: 5px;

    }
    h3{
        background: #0dcaf0;
    padding: 10px;
    border-radius: 5px;
}
    
</style>
<div class="col-8">
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
<p><b>Card Type:</b> <?php if ($_SESSION['cvv2']==1) echo "Debit Card"; else {echo "Master Card";} ?></p>
<p><b>Card Number:</b> <?php echo $_SESSION['card_number'] ?></p>
<p><b>Expriration Date:</b><?php echo $_SESSION['expire'] ?></p>
<p><b>Verification Code(CVV2):</b><?php echo $_SESSION['cvv2'] ?></p>
</div>
<form method="post">
<div class="col-12">
        <input type="submit" class="btn btn-primary" name="save" value="Save"/>
</div>
</form>
<?php require('inc/footer.php') ?>