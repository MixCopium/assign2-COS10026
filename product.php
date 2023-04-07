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
                require_once("enhancements2.php");
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
                    <a class="rcm_button" href="product.php">See
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
                    <a class="rcm_button" href="product.php">See
                        More</a>
                </div>

            </div>
        </aside>









    </main>
    <?php include 'includes/footer.inc'; ?>
</body>

</html>