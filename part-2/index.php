<?php require('inc/header.php') ?>
<div class="col-12">
<form class="row g-3" method="POST" action="payment.php">
  <div class="col-md-6">
    <label for="first_name" class="form-label">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="col-md-6">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="password" class="form-control" id="last_name" name="last_name">
  </div>
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
  </div>
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <div class="col-md-6">
    <label for="state" class="form-label">State</label>
    <input type="text" class="form-control" id="state" name="state">
  </div>
  <div class="col-md-2">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="col-md-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="col-12">
    <a type="submit" class="btn btn-primary">Next</a>
  </div>
</form>
</div>
<?php require('inc/footer.php') ?>