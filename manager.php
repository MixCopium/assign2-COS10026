<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- requirement head template -->
  <meta name="description" content="Receipt Page">
  <meta name="keywords" content="HTML, PHP, webpage">
  <meta name="author" content="Nguyen Duc Thinh, Nguyen Ha Huy Hoang">
  <!-- responsive setup -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
  <link rel="manifest" href="images/favico/site.webmanifest">
  <!-- style sheet link -->
  <link rel="stylesheet" href="./styles/enhancements.css">
  <link rel="stylesheet" href="./styles/styles.css">
  <title>Manager</title>
</head>

<body>
  <?php include 'includes/header.inc'; ?>
  <main id="manage">
    <h1>Manager</h1>
    <article>
      <h2>Order Information</h2>

      </details>
      <!-- get data from session of process_order.php -->
      <?php

      require_once("settings.php");

      $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
      );

      if (!$conn) {
        echo "<p>Database connection failure</p>";
      } else {
        $sql_table = "orders";
        if (isset($_GET["action"])) {
          $action = $_GET["action"];
        } else {
          $action = "";
        }

        if (isset($_GET["id"])) {
          $action_id = $_GET["id"];
        }

        if (isset($_GET["status"])) {
          $action_status = $_GET["status"];
        }

        if (isset($_GET["filname"])) {
          $filter_name = $_GET["filname"];
        } else {
          $filter_name = "";
        }

        if (isset($_GET["filter_book"])) {
          $filter_book = $_GET["filter_book"];
        } else {
          $filter_book = "";
        }

        if (isset($_GET["filter_status"])) {
          $filter_status = $_GET["filter_status"];
        } else {
          $filter_status = "";
        }
        $sort_query = "";
        if (isset($_GET["sort_cost"]) && strlen($_GET["sort_cost"]) != 0) {
          $sort_cost = $_GET["sort_cost"];
          if ($sort_cost === "sutd") {
            $sort_query = "ORDER BY ORDER_COST DESC";
          } else if ($sort_cost === "sdtu") {
            $sort_query = "ORDER BY ORDER_COST ASC";
          }
        } else {
          $sort_cost = "";
        }

        if ($action != "") {
          switch ($action) {
            case ("drop"):
              $drop_query = "delete FROM $sql_table WHERE ID = $action_id";
              $drop_result = @mysqli_query($conn, $drop_query);
              break;
            case ("update"):
              $update_query = "update $sql_table SET ORDER_STATUS = '$action_status' WHERE ID = $action_id";
              $update_result = @mysqli_query($conn, $update_query);
              break;
            default:
              break;
          }
        }

        echo '
                <details>
                <summary>Filter</summary>
                <form method="get" action="manager.php">
                    <fieldset>
                        <label class="filter" for="filter_name">Name:</label>
                          <input class="input_filter" id="filter_name" type="text"
                            name="filname" value="' . $filter_name . '" maxlength="40">
                            <label class="filter" for="filter_product">Product:</label>
                            <select id="filter_product" class="book" name="filter_book">
                                <option  value="Harry Potter and the half-blood prince - J.K Rowling" ' . ($filter_book == "Harry Potter and the half-blood prince - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the half-blood prince - J.K Rowling</option>
                                <option  value="Harry Potter and the Philosopher\'s Stone - J.K Rowling" ' . ($filter_book == "Harry Potter and the Philosopher\'s Stone - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the Philosopher\'s Stone - J.K Rowling</option>
                                <option  value="Harry Potter and the Chamber of Secrets - J.K Rowling"' . ($filter_book == "Harry Potter and the Chamber of Secrets - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the Chamber of Secrets - J.K Rowling</option>
                                <option  value="Harry Potter and the Order of the Phoenix - J.K Rowling"' . ($filter_book == "Harry Potter and the Order of the Phoenix - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the Order of the Phoenix - J.K Rowling</option>
                                <option  value=""' . ($filter_book == "" ? 'selected' : '') . '>All</option>
                              </select>

                              <label class="filter" for="filter_status">Status:</label>
                              <select name="filter_status" id="filter_status">
                            
                                <option value="Pening" ' . ($filter_status == "Pending" ? 'selected' : '') . '>Pending</option>

                                <option value="Fulfilled" ' . ($filter_status == "Fulfilled" ? 'selected' : '') . '>Fulfilled</option>
                                <option value="Paid" ' . ($filter_status == "Paid" ? 'selected' : '') . '>Paid</option>
                                <option value="Archived" ' . ($filter_status == "Archived" ? 'selected' : '') . '>Archived</option>
                                <option value="" ' . ($filter_status == "" ? 'selected' : '') . '>All</option>
                              </select>

                              <label class="filter" for="sort_cost">Sort by cost:</label>
                              <select name="sort_cost" id="sort_cost">
                            
                                <option value="" ' . ($sort_cost == "" ? 'selected' : '') . '>Default</option>

                                <option value="sutd" ' . ($sort_cost == "sutd" ? 'selected' : '') . '>Sort DESC</option>
                                <option value="sdtu" ' . ($sort_cost == "sdtu" ? 'selected' : '') . '>Sort ASC</option>
                                
                              </select>

                              <input type="submit" id="submit" 
                                value="Filter">
                    </fieldset>

                </form>
                </details>
                
                ';

        $query = "select ID, CUSTOMER_NAME, ORDER_PRODUCT, ORDER_QUANTITY,  ORDER_COST, ORDER_TIME,  ORDER_STATUS from $sql_table Where CUSTOMER_NAME like '$filter_name%' && ORDER_PRODUCT like '$filter_book%'&& ORDER_STATUS like '$filter_status%' ";

        if ($sort_cost != "") {
          $query .= $sort_query;
        }
        $result = @mysqli_query($conn, $query);
        if (!$result) {
          echo "<p>Something is wrong with ", $query, "</p>";
        } else {

          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["ID"];
            $cust_name = $row["CUSTOMER_NAME"];
            $order_product = $row["ORDER_PRODUCT"];
            $order_quantity = $row["ORDER_QUANTITY"];
            $order_cost = $row["ORDER_COST"];
            $order_time = $row["ORDER_TIME"];
            $order_status = $row["ORDER_STATUS"];


            echo '
                        <form id="drop_' . $id . '" method="get" action="manager.php" hidden>
                         <input type="text" name="action"  value="drop">
                         <input type="text" name="id"  value="' . $id . '">
                        </form>
                      ';
            echo '
                        <form id="update_' . $id . '" method="get" action="manager.php" hidden>
                         <input type="text" name="action"  value="update">
                         <input type="text" name="id"  value="' . $id . '">
                        </form>
                      ';
          }
          echo '
                  <table>
                  <tr>
                      <th>ID</th>
                      <th>Order Date</th>
                      <th>Product</th>
                      <th>Cost</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Drop</th>
                      <th>Change</th>
                  </tr>
                  
                  ';
          $result = @mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row["ID"];
            $cust_name = $row["CUSTOMER_NAME"];
            $order_product = $row["ORDER_PRODUCT"];
            $order_quantity = $row["ORDER_QUANTITY"];
            $order_cost = $row["ORDER_COST"];
            $order_time = $row["ORDER_TIME"];
            $order_status = $row["ORDER_STATUS"];
            echo '
                    <tr>
                        <td>' . $id . '</td>
                        <td>' . $order_time . '</td>
                        <td>' . $order_product . ' x' . $order_quantity . '</td>
                        <td>$' . $order_cost . '</td>
                        <td>' . $cust_name . '</td>
                        <td>
                          <select name="status" form="update_' . $id . '">
                            
                            <option value="Pening" ' . ($order_status == "Pending" ? 'selected' : '') . '>Pending</option>

                            <option value="Fulfilled" ' . ($order_status == "Fulfilled" ? 'selected' : '') . '>Fulfilled</option>
                            <option value="Paid" ' . ($order_status == "Paid" ? 'selected' : '') . '>Paid</option>
                            <option value="Archived" ' . ($order_status == "Archived" ? 'selected' : '') . '>Archived</option>
                          </select></td>
                        <td><input type="submit" value="Drop" class="no_button_style" form="drop_' . $id . '"></td>
                        <td><input type="submit" value="Update" class="no_button_style" form="update_' . $id . '"></td>
                    </tr> 
                    
                    ';
          }


          mysqli_free_result($result);
        }
        mysqli_close($conn);
      }



      ?>






      </table>

    </article>

  </main>
  <?php include 'includes/footer.inc' ?>
</body>

</html>