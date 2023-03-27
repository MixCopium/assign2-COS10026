<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- requirement head template -->
  <meta name="description" content="Receipt Page">
  <meta name="keywords" content="HTML, PHP, webpage">
  <meta name="author" content="Nguyen Duc Thinh">
   <!-- responsive setup -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
    <link rel="manifest" href="images/favico/site.webmanifest">
    <!-- style sheet link -->
    <link rel="stylesheet" href="./styles/enhancements.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Receipt</title>
  </head>
    <body>
    <?php include 'includes/header.inc'; ?>
<!-- main content -->
<main id="receipt">
<!-- // Retrieve order information from process_order.php data -->
<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phoneNum = $_POST["phone_number"];
    $address = $_POST["address"];
    $street = $_POST["street"];
    $suburb = $_POST["suburb"];
    $state = $_POST["state"];
    $postcode = $_POST["postcode"];
    $contact = $_POST["contact"];
    $book = $_POST["book"];
    $quantity = $_POST["quantity"];
    $total = $_POST["total"];
    $errMsg = "";
  ?>
  <!-- Print order information to the page -->
  <h1>Thank you for your order!</h1>
  <p>Order Details</p>
  <p>Name: <?php echo $firstname . " " . $lastname; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Phone Number: <?php echo $phoneNum; ?></p>
  <p>Address: <?php echo $address . " " . $street . " " . $suburb . " " . $state . " " . $postcode; ?></p>
  <p>Contact: <?php echo $contact; ?></p>
  <p>Book: <?php echo $book; ?></p>
  <p>Quantity: <?php echo $quantity; ?></p>
  <p>Total: <?php echo $total; ?></p>
</main>
    <?php include 'includes/footer.inc'; ?>
    </body>
    </html>
