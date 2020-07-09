<?php
$title = "The Moston Cafe - Manchester";

include "header.php";
?>
<main data-barba="container" data-barba-namespace="home">
    <section class="homeBanner">
        <div class="container homeBanner__holder">
            <div class="homeBanner__intro">
                <h1 class="homeBanner__title">Your new local cafe in Moston for <span
                        class="homeBanner__textUnderline">delicious food</span></h1>
                <div class="homeBanner__textFill"></div>


                <a href="menus.php" class="btn btn--black homeBanner__btn">Check our menus</a>

            </div>

            <div class="homeBanner__images pos--rel">
                <!--Large image masking section-->
                <div class="homeBanner__imageHolderLarge pos--rel">
                    <div class="homeBanner__imageLargeMask pos--rel">
                        <img src="assets/images/homeMainImage.jpg" alt="" class="homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerLargeMask.svg" ?>
                    </div>
                </div>

                <!--Small image mask one section-->
                <div class="homeBanner__imageHolderSmall homeBanner__imageHolderSmall--one pos--abs">
                    <div class="homeBanner__smallImageMask homeBanner__smallImageMask--one pos--rel">
                        <img src="assets/images/homeMaskedImageOne.jpg" alt=""
                            class="homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskOne.svg" ?>
                    </div>
                </div>

                <!--Small image mask two section-->
                <div class="homeBanner__imageHolderSmall homeBanner__imageHolderSmall--two pos--abs">
                    <div class="homeBanner__smallImageMask homeBanner__smallImageMask--two pos--rel">
                        <img src="assets/images/cakeImageHome.jpg" alt=""
                            class="homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskTwo.svg" ?>
                    </div>
                </div>

                <!--Small image mask three section-->
                <div class="homeBanner__imageHolderSmall homeBanner__imageHolderSmall--three pos--abs">
                    <div class="homeBanner__smallImageMask homeBanner__smallImageMask--three pos--rel">
                        <img src="assets/images/homeMaskedImageThree.jpg" alt=""
                            class="homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskThree.svg" ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Sunday roast section home--->
    <section class="imageTextBlock homeIntro homeIntro--sundayRoast" id="content">
        <div class="container">

            <!--This is a text block with an image to the left-->
            <div class="imageTextBlock__holder imageTextBlock__holder--row pos--rel">
                <div class="imageTextBlock__imageHolder pos--rel">
                    <div class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--sundayRoast">
                        <img src="assets/images/sundayRoastHome.jpg" alt="" class="imageTextBlock__img">

                        <?php include "assets/svgs/circleMasks/imageBlockMaskLargeOne.svg" ?>
                    </div>

                    <?php include "assets/svgs/homeGreyCircleOne.svg" ?>
                </div>

                <div class="imageTextBlock__contentHolder">
                    <h2 class="imageTextBlock__title">Come and enjoy the best Sunday roast in Manchester</h2>
                    <p class="imageTextBlock__text">We provide Sunday lunch via appointment & takeaway. To takeaway just
                        make sure you ring up to order before coming to collect.
                        Our appointment slots are 12pm & 2pm, make sure you ring up or email as early as possible to
                        make your booking.</p>

                    <a href="contact.php" class="imageTextBlock__btn">Book now</a>
                </div>
            </div>

        </div>
    </section>

    <!--Breakfast section-->
    <section class="imageTextBlock homeIntro homeIntro--breakfast">
        <div class="container">

            <!--This is a text block with an image to the left-->
            <div class="imageTextBlock__holder imageTextBlock__holder--row-reverse pos--rel">
                <div class="imageTextBlock__imageHolder imageTextBlock__imageHolder--row-reverse pos--rel">
                    <div
                        class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--breakfast imageTextBlock__imageMaskLarge--row-reverse">
                        <img src="assets/images/breakfastLargeSectionImage.jpg" alt="" class="imageTextBlock__img">

                        <?php include "assets/svgs/circleMasks/breakfastLargeMask.svg" ?>
                    </div>

                    <?php include "assets/svgs/homeGreyCircleTwo.svg" ?>
                </div>

                <div class="imageTextBlock__contentHolder">
                    <h2 class="imageTextBlock__title">A range of menus</h2>
                    <p class="imageTextBlock__text">We have 4 different menus to suit your needs, a breakfast, lunch, protein box & slimming world menu. Take a look & see if you like what you see.</p>

                    <a href="menus.php" class="imageTextBlock__btn imageTextBlock__btn--row-reverse">Check out our
                        menus</a>
                </div>
            </div>

        </div>
    </section>

    <!--Bespoke meal prep section home--->
    <section class="imageTextBlock homeIntro homeIntro--mealPrep">
        <div class="container">

            <!--This is a text block with an image to the left-->
            <div class="imageTextBlock__holder imageTextBlock__holder--row pos--rel">
                <div class="imageTextBlock__imageHolder pos--rel">
                    <div class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--mealPrep">
                        <img src="assets/images/mealPrepHome.jpg" alt="" class="imageTextBlock__img">

                        <?php include "assets/svgs/circleMasks/bespokeMealMask.svg" ?>
                    </div>

                    <?php include "assets/svgs/homeGreyCircleThree.svg" ?>
                </div>

                <div class="imageTextBlock__contentHolder">
                    <h2 class="imageTextBlock__title">Bespoke meal prep</h2>
                    <p class="imageTextBlock__text">We provide healthy meal preps to suit your needs, go to our ‘Meal
                        Prep’ page to find out more information and get in touch.</p>

                    <a href="meal-prep.php" class="imageTextBlock__btn imageTextBlock__btn--row-reverse">Check out meal
                        prep</a>
                </div>
            </div>

        </div>
    </section>

    <!--Cakes section-->
    <section class="imageTextBlock homeIntro homeIntro--cakes">
        <div class="container">

            <!--This is a text block with an image to the left-->
            <div class="imageTextBlock__holder imageTextBlock__holder--row-reverse pos--rel">
                <div class="imageTextBlock__imageHolder imageTextBlock__imageHolder--row-reverse pos--rel">
                    <div
                        class="imageTextBlock__imageMaskLarge imageTextBlock__imageMaskLarge--cakes imageTextBlock__imageMaskLarge--row-reverse">
                        <img src="assets/images/cakeImageHome.jpg" alt="" class="imageTextBlock__img">

                        <?php include "assets/svgs/circleMasks/cakeHomeMask.svg" ?>
                    </div>

                    <?php include "assets/svgs/homeGreyCircleFour.svg" ?>
                </div>

                <div class="imageTextBlock__contentHolder">
                    <h2 class="imageTextBlock__title">Bespoke cakes</h2>
                    <p class="imageTextBlock__text">Need a cake tailor made for you, a friend or family member? check our beautiful handmade personalised cakes.</p>

                    <a href="cakes.php" class="imageTextBlock__btn imageTextBlock__btn--row-reverse">Check out our
                        cakes</a>
                </div>
            </div>

        </div>
    </section>

    <section class="catering">
        <div class="container">

            <div class="catering__holder">
                <div class="catering__formHolder">
                    <form action="https://formspree.io/mbjzzenk" method = "POST" class="catering__form form form__cateringForm">
                        <fieldset class="form__fieldset">
                            <label for="full-name" class="form__label form__labelCatering">Your full name (First and
                                Surname) *</label>
                            <input type="text" id="full-name" name="name" class="form__input form__inputCatering"
                                placeholder="Full name">
                        </fieldset>
                        <fieldset class="form__fieldset">
                            <label for="email" class="form__label form__labelCatering">Your email *</label>
                            <input type="email" id="email" name="_replyto" class="form__input form__inputCatering"
                                placeholder="Your email">
                        </fieldset>
                        <fieldset class="form__fieldset">
                            <label for="message" class="form__label form__labelCatering">Your Message *</label>
                            <textarea cols="30" rows="10" id="message" name="message"
                                class="form__textarea form__textareaCatering" placeholder="Your message"></textarea>
                        </fieldset>
                        <button class="imageTextBlock__btn imageTextBlock__btn--submit" type="submit"
                            value="Send">Submit</button>
                    </form>
                </div>

                <div class="catering__events">
                    <h2 class="imageTextBlock__title">Catering for events</h2>
                    <p class="imageTextBlock__text">We provide catering for all events from corporate events/meetings
                        all the way to christening & birthday parties. See <a class="externalLinks"
                            href="https://www.facebook.com/freshmadecatering1/"
                            title="Fresh Made Catering Facebook page">Fresh Made Catering</a> on Facebook for more
                        information or fill out our contact form with any enquiries.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="dedicatedTeam">
        <div class="container dedicatedTeam__holder">
            <h2 class="imageTextBlock__title">A dedicated team of staff</h2>
            <p class="imageTextBlock__text imageTextBlock__text--dedicatedTeam">At The Moston Cafe, our main aim is to give you - the locals - a community cade. We want you to know our team and who's cooking/serving your food.
            </p>
            <a href="about.php" class="imageTextBlock__btn imageTextBlock__btn--row-reverse">Learn more about our
                staff</a>
        </div>
    </section>

<?php

include "footer.php";
?>