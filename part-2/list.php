<?php require('inc/header.php') ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
    </tr>
  </thead>
  <tbody>
  <?php 
								
    $select_customer="SELECT * FROM customer_details";
    $customer=mysqli_query($conn,$select_customer);
    $index = 0;
    while($row=mysqli_fetch_array($customer)){
    //$c_name= $row['c_name'];
    $fname=$row['first_name'];
    $lname=$row['last_name'];
    $email=$row['email'];
    $address=$row['address'];
    $phone=$row['phone'];
    $state=$row['state'];
    $city=$row['city'];
     ?>	
    <tr>
      <th scope="row"><?php echo ++$index; ?></th>
      <td><?php echo $fname ?></td>
      <td><?php echo $lname ?></td>
      <td><?php echo $email ?></td>
      <td><?php echo $phone ?></td>
      <td><?php echo $address ?></td>

      <td><?php echo $city ?></td>
      <td><?php echo $state ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<?php require('inc/footer.php') ?>