<?php require('inc/header.php') ?>
<?php
$_SESSION['first_name'] = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$_SESSION['last_name']  = isset($_POST['last_name']) ? $_POST['last_name'] : "";
$_SESSION['address']  = isset($_POST['address']) ? $_POST['address'] : "";
$_SESSION['city']  = isset($_POST['city']) ? $_POST['city'] : "";
$_SESSION['state']  = isset($_POST['state']) ? $_POST['state'] : "";
$_SESSION['phone'] = isset($_POST['phone']) ? $_POST['phone'] : "";
$_SESSION['email']  = isset($_POST['email']) ? $_POST['email'] : "";
?>
<div class="col-8">
<form class="row g-3" method="POST" action="verify.php">
<div class="col-12">
<div class="col-md-4">
    <label for="card_type" class="form-label">Card Type</label>
    <select id="card_type" class="form-select" name="card_type" required>
      <option disable>Choose...</option>
      <option value="1" selected>Debit Card</option>
      <option value="2">Master Card</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="card_number" class="form-label">Card Number</label>
    <input type="text" class="form-control" id="card_number" name="card_number" required>
  </div>
  <div class="col-4">
    <label for="expire" class="form-label">Expriration Date</label>
    <input type="date" class="form-control" id="expire" name="expire" required>
  </div>
  <div class="col-md-4">
    <label for="cvv2" class="form-label">Verification Code(CVV2)</label>
    <input type="text" class="form-control" id="cvv2" name="cvv2" required>
  </div>
  <div class="col-12">
    <input type="submit" class="btn btn-primary" name="reg" value="NEXT"></input>
  </div>
</form>
</div>
<?php require('inc/footer.php') ?>