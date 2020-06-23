<?php
$title = "Our Menus - The Moston Cafe";

include "header.php";
?>

<section class="homeBanner">
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

<section class="menus pos--rel">
    <div class="container container--large">
        <span class="menus__tagline pos--rel">The new best menus in Moston</span>
        <h2 class="menus__title">Food cooked by the best chefs around</h2>
    </div>

    <div class="menus__carousel">
        <button class="menus__carouselBtn menus__carouselBtn--left js-hide">
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





<?php

include "footer.php";
?>