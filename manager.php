<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- requirement head template -->
  <meta name="description" content="Receipt Page">
  <meta name="keywords" content="HTML, PHP, webpage">
  <meta name="author" content="Nguyen Duc Thinh, Nguyen Ha Huy Hoang,Nguyen Manh Duc">
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
      <?php


        // connect to the database
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
          
          

          // get action information from hidden form input
          if (isset($_GET["action"])) {
            $action = $_GET["action"];
          } else {
            $action = "";
          }
          // get id of the order from hidden form input
          if (isset($_GET["id"])) {
            $action_id = $_GET["id"];
          }
          // get status information from hidden form input
          if (isset($_GET["status"])) {
            $action_status = $_GET["status"];
          }
          // get filtered name information from the filter input
          if (isset($_GET["filname"])) {
            $filter_name = $_GET["filname"];
          } else {
            $filter_name = "";
          }
          // get filtered book name information from the filter input
          if (isset($_GET["filter_book"])) {
            $filter_book = $_GET["filter_book"];
          } else {
            $filter_book = "";
          }
          // get filtered input information from the filter input
          if (isset($_GET["filter_status"])) {
            $filter_status = $_GET["filter_status"];
          } else {
            $filter_status = "";
          }

          // get sort action from filter input
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
          
          // prepare and run query based on input action from hidden form
          if ($action != "") {
            switch ($action) {
              case ("drop"):
                $drop_query = "delete FROM orders2 WHERE ORDER_ID = $action_id";
                $drop_result = @mysqli_query($conn, $drop_query);
                break;
              case ("update"):
                $update_query = "update orders2 SET ORDER_STATUS = '$action_status' WHERE ORDER_ID = $action_id";
                // echo $update_query;
                $update_result = @mysqli_query($conn, $update_query);
                break;
              default:
                break;
            }
          }
        }

    // report table
    include_once("enhancements3.php");
    ?>

    

    <article>
      <h2>Order Information</h2>

      </details>
      
      <?php

      
      // check if this part can access the database
      if (!$conn) {
        echo "<p>Database connection failure</p>";
      } else {
        
      //  print filter form
        echo '
                <details>
                <summary>Filter</summary>
                <form method="get" action="manager.php">
                    <fieldset>
                    
                        <label class="filter" for="filter_name">Name:</label>
                          <input class="input_filter" id="filter_name" type="text"
                            name="filname" value="' . $filter_name . '" maxlength="40">
                            <label class="filter" for="filter_product">Product:</label>
                            <select id="filter_product" class="input_filter" name="filter_book">
                                <option  value="Harry Potter and the half-blood prince - J.K Rowling" ' . ($filter_book == "Harry Potter and the half-blood prince - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the half-blood prince - J.K Rowling</option>
                                <option  value="Harry Potter and the Philosopher" ' . ($filter_book == "Harry Potter and the Philosopher" ? 'selected' : '') . '>Harry Potter and the Philosopher\'s Stone - J.K Rowling</option>
                                <option  value="Harry Potter and the Chamber of Secrets - J.K Rowling"' . ($filter_book == "Harry Potter and the Chamber of Secrets - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the Chamber of Secrets - J.K Rowling</option>
                                <option  value="Harry Potter and the Order of the Phoenix - J.K Rowling"' . ($filter_book == "Harry Potter and the Order of the Phoenix - J.K Rowling" ? 'selected' : '') . '>Harry Potter and the Order of the Phoenix - J.K Rowling</option>
                                <option  value=""' . ($filter_book == "" ? 'selected' : '') . '>All</option>
                              </select>

                              <label class="filter" for="filter_status">Status:</label>
                              <select name="filter_status" id="filter_status" class="input_filter">
                            
                                <option value="Pending" ' . ($filter_status == "Pending" ? 'selected' : '') . '>Pending</option>

                                <option value="Fulfilled" ' . ($filter_status == "Fulfilled" ? 'selected' : '') . '>Fulfilled</option>
                                <option value="Paid" ' . ($filter_status == "Paid" ? 'selected' : '') . '>Paid</option>
                                <option value="Archived" ' . ($filter_status == "Archived" ? 'selected' : '') . '>Archived</option>
                                <option value="" ' . ($filter_status == "" ? 'selected' : '') . '>All</option>
                              </select>

                              <label class="filter" for="sort_cost">Sort by cost:</label>
                              <select class = "input_filter" name="sort_cost" id="sort_cost">
                            
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
        // sql to get information from the database including for filter
        $query = "select ORDER_ID as ORDER_ID, customers.CUSTOMER_NAME as CUSTOMER_NAME, products.BOOK_NAME as ORDER_PRODUCT, ORDER_QUANTITY,  ORDER_COST, ORDER_TIME,  ORDER_STATUS from orders2 INNER JOIN customers on customers.CUSTOMER_ID = orders2.CUSTOMER_ID INNER JOIN products on products.PRODUCT_ID = orders2.PRODUCT_ID Where customers.CUSTOMER_NAME like '$filter_name%' && products.BOOK_NAME like '$filter_book%'&& orders2.ORDER_STATUS like '$filter_status%'";
        // echo $query;
        // add sort sql if sort is set
        if ($sort_cost != "") {
          $query .= $sort_query;
        }
        // run sql
        $result = @mysqli_query($conn, $query);
        if (!$result) {
          echo "<p>Something is wrong with ", $query, "</p>";
        } else {

          while ($row = mysqli_fetch_assoc($result)) {
            // get value from the run sql
            $id = $row["ORDER_ID"];
            // echo $id;
            $cust_name = $row["CUSTOMER_NAME"];
            $order_product = $row["ORDER_PRODUCT"];
            $order_quantity = $row["ORDER_QUANTITY"];
            
            $order_cost = $row["ORDER_COST"];
            $order_time = $row["ORDER_TIME"];
            $order_status = $row["ORDER_STATUS"];

            // print hidden from with pre-defined value from 1 page interaction
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
          // run the sql again to get the information
          $result = @mysqli_query($conn, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            // get the value out
            $id = $row["ORDER_ID"];
            
            $cust_name = $row["CUSTOMER_NAME"];
            $order_product = $row["ORDER_PRODUCT"];
            $order_quantity = $row["ORDER_QUANTITY"];
            $order_cost = $row["ORDER_COST"];
            $order_time = $row["ORDER_TIME"];
            $order_status = $row["ORDER_STATUS"];

            // print all the record into a table
            echo '
                    <tr>
                        <td>' . $id . '</td>
                        <td>' . $order_time . '</td>
                        <td>' . $order_product . ' x' . $order_quantity . '</td>
                        <td>$' . $order_cost . '</td>
                        <td>' . $cust_name . '</td>
                        <td>
                          <select name="status" form="update_' . $id . '">
                            
                            <option value="Pending" ' . ($order_status == "Pending" ? 'selected' : '') . '>Pending</option>

                            <option value="Fulfilled" ' . ($order_status == "Fulfilled" ? 'selected' : '') . '>Fulfilled</option>
                            <option value="Paid" ' . ($order_status == "Paid" ? 'selected' : '') . '>Paid</option>
                            <option value="Archived" ' . ($order_status == "Archived" ? 'selected' : '') . '>Archived</option>
                          </select></td>
                        <td class="drop"><label class="label_du" for="drop_sub_'.$id.'"><img class="manage_icon" src="./images/manage/cancel.png" alt="drop"></label> <input id=drop_sub type="submit" value="Drop" class="no_button_style" form="drop_' . $id . '"></td>
                        <td class="update" ><label class="label_du" for="update_sub_'.$id.'"><img class="manage_icon" src="./images/manage/edit.png" alt="update"></label><input id="update_sub" type="submit" value="Update"  class="no_button_style" form="update_' . $id . '"></td>
                    </tr> 
                    
                    ';
          }

          
          // disconnect to database
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
