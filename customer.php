<?php
  include('includes/config.php');
  
  if (isset($_GET['id']) && (int)$_GET['id'] > 0&& (int)$_GET['id'] < 6) {
  // *******************
  // Fetch one
  // GET '/customers/:id'
  //********************

  // write query for all customers
  $sql = 'SELECT * FROM customer WHERE id = '.$_GET['id'];

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $content = 'single.php';
} else {
  $content = 'includes/error.php';
}

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
      <?php include($content); ?>
    
      <div>
        <button><a href="index.php">Go Back</a></button>
      </div>
    </main>

    <?php include("includes/partials/footer.php"); ?>

  </div>

</body>
</html>