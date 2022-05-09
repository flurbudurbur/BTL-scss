<!DOCTYPE html>
<html lang="en">

<head>

    <?php $page = 'home' ;?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Techlab Regius College</title>

    <!-- scripts -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Techlab Regius College</h1>
        <div class="btn">
            <a class="<?php if ($page == 'home') {echo 'active';} ;?>" href="index.php">Home</a>
            <a class="" href="#">Reserveren</a>
            <a class="" href="#">Booking</a>
            <a class="" href="#">Login</a>
        </div>
    </header>
    <main>
        <div class="slideshow">
            <div class="slide">
                <img src="assets/slideshow/slide1.jpg" alt="">
                <p>stuff</p>
            </div>
            <div class="slide">
                <img src="assets/slideshow/slide2.jpg" alt="">
                <p>stuff</p>
            </div>
            <div class="slide">
                <img src="assets/slideshow/slide3.jpg" alt="">
                <p>stuff</p>
            </div>
            <div class="slide">
                <img src="assets/slideshow/slide4.jpg" alt="">
                <p>stuff</p>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    </body>

</html>