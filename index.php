<?php
  include('includes/config.php');
           
  // *******************
  // Fetch all
  // GET '/customers/'
  //********************
       
  // write query for all customers
  $sql = 'SELECT * FROM customer';

  // make query and get results
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/partials/head.php"); ?>
</head>

<body>
  <div class="wrapper"> 

  <?php include("includes/partials/header.php"); ?>

    <main>     
      <h1>Custormers list of Woodbox!</h1>
      <p>Click each customer to get more information</p>
      
        <!-- I change this part by using table-->
        <!--<div class="card">
        <?php
          // list of customers
          foreach($customers as $customer) {
        ?> 
          <div class="information">
            <h2><a href="customer.php?id=<?php echo $customer['id']; ?>"><?php echo $customer['first_name']." ".$customer['last_name']; ?></a></h2>
            <p>Phone Number: <?php echo $customer['phone']; ?></p>
            <p>Email: <?php echo $customer['email']; ?> </p>
          </div>
        <?php  } ?> 
      </div> -->

     
      <!--  list of customers -->
      <!-- list the customer information by using <table>-->
      <!-- some code come from https://developer.mozilla.org/zh-CN/docs/Web/HTML/Element/table -->
      <table style="table-layout: fixed;" border="1" width="90%" cellspacing="8" cellpadding="8">
        <colgroup span="4" class="columns"></colgroup>
        <tr>
          <!-- make the table have different width by using %-->
          <td style="width:40%" colspan="2">First Name & Last Name</td>
          <td style="width:20%">Phone Number</td>
          <td style="width:40%">Email</td>
        </tr>

      <?php
        foreach($customers as $customer) {
      ?>  
        <table style="table-layout: fixed;" border="1" width="90%" cellspacing="8" cellpadding="8">
          <colgroup span="4" class="columns"></colgroup>     
          <tr>
            <td style="width:40%" colspan="2"><a href="customer.php?id=<?php echo $customer['id']; ?>"><?php echo $customer['first_name']."". $customer['last_name']; ?></a></td>
            <td style="width:20%"><?php echo $customer['phone']; ?></td>
            <td style="width:40%"><?php echo $customer['email']; ?></td>
          </tr>
        </table>

      <?php  } ?>

    </main>
    <?php include("includes/partials/footer.php"); ?>
  </div>

</body>
</html>