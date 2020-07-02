<?php
$title = "Our Menus - The Moston Cafe";

include "header.php";
?>
<main data-barba = "container" data-barba-namespace = "menus">
<section class="homeBanner homeFill">
        <div class="container homeBanner__holder">
            <div class="homeBanner__intro">
                <h1 class="homeBanner__title">Menus</h1>

                <p class="homeBanner__subheading">Have a look at our delicious menus</p>

            </div>

            <div class="homeBanner__images pos--rel">
                <!--Large image masking section-->
                <div class="homeBanner__imageHolderLarge pos--rel">
                    <div class="homeBanner__imageLargeMask pos--rel">
                        <img src="assets/images/homeMainImage.jpg" alt="" class = "homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerLargeMask.svg" ?>
                    </div>
                </div>

                <!--Small image mask one section-->
                <div class="homeBanner__imageHolderSmall homeBanner__imageHolderSmall--one pos--abs">
                    <div class="homeBanner__smallImageMask homeBanner__smallImageMask--one pos--rel">
                        <img src="assets/images/homeMaskedImageOne.jpg" alt="" class = "homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskOne.svg" ?>
                    </div>
                </div>

                <!--Small image mask two section-->
                <div class="homeBanner__imageHolderSmall homeBanner__imageHolderSmall--two pos--abs">
                    <div class="homeBanner__smallImageMask homeBanner__smallImageMask--two pos--rel">
                        <img src="assets/images/homeMaskedImagetwo.jpg" alt="" class = "homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskTwo.svg" ?>
                    </div>
                </div>

            </div>
        </div>
</section>

<section class="menus pos--rel" id = "content">
    <div class="container">
        <span class="menus__tagline pos--rel">The new best menus in Moston</span>
        <h2 class="menus__title">Look at some of our delicious food</h2>
    </div>

    <div class="menus__carousel">
        <button class="menus__carouselBtn menus__carouselBtn--left">
            <?php include "assets/svgs/arrow-left.svg" ?>
        </button>
        <div class="menus__carouselTrackContainer">
            <ul class="menus__carouselTrack">
                <li class="menus__carouselSlide js-current-slide">
                    <img class = "menus__carouselSlideImg" src="assets/images/carouselImg1.jpg" alt="">
                </li>

                <li class="menus__carouselSlide">
                    <img class = "menus__carouselSlideImg" src="assets/images/carouselImg2.jpg" alt="">
                </li>

                <li class="menus__carouselSlide">
                    <img class = "menus__carouselSlideImg" src="assets/images/carouselImg3.jpg" alt="">
                </li>

            </ul>
        </div>
        <button class="menus__carouselBtn menus__carouselBtn--right">
            <?php include "assets/svgs/arrow-right.svg" ?>
        </button>
    </div>
</section>

<!--Sunday roast section home--->
<section class="imageTextBlock">
    <div class="container">

        <!--This is a text block with an image to the left-->
        <div class="imageTextBlock__holder imageTextBlock__holder--row pos--rel">
            <div class="imageTextBlock__imageHolder pos--rel">
                <div class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--breakfastMenu">
                    <img src="assets/images/breakfastLargeSectionImage.jpg" alt="" class = "imageTextBlock__img">

                    <?php include "assets/svgs/circleMasks/breakfastLargeMask.svg" ?>
                </div>

                <?php include "assets/svgs/menusBreakfastCircle.svg" ?>
            </div>

            <div class="imageTextBlock__contentHolder">
                <h2 class="imageTextBlock__title">The breakfast menu</h2>
                <p class="imageTextBlock__text">Our breakfast menu offers a range of delicious breakfast items that will make us your new go to cafe in Moston.</p>

                <a href="#" class="imageTextBlock__btn">View our breakfast menu</a>
            </div>
        </div>

    </div>
</section>

<section class="imageTextBlock">
    <div class="container">

        <!--This is a text block with an image to the left-->
        <div class="imageTextBlock__holder imageTextBlock__holder--row-reverse pos--rel">
            <div class="imageTextBlock__imageHolder imageTextBlock__imageHolder--row-reverse pos--rel">
                <div class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--lunchMenu imageTextBlock__imageMaskLarge--row-reverse">
                    <img src="assets/images/breakfastLargeSectionImage.jpg" alt="" class = "imageTextBlock__img">

                    <?php include "assets/svgs/circleMasks/lunchMenuMask.svg" ?>
                </div>

                <?php include "assets/svgs/lunchMenuLargeCircle.svg" ?>
            </div>

            <div class="imageTextBlock__contentHolder">
                <h2 class="imageTextBlock__title">The lunch menu</h2>
                <p class="imageTextBlock__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <a href="#" class="imageTextBlock__btn imageTextBlock__btn--row-reverse">View our lunch menu</a>
            </div>
        </div>

    </div>
</section>

<!--Sunday roast section home--->
<section class="imageTextBlock">
    <div class="container">

        <!--This is a text block with an image to the left-->
        <div class="imageTextBlock__holder imageTextBlock__holder--row pos--rel">
            <div class="imageTextBlock__imageHolder pos--rel">
                <div class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--mostonBox">
                    <img src="assets/images/breakfastLargeSectionImage.jpg" alt="" class = "imageTextBlock__img">

                    <?php include "assets/svgs/circleMasks/mostonBoxMenuMask.svg" ?>
                </div>

                <?php include "assets/svgs/mostonBoxLargeCircle.svg" ?>
            </div>

            <div class="imageTextBlock__contentHolder">
                <h2 class="imageTextBlock__title">The Moston Box menu</h2>
                <p class="imageTextBlock__text">Our breakfast menu offers a range of delicious breakfast items that will make us your new go to cafe in Moston.</p>

                <a href="#" class="imageTextBlock__btn">View our moston box menu</a>
            </div>
        </div>

    </div>
</section>

<section class="imageTextBlock">
    <div class="container">

        <!--This is a text block with an image to the left-->
        <div class="imageTextBlock__holder imageTextBlock__holder--row-reverse pos--rel">
            <div class="imageTextBlock__imageHolder imageTextBlock__imageHolder--row-reverse pos--rel">
                <div class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--lunchMenu imageTextBlock__imageMaskLarge--row-reverse">
                    <img src="assets/images/breakfastLargeSectionImage.jpg" alt="" class = "imageTextBlock__img">

                    <?php include "assets/svgs/circleMasks/lunchMenuMask.svg" ?>
                </div>

                <?php include "assets/svgs/lunchMenuLargeCircle.svg" ?>
            </div>

            <div class="imageTextBlock__contentHolder">
                <h2 class="imageTextBlock__title">The Slimming World Menu</h2>
                <p class="imageTextBlock__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <a href="#" class="imageTextBlock__btn imageTextBlock__btn--row-reverse">View our slimming world menu</a>
            </div>
        </div>

    </div>
</section>

<section class="roastMenu pos--rel">
    <div class="container roastMenu__holder">
        <h2 class="roastMenu__title">Sunday Roast Dinners</h2>
        <p class="roastMenu__text">Our fantastic chefs will be bringing you your new go to place for a special Sunday roast. We even make Yorkshire pudding wraps.</p>

        <a href="contact.php" class="imageTextBlock__btn imageTextBlock__btn--white pos--rel z--10">Book in now</a>
    </div>
</section>

<?php

include "footer.php";
?>