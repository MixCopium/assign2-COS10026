<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A simple about page">
    <meta name="keywords" content="HTML, simple, webpage">
    <meta name="author" content="Nguyen Manh Duc">

     <!-- responsive setup -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- site img -->
     <link rel="apple-touch-icon" sizes="180x180"
        href="images/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="images/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="images/favico/favicon-16x16.png">
    <link rel="manifest" href="images/favico/site.webmanifest">

    <!-- style sheet linked -->
    <link rel="stylesheet" href="./styles/enhancements.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>About Us</title>
</head>

<body>
<?php include 'includes/header.inc'; ?>   
       <!-- main content -->
    <main id="about">
        <!-- page title -->
        <h1>About Us</h1>

        <!-- member 1 article -->
        <article class="aboutpage">
            <!-- article title -->
            <h2>Member 1</h2>
            <!-- member img -->
            <figure>
                <img class="profile_picture_1" src="images/about/NguyenDuc.jpg"
                    alt="dummy">
            </figure>

            <!-- member detail -->
            <section class="personaldetail">
                <h3 class="hello">Hi there, I'm Manh Duc </h3>
                <p class="major">Majoring in <span class="name">Computer
                        Science</span></p>
                <dl>
                    <dt>Personal details</dt>
                    <dd>Name: Nguyen Manh Duc</dd>
                    <dd>Student ID:103792724</dd>
                    <dd>Email : <a href="mailto:103792724@student.swin.edu.au"
                            target="_blank">103792724@student.swin.edu.au</a>
                    </dd>
                    <dd>Hobbies: writing and painting, fantasy and thriller,
                        video games, reading and coding</dd>
                </dl>

                <!-- link to jump to member time table -->
                <a href="#swtb_1" class="btn">Look at my Swinburne timetable</a>
            </section>

            <!-- time table -->
            <section class="ttble" id="table_1">
                <!-- time table title -->
                <h2 class="swtb"><span class="ti">THIS IS</span> MY SWINBURNE
                    TIMETABLE!</h2>
                    <!-- div to reposition table -->
                <div class="time">
                    <!-- table set up -->
                    <table class="center" id="swtb_1">
                        <tr>
                            <th>DAY/HRS</th>
                            <th>8:00 - 9:00</th>
                            <th>9:00 - 10:00</th>
                            <th>10:00 - 11:00</th>
                            <th>11:00 - 12:00</th>
                            <th>12:00 - 13:00</th>
                            <th>13:00 - 14:00</th>
                            <th>14:00 - 15:00</th>
                            <th>15:00 - 16:00</th>
                            <th>16:00 - 17:00</th>
                            <th>17:00 - 18:00</th>
                        </tr>
                        <tr>
                            <th>MON</th>
                            <td></td>
                            <td></td>
                            <th class="lunch">LUNCH</th>
                            <td class="club" colspan="4">Club Activities</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TUE</th>

                            <td class="tne10006" colspan="4">TNE10006</td>
                            <th class="lunch">LUNCH</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>WED</th>
                            <td class="tne10006" colspan="4">TNE10006</td>

                            <td></td>
                            <td class="lunch" rowspan="4">L<br>U<br>N<br>C<br>H
                            </td>
                            <td></td>
                            <td class="tne10006" colspan="2">TNE10006</td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>THU</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FRI</th>
                            <td class="cos10026" colspan="4">COS10026</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SAT</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </section>
        </article>


        <!-- member 2 article -->
        <article class="aboutpage">
            <!-- article title -->
            <h2>Member 2</h2>
            <!-- member image -->
            <figure>
                <img class="profile_picture_1" src="images/about/nobwannabe.jpg"
                    alt="dummy">
            </figure>

            <!-- member detail -->
            <section class="personaldetail">
                <h3 class="hello">Hi there, I'm Nguyen Ha Huy Hoang </h3>
                <p class="major">Majoring in <span class="name">Computer
                        Science</span></p>
                <dl>
                    <dt>Personal details</dt>
                    <dd>Name: Nguyen Ha Huy Hoang</dd>
                    <dd>Student ID:103487444</dd>
                    <dd>Email : <a href="mailto:103792724@student.swin.edu.au"
                            target="_blank">103487444@student.swin.edu.au</a>
                    </dd>
                    <dd>Hobbies: Studying ML, GFL, and Linear Algebra. </dd>
                </dl>
                <!-- link to member time table -->
                <a href="#swtb_2" class="btn">Look at my Swinburne timetable</a>
            </section>
            <!-- member time table -->
            <section class="ttble" id="table_2">

                <!-- time table title -->
                <h2 class="swtb"><span class="ti">THIS IS</span> MY SWINBURNE
                    TIMETABLE!</h2>
                    <!-- time table reposition div -->
                <div class="time">
                    <!-- time table setup -->
                    <table class="center" id="swtb_2">
                        <tr>
                            <th>DAY/HRS</th>
                            <th>8:00 - 9:00</th>
                            <th>9:00 - 10:00</th>
                            <th>10:00 - 11:00</th>
                            <th>11:00-12:00</th>
                            <th>12:00 - 13:00</th>
                            <th>13:00 - 14:00</th>
                            <th>14:00 - 15:00</th>
                            <th>15:00 - 16:00</th>
                            <th>16:00 - 17:00</th>
                            <th>17:00 - 18:00</th>
                        </tr>
                        <tr>
                            <th>MON</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td class="lunch" rowspan="6">L<br>U<br>N<br>C<br>H
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TUE</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>


                            <td class="tne10006" colspan="4">TNE10006</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>WED</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>THU</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FRI</th>
                            <td class="cos10026" colspan="4">COS10026</td>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SAT</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="cos20019" colspan="4">COS20019</td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </section>
        </article>

        <!-- member 3 article -->
        <article class="aboutpage">
            <!-- article title -->
            <h2>Member 3</h2>

            <!-- member image -->
            <figure>
                <img class="profile_picture_1" src="images/about/Boong.jpg"
                    alt="dummy">
            </figure>

            <!-- member detail -->
            <section class="personaldetail">
                <h3 class="hello">Hi there, I'm Binh </h3>
                <p class="major">Majoring in <span class="name">Computer
                        Science</span></p>
                <dl>
                    <dt>Personal details</dt>
                    <dd>Name: Nguyen Gia Binh</dd>
                    <dd>Student ID:104219428</dd>
                    <dd>Email : <a href="mailto:104219428@student.swin.edu.au"
                            target="_blank">104219428@student.swin.edu.au</a>
                    </dd>
                    <dd>Hobbies: Canivorous plant collecting, taking care of Tarantula</dd>
                </dl>

            <!-- button to jump to member time table -->
                <a href="#swtb_3" class="btn">Look at my Swinburne timetable</a>
            </section>
            <!-- time table section -->
            <section class="ttble" id="table_3">
                <!-- time table title -->
                <h2 class="swtb"><span class="ti">THIS IS</span> MY SWINBURNE
                    TIMETABLE!</h2>
                    <!-- time table reposition -->
                <div class="time">
                    <!-- time table setup -->
                    <table class="center" id="swtb_3">
                        <tr>
                            <th>DAY/HRS</th>
                            <th>8:00 - 9:00</th>
                            <th>9:00 - 10:00</th>
                            <th>10:00 - 11:00</th>
                            <th>11:00-12:00</th>
                            <th>12:00 - 13:00</th>
                            <th>13:00 - 14:00</th>
                            <th>14:00 - 15:00</th>
                            <th>15:00 - 16:00</th>
                            <th>16:00 - 17:00</th>
                            <th>17:00 - 18:00</th>
                        </tr>
                        <tr>
                            <th>MON</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td class="lunch" rowspan="6">L<br>U<br>N<br>C<br>H
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TUE</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="tne10006" colspan="4">TNE10006</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>WED</th>
                            <td class="cos10022" colspan="4">COS10022</td>
                            <td class="vovi1" colspan="3">VOVINAM 1</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>THU</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FRI</th>
                            <td class="cos10026" colspan="4">COS10026</td>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SAT</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </section>
        </article>

        <!-- member 4 article -->
        <article class="aboutpage">
            <!-- article title -->
            <h2>Member 4</h2>

            <!-- member image -->
            <figure>
              
                    <img class="profile_picture_1" src="images/about/Oivia.JPG"
                    alt="Duc Thinh Nguyen">
                
                
            </figure>

            <!-- member detail -->
            <section class="personaldetail">
                <h3 class="hello">Hi there, I'm Duc Thinh </h3>
                <p class="major">Majoring in <span class="name">Computer
                        Science</span></p>
                <dl>
                    <dt>Personal details</dt>
                    <dd>Name: Duc Thinh Nguyen</dd>
                    <dd>Student ID:103792724</dd>
                    <dd>Email : <a href="mailto:103805486@student.swin.edu.au"
                            target="_blank">103805486@student.swin.edu.au</a>
                    </dd>
                    <dd>Hobbies: Listening to music, reading books, and discovering new technology.</dd>
                </dl>

                <!-- button linked to member time table -->
                <a href="#swtb_4" class="btn">Look at my Swinburne timetable</a>
            </section>

            <!-- time table section -->
            <section class="ttble" id="table_4">

                <!-- time table title -->
                <h2 class="swtb"><span class="ti">Here is my</span> Schedule</h2>
                
                <!-- time table reposition -->
                <div class="time">

                    <!-- time table setup -->
                    <table class="center" id="swtb_4">
                        <tr>
                            <th>DAY/HRS</th>
                            <th>8:00 - 9:00</th>
                            <th>9:00 - 10:00</th>
                            <th>10:00 - 11:00</th>
                            <th>11:00-12:00</th>
                            <th>12:00 - 13:00</th>
                            <th>13:00 - 14:00</th>
                            <th>14:00 - 15:00</th>
                            <th>15:00 - 16:00</th>
                            <th>16:00 - 17:00</th>
                            <th>17:00 - 18:00</th>
                        </tr>
                        <tr>
                            <th>MON</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td class="lunch" rowspan="6">L<br>U<br>N<br>C<br>H
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TUE</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>


                            <td class="tne10006" colspan="4">TNE10006</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>WED</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>THU</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FRI</th>
                            <td class="cos10026" colspan="4">COS10026</td>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SAT</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="cos20019" colspan="4">COS20019</td>
                            <td></td>
                        </tr>
                    </table>
                        </div>
                    
            </section>
        </article>




    </main>
    <?php include 'includes/footer.inc'; ?>   
</body>

</html>