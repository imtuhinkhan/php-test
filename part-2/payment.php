<?php require('inc/header.php') ?>
<?php
$username = isset($_POST['f_name']) ? $_POST['f_name'] : "";
echo $username;
?>
<div class="col-12">
<form class="row g-3">
<div class="col-12">
<div class="col-md-4">
    <label for="inputState" class="form-label">Card Type</label>
    <select id="inputState" class="form-select" name="card_type">
      <option selected>Choose...</option>
      <option>Debit Card</option>
      <option>Master Card</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="card_number" class="form-label">Card Number</label>
    <input type="password" class="form-control" id="card_number" name="card_number">
  </div>
  <div class="col-12">
    <label for="expire" class="form-label">Expriration Date</label>
    <input type="date" class="form-control" id="expire" name="expire">
  </div>
  <div class="col-md-6">
    <label for="cvv2" class="form-label">Verification Code(CVV2)</label>
    <input type="text" class="form-control" id="cvv2" name="cvv2">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
<?php require('inc/footer.php') ?>