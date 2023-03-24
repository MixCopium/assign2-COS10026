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
    <!-- Receipt  receive input from  proccess_order.php -->
    <h1>Receipt</h1>
    <p>Thank you for your order. Your order details are shown below.</p>
    
    <section>
        <h2>Order Information</h2>
        <p>Order Number: <?php echo $orderNum; ?></p>
        <p>Order Date: <?php echo $orderDate; ?></p>
        <p>Order Type: <?php echo $orderType; ?></p>
    </section>

    <section>
        <h2>Customer Information</h2>
        <p>First Name: <?php echo $firstname; ?></p>
        <p>Last Name: <?php echo $lastname; ?></p>
        <p>Street: <?php echo $street; ?></p>
        <p>Suburb: <?php echo $suburb; ?></p>
        <p>State: <?php echo $state; ?></p>
        <p>Postcode: <?php echo $postcode; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone Number: <?php echo $phoneNum; ?></p>
    <p>Preferred Contact: <?php echo $contact; ?></p>
    </section>

    <section>
    <h2> Product Details</h2>
    <p>Book: <?php echo $book; ?></p>
    <p>Book Type: <?php echo $type; ?></p>
    <p>Comment: <?php echo $comment; ?></p>
    <p>Order Total: <?php echo $total; ?></p>
    <p>Order Status: <?php echo $status; ?></p>
    <p>Order Details: <?php echo $details; ?></p>
    </section>
    </main>
    <?php include 'includes/footer.inc'; ?>
    </body>
    </html>
