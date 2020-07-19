<?php
$title = "Our Menus - The Moston Cafe";

include "header.php";
?>
<main data-barba = "container" data-barba-namespace = "cakes" class = "mainCakes">
<section class="homeBanner">
        <div class="container homeBanner__holder">
            <div class="homeBanner__intro">
                <h1 class="homeBanner__title">Cakes</h1>

                <p class="homeBanner__subheading">Have a look at our delicious cakes</p>

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
                        <img src="assets/images/cakeImageHome.jpg" alt="" class = "homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskTwo.svg" ?>
                    </div>
                </div>

            </div>
        </div>
</section>

<section class="cakesImages cakesImagesContent js-inview" id = "content">
    <div class="container">
        <div class="container menus">
            <span class="menus__tagline pos--rel">Bespoke cakes</span>
            <h2 class="menus__title">Some delicious personalised cakes</h2>
        </div>
    </div>
    <div class="container carouselImages__holder glider-container multiple pos--rel">
        <button class="carouselImages__btn carouselImages__btn--left glider-prev glider-prevCakes">
            <?php include "assets/svgs/arrow-left-cakes.svg" ?>
        </button>
        <ul class="carouselImages__slides glider gliderCakes pos--rel">
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-one.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-two.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-three.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-four.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-five.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-six.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-seven.jpg" alt="">
            </li>
            <li class="carouselImages__slide">
                <img class = "carouselImages__slideImg" src="assets/images/cake-eight.jpg" alt="">
            </li>
        </ul>
        <button class="carouselImages__btn carouselImages__btn--right glider-next glider-nextCakes">
            <?php include "assets/svgs/arrow-right-cakes.svg" ?>
        </button>
    </div>
</section>

<section class="cakesInfo pos--rel js-inview">
    <div class="container cakesInfo__holder">

        <div class="cakesInfo__intro">
            <p class="cakesInfo__text">Cakey is an online cake shop now moving into The Moston with plans to bring better and better cakes. Fresh cakes with be available everyday with a variety of flavours.</p>

            <p class="cakesInfo__text">Our bespoke celebration cakes start at £30, if you are interested you can pop into the cafe or fill out this contact form. Let’s sketch some ideas and come up with the perfect cake for you and yours.</p>

            <p class="cakesInfo__text">You can also check out <a href="https://www.facebook.com/cakeymanchester" class="externalLinks" title = "Cakey's Facebook page">Cakey's Facebook page</a> for more information</p>
        </div>

        <div class="cakesInfo__form">
            <form action="" class="catering__form form form__cateringForm">
                <fieldset class = "form__fieldset">
                    <label for="full-name" class="form__label form__labelCatering">Your full name (First and Surname) *</label>
                    <input type="text" id = "full-name" name = "name" class = "form__input form__inputCatering" placeholder = "Full name">
                </fieldset>
                <fieldset class = "form__fieldset">
                    <label for="email" class="form__label form__labelCatering">Your email</label>
                    <input type="email" if = "email" name = "email" class = "form__input form__inputCatering" placeholder = "Your email">
                </fieldset>
                <fieldset class = "form__fieldset">
                    <label for="message" class="form__label form__labelCatering">Your Message</label>
                    <textarea type="message" cols="30" rows="10" id = "message" name = "message" class = "form__textarea form__textareaCatering" placeholder = "Your message"></textarea>
                </fieldset>
                <button class="imageTextBlock__btn imageTextBlock__btn--submit" type= "submit" value = "Send">Submit</button>
            </form>
        </div>
    </div>
    <?php include "assets/svgs/cakesInfoCircle.svg" ?>
</section>

<?php

include "footer.php";
?>