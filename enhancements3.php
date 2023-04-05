<article>
      <h2>Report</h2>
      <br>
        <div>
          <form method="get" action="manager.php">
            <fieldset>
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

           

            echo '
            <label class="filter" for="start_date">From:</label>
            <input class="input_filter" id="start_date" type="date"
              name="sd" value="' . $sd . '" >
            

              <label class="filter" for="end_date">to:</label>
              <input class="input_filter" id="end_date" type="date"
                name="ed" value="' . $ed . '" >

                <input type="submit" id="submit" 
                                value="Apply">
            ';
          
          ?>
            </fieldset>

          
          </form>
        </div>
      <br>
        <table>
          <tr>
            <th>Most popular</th>
            <th>Fulfilled</th>
            <th>Average Order per Day</th>
          </tr>   
          <tr>
            <td>
              <?php
                if (!$conn) {
                  echo "<p>Database connection failure</p>";
                } else {
                  $sql_table = "orders";
                  $report_query_1 = "SELECT ORDER_PRODUCT FROM (SELECT COUNT(ID) as count, ORDER_PRODUCT FROM orders" .($sd!="" || $ed!="" ? " WHERE " : " ").($sd!="" ? " CAST(ORDER_TIME as date) >= CAST('$sd' as date) " : " ").($sd!="" && $ed!="" ? " AND " : " ").($ed!="" ? " CAST(ORDER_TIME as date) <= CAST('$ed' as date) " : " ").  " GROUP BY ORDER_PRODUCT order BY count DESC limit 1 ) a";

                  $report_result_1 = @mysqli_query($conn, $report_query_1 );
                  while ($row = mysqli_fetch_assoc($report_result_1)) {
                    echo $row["ORDER_PRODUCT"];
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
                  $sql_table = "orders";
                  $report_query_2 = "SELECT Count(ORDER_PRODUCT) as count FROM $sql_table WHERE ORDER_STATUS='fulfilled'".($sd!="" ? " AND CAST(ORDER_TIME as date) >= CAST('$sd' as date) " : " ").($ed!="" ? " AND CAST(ORDER_TIME as date) <= CAST('$ed' as date) " : " ").";";

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
                  $sql_table = "orders";
                  $report_query_3 = "SELECT (count/(DATEDIFF(CAST(".($ed!="" ? "'$ed'" : " Now() ")." as date),CAST(".($sd!="" ? "'$sd'" : " MIN(ORDER_TIME) ")." as date)) + 1)) as avg FROM (SELECT COUNT(ID) as count, ORDER_TIME FROM orders ".($sd!="" || $ed!="" ? " WHERE " : " ").($sd!="" ? " CAST(ORDER_TIME as date) >= CAST('$sd' as date) " : " ").($sd!="" && $ed!="" ? " AND " : " ").($ed!="" ? " CAST(ORDER_TIME as date) <= CAST('$ed' as date) " : " ")." ) a;";

                  $report_result_3 = @mysqli_query($conn, $report_query_3 );
                  while ($row = mysqli_fetch_assoc($report_result_3)) {
                    echo $row["avg"];
                    // echo $report_query_3;
                  }
                  
                }
                
              ?>
            </td>
          </tr>

        </table>
    </article>