<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="styles.css">
    <title>Responsive navbar with search and login - Bedimcode</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <!-- <img src="112.png" width="100%"></div> -->
            <a href="#" class="nav__logo">GURUKRUPA WATER SUPPLIER</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="home.php" target="_blank" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="About1.html" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="service1.html" class="nav__link">Services</a>
                    </li>
                    <li class="nav__item">
                        <a href="Fea1.html" class="nav__link">Features</a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">Contact Us</a>
                    </li>
                </ul>
                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__actions">
                <!-- Search button -->
                <!-- <i class="ri-search-line nav__search" id="search-btn"></i> -->
                <!-- Login button -->
                <!-- <i class="ri-user-line nav__login" id="login-btn"></i> -->
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>
    <!--==================== MAIN ====================-->
    <main class="main">
        <img src="R.jpeg" alt="image" class="main__bg">
    </main>
    <!--=============== MAIN JS ===============-->
    <script src="./main.js"></script>

    <!--==================== FOOTER ====================-->
    <?php include('footer.php'); ?>
</body>

</html>
