<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hotel Ramayana</title>
    <?php include "links.php"?>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
                <header class="mainHeader flex">
                    <div class="logo">
                        <a href="https://www.theramayana.in/"> <img src="images/light-logo.png" alt="Main-Logo"></a>
                    </div>
                    <div class="nav-bar" id="slidermenu">
                        <div class="cross-menu">
                            <i class="crossy fa-solid fa-xmark" id="crosss" onclick="crossmenu()"></i>  
                        </div>
                        <ul class="menu-bar flex">
                            <li class="menu"><a href="index.php" class="hoverable-menu">HOME</a></li>
                            <li class="menu"><a href="new/about.php" class="hoverable-menu">ABOUT US</a></li>
                            <li class="menu"><a href="#rooms" class="hoverable-menu">ROOMS</a></li>
                            <li class="menu"><a href="#images" class="hoverable-menu">IMAGES</a></li>
                            <li class="menu"><a href="contact_us.php" class="hoverable-menu">CONTACT US</a></li>
                            <li class="menu"><a href="#book" class="book-online hoverable-menu flex"><i
                                        class="fa-solid fa-calendar-days"></i> BOOK ONLINE</a></li>
                        </ul>
                    </div>
                    <div class="burger"><i class="fa-solid fa-bars" onclick="toglemenu()" id="bars"></i></div>
                    </header>