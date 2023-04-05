<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A simple product page">
    <meta name="keywords" content="HTML, simple, webpage">
    <meta name="author" content="Nguyen Ha Huy Hoang">

    <!-- responsive setup -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- logo link -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
    <link rel="manifest" href="images/favico/site.webmanifest">


    <!-- css style link -->
    <link rel="stylesheet" href="./styles/enhancements.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Product</title>
</head>

<body>
    <?php include 'includes/header.inc'; ?>

    <!-- main content -->
    <main id="product">
        <!-- title -->
        <h1>Books</h1>


        <!-- article about books on sale float to left -->
        <article class="float_object">
            <!-- heading of the article -->
            <h2 class="float_object_title">Special Sale</h2>
            <!-- the first book on sale -->
            <?php
             require_once ("settings.php");
            
             $conn = @mysqli_connect($host,
                 $user,
                 $pwd,
                 $sql_db
             );
 
             if (!$conn) {
                 echo "<p>Database connection failure</p>";
             } else {

                $sql_table = "products";
                
                

                

                $query = "select * from $sql_table";

                
                
                
                
                
                $result = @mysqli_query($conn, $query);
                if(!$result ) {
                    echo "<p class=\"wrong\">something is wrong with ",$query,"</p>";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["ID"];
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
                        $sum1 = $row["SUMMARY_1"];
                        $sum2 = $row["SUMMARY_2"];
                        $sum3 = $row["SUMMARY_3"];
                        $source = $row["SUM_SOURCE"];
                        $source_au = $row["SOURCE_AUTHOR"];
                        
                ?>
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
                    <a href="payment.php">Make Purchase</a>

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
            
            
            

        </article>

        <!-- recommendation on the aside section -->
        <aside class="recommendation">
            <!-- title of the aside -->
            <h3 class="rcm_area_name">Recommendation</h3>


            <!-- the first recommendation -->
            <div class="rcm_info">
                <!-- cover of the recommended book -->
                <img class="rcm_cover" src="images/products/HP6.jpg" alt="dummy">
                <!-- basic information about the recommended book -->
                <div class="rcm_detail">
                    <h3 class="rcm_bookname">Harry Potter and the half-blood
                        prince</h3>
                    <h4 class="rcm_author">J.K Rowling</h4>
                    <p class="rcm_price">$99.99</p>
                    <a class="rcm_button" href="product.html">See
                        More</a>
                </div>

            </div>

            <!-- the second recommendation -->
            <div class="rcm_info">
                <!-- the cover of the recommendation -->
                <img class="rcm_cover" src="images/products/HP6.jpg" alt="dummy">
                <div class="rcm_detail">
                    <h3 class="rcm_bookname">Harry Potter and the half-blood
                        prince</h3>
                    <h4 class="rcm_author">J.K Rowling</h4>
                    <p class="rcm_price">$99.99</p>
                    <a class="rcm_button" href="product.html">See
                        More</a>
                </div>

            </div>
        </aside>









    </main>
    <?php include 'includes/footer.inc'; ?>
</body>

</html>