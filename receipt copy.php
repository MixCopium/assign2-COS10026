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
    <main id="receipt">
      <!-- get data from session of process_order.php -->
      <?php
      session_start();
      $firstname = $_SESSION['firstname'];
      $lastname = $_SESSION['lastname'];
      $email = $_SESSION['email'];
      $phoneNum = $_SESSION['pnum'];
      $address = $_SESSION['address'];
      $state = $_SESSION['state'];
      $postcode = $_SESSION['postcode'];
      $book = $_SESSION['book'];
      $quantity = $_SESSION['quantity'];
      $total = $_SESSION['tootp'];
      ?>
      
    
      <article>
      <div>
  <h1>Thank you for your order!</h1>
  <?php

// Check if the client has selected a time zone
if (isset($_POST['timezone'])) {
  // Set the time zone based on the client's selection
  date_default_timezone_set($_POST['timezone']);
}

?>

<!-- Display a form for the client to select their time zone -->
<form method="post">
  <label for="timezone">Select your time zone:</label>
  <select name="timezone" id="timezone">
    <?php
    // Generate options for each time zone
    foreach (timezone_identifiers_list() as $timezone) {
      // Check if this is the default time zone
      $selected = ($timezone == 'Australia/Melbourne') ? ' selected' : '';
      echo '<option value="' . $timezone . '"' . $selected . '>' . $timezone . '</option>';
    }
    ?>
  </select>
  <input type="submit" value="Set Time Zone">
</form>
<div>
  <p>Order date: <?php echo date('F j, Y, g:i a'); ?></p>
</div>
</p>
</div>
<div class="customer-details">
  <h2>Customer Details</h2>
  <table>
    <tr>
      <td>Name:</td>
      <td><?php echo $firstname . ' ' . $lastname; ?></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>Phone Number:</td>
      <td><?php echo $phoneNum; ?></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><?php echo $address . ', ' . $state . ' ' . $postcode; ?></td>
    </tr>
  </table>
</div>

<div class="order-details">
  <h2>Order Details</h2>
  <table>
    <tr>
      <td>Book:</td>
      <td><?php echo $book; ?></td>
    </tr>
    <tr>
      <td>Quantity:</td>
      <td><?php echo $quantity; ?></td>
    </tr>
    <tr>
      <td>Total:</td>
      <td><?php echo $total; ?></td>
    </tr>
    <tr>
      <td>Payment Method:</td>
      <td>Credit Card</td>
    </tr>
  </table>
</div>
    </article>
</main>
    <?php include 'includes/footer.inc'; ?>
    </body>
    </html>
