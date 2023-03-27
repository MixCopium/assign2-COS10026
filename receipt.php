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
    <div class="receipt">
        <h1>Thank you for your order!</h1>
        <p>Order date: <?php echo date("F j, Y, g:i a"); ?></p>
      </div>
      <div class="customer-details">
        <h2>Customer Details</h2>
        <p>Name: <?php echo $firstname . " " . $lastname; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone Number: <?php echo $phoneNum; ?></p>
        <p>Address: <?php echo $address . " " . $street . " " . $suburb . " " . $state . " " . $postcode; ?></p>
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
    </div>
</main>
    <?php include 'includes/footer.inc'; ?>
    </body>
    </html>