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

    $ $_SESSION["lastid"]

    // $firstname = $_SESSION['firstname'];
    // $lastname = $_SESSION['lastname'];
    // $email = $_SESSION['email'];
    // $phoneNum = $_SESSION['pnum'];
    // $address = $_SESSION['address'];
    // $state = $_SESSION['state'];
    // $postcode = $_SESSION['postcode'];
    // $book = $_SESSION['book'];
    // $quantity = $_SESSION['quantity'];
    // $total = $_SESSION['tootp'];


    


    ?>

    <div>
      <div class="grid receipt">
        <div class="grid-body">
          <div class="receipt-title">
            <div class="row">
              <div>
              </div>
            </div>
            <br>
            <div class="row">
              <div>
                <h1>Thank you for your Purchase</h1>
                <h2>Here is your Receipt<br>
                  <span class="small">Order #<?php echo $_SESSION['order_number']; ?></span>
                </h2>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div>
              <address>
                <strong>Billed To:</strong><br>
                <?php echo $firstname . ' ' . $lastname; ?><br>
                <?php echo $address . ' ' . $state . ' ' . $postcode; ?><br>
                <?php echo $phoneNum; ?><br>
              </address>
            </div>
          </div>
          <div class="row">
            <div>
              <address>
                <strong>Payment Method:</strong><br>
                <?php echo $card_type . ' ending **** ' . $last_four_number; ?><br>
                <!-- output email from session -->
                <?php echo $email; ?><br>
                <!-- trangbeo@fatto.com<br> -->
              </address>
            </div>
            <div class="textright">
              <div></div>
              <address>
                <strong>Order Date:</strong><br>
                <!-- output date from session -->
                <?php echo date('F j, Y, g:i a'); ?><br><br>
              </address>
            </div>
          </div>
          <div class="row">
            <div>
              <h3>ORDER SUMMARY</h3>
              <table class="custom-table">
                <thead>
                  <tr class="line">
                    <td><strong>#</strong></td>
                    <td class="textcenter"><strong>BOOK</strong></td>
                    <td class="textcenter"><strong>QUANTITY</strong></td>
                    <td class="textright"><strong>PRICE</strong></td>
                    <td class="textright"><strong>SUBTOTAL</strong></td>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i = 0; $i < count($book); $i++) : ?>
                    <tr>
                      <td><?php echo $i + 1; ?></td>
                      <td><strong><?php echo $book[$i]; ?></strong></td>
                      <td class="textcenter"><?php echo $quantity[$i]; ?></td>
                      <td class="textcenter">$<?php echo $price[$i]; ?></td>
                      <td class="textright">$<?php echo $quantity[$i] * $price[$i]; ?></td>
                    </tr>
                  <?php endfor; ?>
                  <tr>
                    <td colspan="3"></td>
                    <td class="textright"><strong>Taxes</strong></td>
                    <td class="textright"><strong>N/A</strong></td>
                  </tr>
                  <tr>
                    <td colspan="3">
                    </td>
                    <td class="textright"><strong>Total</strong></td>
                    <td class="textright"><strong>$<?php echo $total; ?> </strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php include 'includes/footer.inc' ?>
</body>

</html>
