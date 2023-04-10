<?php
             require_once ("settings.php");
            // conncet to the book database
             $conn = @mysqli_connect($host,
                 $user,
                 $pwd,
                 $sql_db
             );
 
             if (!$conn) {
                 echo "<p>Database connection failure</p>";
             } else {

                $sql_table = "products";
                
                

                
                // get all information from the product table
                $query = "select * from $sql_table";

                
                
                
                
                // get the information
                $result = @mysqli_query($conn, $query);
                if(!$result ) {
                    echo "<p class=\"wrong\">something is wrong with ",$query,"</p>";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // yeild all the values into local values
                        $id = $row["PRODUCT_ID"];
                        $bname = $row["BOOK_NAME"];
                        $author = $row["AUTHOR"];
                        $price = $row["PRICE"];
                        $cover1 = $row["COVER_1"];
                        $cover2 = $row["COVER_2"];
                        $publisher = $row["PUBLISHER"];
                        $genre = $row["GENRE"];
                        $book_type = explode(", ", $row["BOOK_TYPE"]);
                        $cover_type = explode(", ", $row["COVER_TYPE"]);
                        $chapter_list = explode(", ", $row["CHAPTER_LIST"]);
                        $sum1 = htmlspecialchars($row["SUMMARY_1"]);
                        $sum2 = htmlspecialchars($row["SUMMARY_2"]);
                        $sum3 = htmlspecialchars($row["SUMMARY_3"]);
                        $source = $row["SUM_SOURCE"];
                        $source_au = $row["SOURCE_AUTHOR"];
                        
                ?>

                <!-- print all the production information -->
                <section class="book_profile">
                <!-- book's cover image -->
                <div class="cover_container ">

                    <!-- creating check box for slider -->
                    <input type="radio" id="s<?php echo (($id-1)*4+1) ?>" name="num<?php echo $id ?>" checked>
                    <input type="radio" id="s<?php echo (($id-1)*4+2) ?>" name="num<?php echo $id ?>">
                    <input type="radio" id="s<?php echo (($id-1)*4+3) ?>" name="num<?php echo $id ?>">

                    <input type="radio" id="s<?php echo (($id-1)*4+4) ?>" name="num<?php echo $id ?>">

                    <!-- change image button-->
                    <label for="s<?php echo (($id-1)*4+3) ?>" class="link_2"> <img src="./images/products/LA.png" alt="left arrow"> </label>


                    <!-- 1st image of the product to show -->
                    <div class="slide_nav cover front">

                        <img class="cover_i" src="<?php echo $cover1 ?>" alt="dummy">


                    </div>
                    <!-- change image button-->
                    <label for="s<?php echo (($id-1)*4+4) ?>" class="link_2"> <img src="./images/products/RA.png" alt="right arrow"> </label>

                    <!-- change image button-->
                    <label for="s<?php echo (($id-1)*4+1) ?>" class="link_1"><img src="./images/products/LA.png" alt="left arrow"> </label>
                    <!-- 2nd image of the product to show -->
                    <div class="slide_nav cover  back">

                        <img class="cover_i" src="<?php echo $cover2 ?>" alt="dummy">

                    </div>
                    <!-- change image button-->
                    <label for="s<?php echo (($id-1)*4+2) ?>" class="link_1"> <img src="./images/products/RA.png" alt="right arrow"> </label>



                </div>
                <!-- basic information about the book -->
                <div class="book_detail">
                    <h2><?php echo $bname ?> - <?php echo $author?>
                    </h2>
                    <h3>$<?php echo $price ?></h3>
                    <form method="post" action="payment.php" id="<?php echo $id ?>_order" hidden>
                        <input type="text" name="book_order" value="<?php echo $bname ?>">
                    </form>
                    <input type="submit" value="Make Purchase" form="<?php echo $id ?>_order">

                    <!-- specifications about the book -->
                    <!--  (hidden in summary)  -->
                    <div>
                        <details class="spec">
                            <!-- hidden the specifications table -->
                            <summary>Specifications</summary>
                            <!-- specification table settings -->
                            <table>
                                <tr>
                                    <th>Title</th>
                                    <td><?php echo $bname ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Author</th>
                                    <td><?php echo $author ?></td>
                                </tr>

                                <tr>
                                    <th>Publisher</th>
                                    <td><?php echo $publisher ?></td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>$<?php echo $price ?></td>
                                </tr>

                                <tr>
                                    <th>Genre</th>
                                    <td>
                                    <?php echo $genre?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Book type</th>
                                    <td>
                                        <ul>
                                        <?php foreach($book_type as $bt ) {
                                            echo "
                                            <li>$bt</li>
                                            ";
                                        }?>
                                            
                                            
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cover type</th>
                                    <td>
                                        <ul>
                                        <?php foreach($cover_type as $ct ) {
                                            echo "
                                            <li>$ct</li>
                                            ";
                                        }?>
                                        </ul>
                                    </td>
                                </tr>

                            </table>
                        </details>
                    </div>
                    <!-- information about book's content -->
                    <div>
                        <details class="content_wrap">
                            <!-- content section title -->
                            <summary>Book Content</summary>

                            <div class="book_content">
                                <!-- container containt detail contain information -->
                                <div class="content_container">
                                    <!-- chapter list  -->
                                    <div class="chapter_list">
                                        <h3>Chapter list</h3>

                                        <ol class="chapli">
                                        <?php foreach($chapter_list as $cl ) {
                                            echo "
                                            <li>$cl</li>
                                            ";
                                        }?>
                                        </ol>


                                    </div>
                                    <!-- content summary -->
                                    <div class="summary">
                                        <h3>Summary</h3>
                                        <p><?php echo $sum1 ?></p>
                                        <p><?php echo $sum2 ?></p>
                                        <p><?php echo $sum3 ?></p>
                                        <!-- source of the summary -->
                                        <p>Source: <a href="<?php echo $source ?>"><?php echo $source_au ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>


                </div>




            </section>

             <?php
                    }
                }
             }
             
             ?>