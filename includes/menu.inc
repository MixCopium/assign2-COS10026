<?php
  // Get the current page name
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- nav section -->
<div class="collapse navbar_collapse" id="navbarNav">
  <ul>
    <li class="nav_item">
      <a class="nav-link <?php if ($currentPage == 'product.php') echo 'active'; ?>" href="product.php">Main Products</a>
    </li>
    <li class="nav_item">
      <a class="nav-link <?php if ($currentPage == 'payment.php') echo 'active'; ?>" href="payment.php">Payment</a>
    </li>
    <li class="nav_item">
      <a class="nav-link <?php if ($currentPage == 'about.php') echo 'active'; ?>" href="about.php">About Me</a>
    </li>
    <li class="nav_item">
      <a class="nav-link <?php if ($currentPage == 'manager.php') echo 'active'; ?>" href="manager.php">Manager</a>
    </li>
    <li class="nav_item">
      <a class="nav-link <?php if ($currentPage == 'enhancements.php') echo 'active'; ?>" href="enhancements.php">Enhancements</a>
    </li>
  </ul>
</div>