<?php require('inc/header.php') ?>
<?php if(isset($_SESSION['success']))
{
  $success = 1;
  session_destroy();
}

?>
<div class="col-8">
<form class="row g-3" method="POST" action="payment.php">
  <?php if(isset($success)){?>
<h2 style="text-align: center;
    color: #2c7e2c;">Data Saved Successfully</h2>
  <?php } ?>
  <div class="col-md-6">
    <label for="first_name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" required>
  </div>
  <div class="col-md-6">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" required>
  </div>
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
  </div>
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city" required>
  </div>
  <div class="col-md-6">
    <label for="state" class="form-label">State</label>
    <select id="state" class="form-select" name="state" required>
      <option disabled>Choose...</option>
      <option value="Alabama" selected>Alabama</option>
      <option value="Alaska">Alaska</option>
      <option value="Texas">Texas</option>
      <option value="Florida">Florida</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" required>
  </div>
  <div class="col-md-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="col-12">
    <input type="submit" class="btn btn-primary" name="reg" value="NEXT"></input>
  </div>
</form>
</div>
<?php require('inc/footer.php') ?>