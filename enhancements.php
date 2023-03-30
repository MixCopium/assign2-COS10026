<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A simple enhancements page">
    <meta name="keywords" content="HTML, simple, webpage">
    <meta name="author" content="Nguyen Ha Huy Hoang ">

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
    <title>Enhancements</title>
</head>

<body>
    <?php include 'includes/header.inc'; ?>
    <main id="enhancement">
        <h1>Enhancements</h1>
        <!-- list of enhancements -->
        <article>
            <h2>This is the list of enhancements we have made:</h2>
            <ol>
                <li>The first enhancement we made is the <b>responsive design</b> for all web page.</li>
                <li>The second enhancement we made is the <b>special-use pseudo elements</b> to create the sliders in the <a href="./product.html">product page</a>. </li>
            </ol>
        </article>
    </main>
    <?php include 'includes/footer.inc'; ?>
</body>

</html>