<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?> </title>
    <meta name = "description" description = "<?php echo $description?>">

    <!--Stylsheet-->
    <link rel="stylesheet" href="./dest/glider.min.css">
    <link rel="stylesheet" href="./dest/main.css">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">


    <!--Canonical link-->
    <link rel="canonical" href="<?php echo $canonical ?>">
</head>
<body data-barba = "wrapper">

<!--Accessibility button-->
<a href="#content" class = "skipLink">Skip to content</a>

<header class="siteHeader">
    <div class="container siteHeader__holder">

        <a class = "siteHeader__logoBtn" href="index.php" title = "Homepage">
            <?php include "assets/svgs/siteLogo.svg" ?>
        </a>

        <div class="siteHeader__contact">

            <div class="siteHeader__socials">
                <ul class="siteHeader__socialList">
                    <li class="siteHeader__socialListItem">
                        <a href="https://www.facebook.com/TheMostoncafe/" class = "siteHeader__socialListLink" title = "The Moston Cafe Facebook page">
                            <svg aria-labelledby="facebook-header"
                            class = "siteHeader__socialIcon">
                            <title id = "facebook-header">The Mostons Facebook Page</title>
                            <desc>Facebook logo</desc>
                                <use xlink:href="assets/svgs/icons/sprite.svg#icon-facebook"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="siteHeader__socialListItem">
                        <a href="https://www.instagram.com/themostoncafe/?hl=en" class = "siteHeader__socialListLink" title = "The Moston Cafe Instagram page">
                            <svg aria-labelledby="instagram-header"
                            class = "siteHeader__socialIcon">
                            <title id = "instagram-header">The Mostons Instagram Page</title>
                            <desc>Instagram logo</desc>
                                <use xlink:href="assets/svgs/icons/sprite.svg#icon-instagram"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="" class="siteHeader__burgerButton">
                <span class="siteHeader__burgerLine line1"></span>
                <span class="siteHeader__burgerLine line2"></span>
                <span class="siteHeader__burgerLine line3"></span>
            </a>
        </div>
    </div>

    <!--Main navigation items-->
    <nav class="siteHeader__nav">
        <div class="container siteHeader__navHolder">

            <nav class="siteHeader__navMenu">
                <ul class="siteHeader__navList">
                    <li class="siteHeader__navListItem">
                        <a href="index.php" class="siteHeader__navLink" title = "Home">Home</a>
                    </li>
                    <li class="siteHeader__navListItem">
                        <a href="about.php" class="siteHeader__navLink" title = "About">About</a>
                    </li>
                    <li class="siteHeader__navListItem">
                        <a href="menus.php" class="siteHeader__navLink" title = "Menus">Menus</a>
                    </li>
                    <li class="siteHeader__navListItem">
                        <a href="meal-prep.php" class="siteHeader__navLink" title = "Meal prep">Meal Prep</a>
                    </li>
                    <li class="siteHeader__navListItem">
                        <a href="cakes.php" class="siteHeader__navLink" title = "Cakes">Cakes</a>
                    </li>
                    <li class="siteHeader__navListItem">
                        <a href="contact.php" class="siteHeader__navLink" title = "Contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="siteHeader__navImages">

                <div class="siteHeader__imageHolderLarge">
                    <div class="siteHeader__imageMaskLarge">
                        <img src="./assets/images/breakfast-images/breakfastMenu.jpg" alt="Full English breakfast" class = "siteHeader__image">
                        <?php include "assets/svgs/circleMasks/navClipMask.svg" ?>
                    </div>
                </div>

            </div>
        </div>

        <svg class = "siteHeader__largeBackgroundCircle" xmlns="http://www.w3.org/2000/svg" width="960" height="905" viewBox="0 0 960 905"><ellipse cx="480" cy="452.5" rx="480" ry="452.5"/></svg>
    </nav>


</header>

    
