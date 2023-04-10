<article>
      <h2>Report</h2>
      <br>
        <div>
          <!-- time range filter form -->
          <form method="get" action="manager.php">
            <fieldset>
              <!-- get time range from previous input -->
            <?php
            if (isset($_GET["sd"])) {
              $sd = $_GET["sd"];
            } else {
              $sd = "";
            }
            if (isset($_GET["ed"])) {
              $ed = $_GET["ed"];
            } else {
              $ed = "";
            }
            date_default_timezone_set("Australia/Sydney");
                $current_date =  date("Y-m-d");
                
           
            // print the filter input with previous value kept
            echo '
            <label class="filter" for="start_date">From:</label>
            <input class="input_filter" id="start_date" type="date" max="'.$current_date.'"
              name="sd" value="' . $sd . '" >
            

              <label class="filter" for="end_date">to:</label>
              <input class="input_filter" id="end_date" type="date" max="'.$current_date.'"
                name="ed" value="' . $ed . '" >

                <input type="submit" id="submit" 
                                value="Apply">
            ';
          
          ?>
            </fieldset>

          
          </form>
        </div>
      <br>
        <table id="report">
          <tr>
            <th>Most popular</th>
            <th>Fulfilled</th>
            <th>Average Sale</th>
          </tr>   
          <tr>
            <td>
              <?php
                if (!$conn) {
                  echo "<p>Database connection failure</p>";
                } else {
                  
                  // sql to get the most popular product from the database (change with different dates entered)
                  $report_query_1 = "SELECT BOOK_NAME FROM (SELECT COUNT(ORDER_ID)*ORDER_QUANTITY as count, products.BOOK_NAME as BOOK_NAME FROM orders2 INNER JOIN products on products.PRODUCT_ID = orders2.PRODUCT_ID " .($sd!="" || $ed!="" ? " WHERE " : " ").($sd!="" ? " CAST(ORDER_TIME as date) >= CAST('$sd' as date) " : " ").($sd!="" && $ed!="" ? " AND " : " ").($ed!="" ? " CAST(ORDER_TIME as date) <= CAST('$ed' as date) " : " ").  " GROUP BY orders2.PRODUCT_ID order BY count DESC limit 1 ) a";
                  // echo $report_query_1;
                  $report_result_1 = @mysqli_query($conn, $report_query_1 );
                  // echo $report_result_1;
                  if (! mysqli_fetch_assoc($report_result_1)) {
                    echo "no order in this period";
                  }
                  $report_result_1 = @mysqli_query($conn, $report_query_1 );
                  while ($row = mysqli_fetch_assoc($report_result_1)) {
                    
                    
                      echo $row["BOOK_NAME"];

                    
                
                    
                    // echo $report_query_1;
                  }
                  
                }
                
              ?>
            </td>
            <td>
              <?php
                if (!$conn) {
                  echo "<p>Database connection failure</p>";
                } else {
                  
                  // sql to get the number of fulfilled order from the database (change with different dates entered)
                  $report_query_2 = "SELECT Count(products.BOOK_NAME) as count FROM orders2 INNER JOIN products on products.PRODUCT_ID = orders2.PRODUCT_ID WHERE ORDER_STATUS='fulfilled'".($sd!="" ? " AND CAST(ORDER_TIME as date) >= CAST('$sd' as date) " : " ").($ed!="" ? " AND CAST(ORDER_TIME as date) <= CAST('$ed' as date) " : " ").";";

                  $report_result_2 = @mysqli_query($conn, $report_query_2 );
                  while ($row = mysqli_fetch_assoc($report_result_2)) {
                    echo $row["count"];
                    // echo $report_query_2;
                  }
                  
                }
                
              ?>
            </td>
            <td>
              <?php
                if (!$conn) {
                  echo "<p>Database connection failure</p>";
                } else {
                  
                  // sql to get the average order the website receive per day from the database (change with different dates entered)
                  $report_query_3 = "SELECT (count*sum/(DATEDIFF(CAST(".($ed!="" ? "'$ed'" : " Now() ")." as date),CAST(".($sd!="" ? "'$sd'" : " MIN(ORDER_TIME) ")." as date)) + 1)) as avg FROM (SELECT COUNT(ORDER_ID) as count, ORDER_TIME, SUM(ORDER_QUANTITY) as sum FROM orders2 Where ORDER_STATUS = 'paid' ".($sd!="" || $ed!="" ? " AND " : " ").($sd!="" ? " CAST(ORDER_TIME as date) >= CAST('$sd' as date) " : " ").($sd!="" && $ed!="" ? " AND " : " ").($ed!="" ? " CAST(ORDER_TIME as date) <= CAST('$ed' as date) " : " ")." ) a;";



                  $report_result_3 = @mysqli_query($conn, $report_query_3 );
                  while ($row = mysqli_fetch_assoc($report_result_3)) {
                    if(isset($row["avg"])) {
                      echo $row["avg"];
                    }
                    
                    else {
                      echo "0";
                    }
                      
                    // echo $report_query_3;
                  }
                 
                  
                }
                
              ?>
            </td>
          </tr>

        </table>
    </article>