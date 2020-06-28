<?php
$title = "Our Menus - The Moston Cafe";

include "header.php";
?>
<main data-barba = "container" data-barba-namespace = "contact">
<section class="homeBanner">
        <div class="container homeBanner__holder">
            <div class="homeBanner__intro">
                <h1 class="homeBanner__title">Contact Us</h1>

                <p class="homeBanner__subheading">Have a query about anything then get in touch below</p>

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

<section class="contactUs pos--rel" id = "content">
    <div class="container contactUs__holder">
        <div class="contactUs__intro">
            <h2 class="process__title">Get in touch with us!</h2>
            <p class="contactUs__text">Want to book in with us for a sunday roast or looking for more information about our cafe ? fill out our contact form or alternatively contact us below in whatever way is best for you.</p>

            <div class="contactUs__alternative">
                <ul class="contactUs__list">
                    <li class="contactUs__listItem">
                        <h3 class="contactUs__alternativeTitle">Email:</h3>
                        <a class = "contactUs__link" href="mailto:info@themoston.com">info@themoston.com</a>
                    </li>
                    <li class="contactUs__listItem">
                        <h3 class="contactUs__alternativeTitle">Mobile:</h3>
                        <a class = "contactUs__link" href="tel:07740593279">07740593279</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="contactUs__form">
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

    <?php include "assets/svgs/contactUsCircle.svg" ?>
</section>


<?php

include "footer.php";
?>