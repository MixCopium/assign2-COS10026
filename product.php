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
            <section class="book_profile">
                <!-- book's cover image -->
                <div class="cover_container ">

                    <!-- creating check box for slider -->
                    <input type="radio" id="s1" name="num" checked>
                    <input type="radio" id="s2" name="num">
                    <input type="radio" id="s3" name="num">

                    <input type="radio" id="s4" name="num">

                    <!-- change image button-->
                    <label for="s3" class="link_2"> <img src="./images/products/LA.png" alt="left arrow"> </label>


                    <!-- 1st image of the product to show -->
                    <div class="slide_nav cover front">

                        <img class="cover_i" src="images/products/HP6.jpg" alt="dummy">


                    </div>
                    <!-- change image button-->
                    <label for="s4" class="link_2"> <img src="./images/products/RA.png" alt="right arrow"> </label>

                    <!-- change image button-->
                    <label for="s1" class="link_1"><img src="./images/products/LA.png" alt="left arrow"> </label>
                    <!-- 2nd image of the product to show -->
                    <div class="slide_nav cover  back">

                        <img class="cover_i" src="images/products/HP6B.jpg" alt="dummy">

                    </div>
                    <!-- change image button-->
                    <label for="s2" class="link_1"> <img src="./images/products/RA.png" alt="right arrow"> </label>



                </div>
                <!-- basic information about the book -->
                <div class="book_detail">
                    <h2>Harry Potter and the half-blood prince - J.K Rowling
                    </h2>
                    <h3>$99.99</h3>
                    <a href="enquire.html">Make Purchase</a>

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
                                    <td>Harry Potter and the half-blood prince
                                    </td>
                                </tr>

                                <tr>
                                    <th>Author</th>
                                    <td>J.K Rowling</td>
                                </tr>

                                <tr>
                                    <th>Publisher</th>
                                    <td>Bloomsbury (UK)</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>$99.99</td>
                                </tr>

                                <tr>
                                    <th>Genre</th>
                                    <td>
                                        Mystery, School, Novel
                                    </td>
                                </tr>
                                <tr>
                                    <th>Book type</th>
                                    <td>
                                        <ul>
                                            <li>E-book</li>
                                            <li>Physical</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cover type</th>
                                    <td>
                                        <ul>
                                            <li>Hardback</li>
                                            <li>Paperback</li>
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
                                            <li>The Other Minister.</li>
                                            <li>Spinner's End.</li>
                                            <li>Will and Won't.</li>
                                            <li>Horace Slughorn.</li>
                                            <li>An Excess of Phlegm.</li>
                                            <li>Draco's Detour.</li>
                                            <li>The Slug Club.</li>
                                            <li>Snape Victorious.</li>
                                        </ol>


                                    </div>
                                    <!-- content summary -->
                                    <div class="summary">
                                        <h3>Summary</h3>
                                        <p>In this book, Harry Potter learns a
                                            lot about Lord Voldemort's past, and
                                            Harry Potter prepares for the final
                                            battle against his nemesis with the
                                            help of Headmaster Dumbledore. But
                                            in that time, Voldemort returns to
                                            power, and makes a plan to destroy
                                            Harry. So, Harry Potter tries to
                                            destroy Voldemort first, but for
                                            that, Harry must collect all parts
                                            of his soul. Voldemort had split his
                                            soul into pieces, so that he would
                                            never be totally destroyed, and now
                                            Harry has to destroy all the pieces,
                                            so Harry sets out with Dumbledore to
                                            find the Horcruxes.</p>
                                        <p>At a memorable moment, near the
                                            beginning, Hermione gets very angry
                                            at Harry because he starts doing
                                            very good in the potions class.
                                            Harry starts doing so well after he
                                            finds the “Advanced Potion-Making”
                                            book that was filled with quicker
                                            ways to make potions. It was
                                            personally improved by Professor
                                            Snape, and then nicknamed the “Half
                                            Blood Prince”.</p>
                                        <p>This novel can definitely petrify you
                                            as well, like in one part, Harry and
                                            Dumbledore go out to find the 1st
                                            Horcrux, where Dumbledore is forced
                                            to drink the Drink of Despair, which
                                            is a mysterious potion that makes a
                                            wizard very vulnerable and weak. So,
                                            this potion is meant for protecting
                                            something very important.</p>
                                        <!-- source of the summary -->
                                        <p>Source: <a href="https://ppld.org/book-reviews/harry-potter-and-half-blood-prince-3">Gurman</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>


                </div>




            </section>

            <!-- the second book on sale -->
            <section class="book_profile">
                <!-- book's cover image -->
                <div class="cover_container ">

                    <!-- checkboxes for slider -->
                    <input type="radio" id="s9" name="num1" checked>
                    <input type="radio" id="s10" name="num1">
                    <input type="radio" id="s11" name="num1">
                    <input type="radio" id="s12" name="num1">

                    <!-- change image button -->
                    <label for="s11" class="link_2"> <img src="./images/products/LA.png" alt="left arrow"> </label>
                    <!-- 1st image to display -->
                    <div class="slide_nav cover front">

                        <img class="cover_i" src="images/products/HP1.jpg" alt="dummy">


                    </div>
                    <!-- change image button -->
                    <label for="s12" class="link_2"> <img src="./images/products/RA.png" alt="right arrow"> </label>

                    <!-- change image button -->
                    <label for="s9" class="link_1"><img src="./images/products/LA.png" alt="left arrow"> </label>

                    <!-- 2nd image to display -->
                    <div class="slide_nav cover  back">

                        <img class="cover_i" src="images/products/HP1B.jpg" alt="dummy">

                    </div>
                    <!-- change image button -->
                    <label for="s10" class="link_1"> <img src="./images/products/RA.png" alt="right arrow"> </label>



                </div>
                <!-- basic information about the book -->
                <div class="book_detail">
                    <h2>Harry Potter and the Philosopher's Stone - J.K Rowling
                    </h2>
                    <h3>$99.99</h3>
                    <a href="enquire.html">Make Purchase</a>

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
                                    <td>Harry Potter and the Philosopher's Stone
                                    </td>
                                </tr>

                                <tr>
                                    <th>Author</th>
                                    <td>J.K Rowling</td>
                                </tr>

                                <tr>
                                    <th>Publisher</th>
                                    <td>Bloomsbury (UK)</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>$99.99</td>
                                </tr>

                                <tr>
                                    <th>Genre</th>
                                    <td>
                                        Mystery, School, Novel
                                    </td>
                                </tr>
                                <tr>
                                    <th>Book type</th>
                                    <td>
                                        <ul>
                                            <li>E-book</li>
                                            <li>Physical</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cover type</th>
                                    <td>
                                        <ul>
                                            <li>Hardback</li>
                                            <li>Paperback</li>
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
                                            <li>The Boy Who Lived.</li>
                                            <li>The Vanishing Glass.</li>
                                            <li>The Letters From No One.</li>
                                            <li>The Keeper of the Keys.</li>
                                            <li>Diagon Alley.</li>
                                            <li>The Journey From Platform Nine and Three Quarters.</li>
                                            <li>The Sorting Hat.</li>
                                            <li>The Potions Master.</li>
                                        </ol>


                                    </div>
                                    <!-- content summary -->
                                    <div class="summary">
                                        <h3>Summary</h3>
                                        <p>The book is about 11 year old Harry Potter, who receives a letter saying that he is invited to attend Hogwarts, school of witchcraft and wizardry. He then learns that a powerful wizard and his minions are after the sorcerer’s stone that will make this evil wizard immortal and undefeatable. Harry decides to go after the sorcerer’s stone before the wizard reaches it, but his loyal friends, Hermione and Ron don’t let Harry face this danger alone.</p>
                                        <p>This book is full of fantasies and imagination like at one point, Harry Potter is asked to catch a flying golden ball while flying on his broomstick. Eventually Harry Potter stands on his broomstick and tries to reach for the ball, but he falls off the broomstick in a very tense moment. He unexpectedly throws up the golden ball winning the game for his team.</p>

                                        <!-- source of the summary -->
                                        <p>Source: <a href="https://ppld.org/book-reviews/harry-potter-and-sorcerers-stone-8">Gurman</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>


                </div>




            </section>
            <!-- the third book on sale -->
            <section class="book_profile">
                <!-- book's cover image -->
                <div class="cover_container ">
                    <!-- checkboxes for slider -->
                    <input type="radio" id="s13" name="num2" checked>
                    <input type="radio" id="s14" name="num2">
                    <input type="radio" id="s15" name="num2">

                    <input type="radio" id="s16" name="num2">

                    <!-- change image button -->
                    <label for="s15" class="link_2"> <img src="./images/products/LA.png" alt="left arrow"> </label>
                    <!-- 1st image to display -->
                    <div class="slide_nav cover front">

                        <img class="cover_i" src="images/products/HP2.jpg" alt="dummy">


                    </div>
                    <!-- change image button -->
                    <label for="s16" class="link_2"> <img src="./images/products/RA.png" alt="right arrow"> </label>

                    <!-- change image button -->
                    <label for="s13" class="link_1"><img src="./images/products/LA.png" alt="left arrow"> </label>

                    <!-- 2nd image to display -->
                    <div class="slide_nav cover  back">

                        <img class="cover_i" src="images/products/HP2B.jpg" alt="dummy">

                    </div>
                    <!-- change image button -->
                    <label for="s14" class="link_1"> <img src="./images/products/RA.png" alt="right arrow"> </label>



                </div>
                <!-- basic information about the book -->
                <div class="book_detail">
                    <h2>Harry Potter and the Chamber of Secrets - J.K Rowling
                    </h2>
                    <h3>$99.99</h3>
                    <a href="enquire.html">Make Purchase</a>

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
                                    <td>Harry Potter and the Chamber of Secrets
                                    </td>
                                </tr>

                                <tr>
                                    <th>Author</th>
                                    <td>J.K Rowling</td>
                                </tr>

                                <tr>
                                    <th>Publisher</th>
                                    <td>Bloomsbury (UK)</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>$99.99</td>
                                </tr>

                                <tr>
                                    <th>Genre</th>
                                    <td>
                                        Mystery, School, Novel
                                    </td>
                                </tr>
                                <tr>
                                    <th>Book type</th>
                                    <td>
                                        <ul>
                                            <li>E-book</li>
                                            <li>Physical</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cover type</th>
                                    <td>
                                        <ul>
                                            <li>Hardback</li>
                                            <li>Paperback</li>
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
                                            <li>The Worst Birthday.</li>
                                            <li>Dobby's Warning.</li>
                                            <li>The Burrow.</li>
                                            <li>At Flourish and Blotts.</li>
                                            <li>The Whomping Willow.</li>
                                            <li>Gilderoy Lockhart.</li>
                                            <li>Mudbloods and Murmurs.</li>
                                            <li>The Deathday Party.</li>
                                        </ol>


                                    </div>
                                    <!-- content summary -->
                                    <div class="summary">
                                        <h3>Summary</h3>
                                        <p>It is the second book in J.K Rowling's fantastic book series Harry Potter. 12 year old Harry has just come back from Hogwarts School of Witchcraft and Wizardry to spend a dreadful summer at Number 4 Privit Drive. Little does he know his summer is about to get worse. Uncle Vernon is expecting to get one of the best deals of his life during a visit from the Masons. Unfortunately it doesn't go as planned when a house elf shows up in Harrys bedroom with an ominous message. The elf proceeds to try to get Harry expelled from Hogwarts by dropping a pudding on Mrs. Masons head. Uncle Vernon puts bars on Harrys window to stop him form getting out. Harry is in despair when the Ron (his best friend), Fred, and George(Ron's twin brothers) Weasley save him from the clutches of his aunt an uncle and he spend the restof the summer with them.</p>
                                        <p>Harry is back at Hogwarts after an eventful journey. He's ready to start a new peaceful year at Hogwarts. That doesn't go to plan when he starts hearing a mysterious voice in the school corridors.</p>
                                        <p>Harry, Ron, and Hermione partake on a amazing and thrilling journey to uncover who is petrifying the students.</p>
                                        <!-- source of the summary -->
                                        <p>Source: <a href="https://ppld.org/book-reviews/harry-potter-and-chamber-secrets-2">Katie</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>


                </div>




            </section>
            <!-- the fourth book on sale -->
            <section class="book_profile">
                <!-- book's cover image -->
                <div class="cover_container ">
                    <!-- checkboxes for slider -->
                    <input type="radio" id="s5" name="num3" checked>
                    <input type="radio" id="s6" name="num3">
                    <input type="radio" id="s7" name="num3">

                    <input type="radio" id="s8" name="num3">

                    <!-- change image button -->
                    <label for="s7" class="link_2"> <img src="./images/products/LA.png" alt="left arrow"> </label>

                    <!-- 1st image to display -->
                    <div class="slide_nav cover front">

                        <img class="cover_i" src="images/products/HP5.jpg" alt="dummy">


                    </div>
                    <!-- change image button -->
                    <label for="s8" class="link_2"> <img src="./images/products/RA.png" alt="right arrow"> </label>

                    <!-- change image button -->
                    <label for="s5" class="link_1"><img src="./images/products/LA.png" alt="left arrow"> </label>

                    <!-- 2nd image to display -->
                    <div class="slide_nav cover  back">

                        <img class="cover_i" src="images/products/HP5B.jpg" alt="dummy">

                    </div>
                    <!-- change image button -->
                    <label for="s6" class="link_1"> <img src="./images/products/RA.png" alt="right arrow"> </label>



                </div>
                <!-- basic information about the book -->
                <div class="book_detail">
                    <h2>Harry Potter and the Order of the Phoenix - J.K Rowling
                    </h2>
                    <h3>$99.99</h3>
                    <a href="enquire.html">Make Purchase</a>

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
                                    <td>Harry Potter and the Order of the Phoenix
                                    </td>
                                </tr>

                                <tr>
                                    <th>Author</th>
                                    <td>J.K Rowling</td>
                                </tr>

                                <tr>
                                    <th>Publisher</th>
                                    <td>Bloomsbury (UK)</td>
                                </tr>

                                <tr>
                                    <th>Price</th>
                                    <td>$99.99</td>
                                </tr>

                                <tr>
                                    <th>Genre</th>
                                    <td>
                                        Mystery, School, Novel
                                    </td>
                                </tr>
                                <tr>
                                    <th>Book type</th>
                                    <td>
                                        <ul>
                                            <li>E-book</li>
                                            <li>Physical</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cover type</th>
                                    <td>
                                        <ul>
                                            <li>Hardback</li>
                                            <li>Paperback</li>
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
                                            <li>Dudley Demented.</li>
                                            <li>A Peck of Owls.</li>
                                            <li>The Advance Guard.</li>
                                            <li>Number Twelve Grimmauld Place.</li>
                                            <li>The Order of the Phoenix.</li>
                                            <li>The Noble and Most Ancient House of Black.</li>
                                            <li>The Ministry of Magic.</li>
                                            <li>The Hearing.</li>
                                        </ol>


                                    </div>
                                    <!-- content summary -->
                                    <div class="summary">
                                        <h3>Summary</h3>
                                        <p>This book trails Harry Potter, who is visited by a group of wizards and then goes to Sirius Black’s house, which is the headquarters of the Order of the Phoenix. The Order of the Phoenix is a group of wizards, led by Hogwarts headmaster Dumbledore himself. This group is dedicated to making sure that Voldemort never rises to power ever again. But the Order has to operate in secrecy under the radar of the Ministry of Magic.</p>
                                        <p>This novel is quite capable of giving you the chills, like in one part Harry is forced to write with the Black Quill, an invention of the gruesome Dolores Umbridge. The Black Quill is a torture device, because it does not require ink, it writes with the blood of the person who’s using it. This quill will scar the back of your hand, and if you continuously keep using it, the back of your hand will have a permanent scar.</p>
                                        <p>But this book has its share of adventure too, like in one part, Harry Potter has to race to the Ministry of Magic headquarters, but Harry doesn't take a car, he takes a Thestrals which is just a flying horse. Harry Potter also uses the power of teleportation by teleporting around, fireplace to fireplace.</p>
                                        <!-- source of the summary -->
                                        <p>Source: <a href="https://ppld.org/book-reviews/harry-potter-and-order-phoenix-1">Gurman</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>


                </div>




            </section>
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