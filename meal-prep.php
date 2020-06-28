<?php
$title = "Our Menus - The Moston Cafe";

include "header.php";
?>
<main data-barba = "container" data-barba-namespace = "mealPrep">
<section class="homeBanner">
        <div class="container homeBanner__holder">
            <div class="homeBanner__intro">
                <h1 class="homeBanner__title">Meal Prep</h1>

                <p class="homeBanner__subheading">Food tailored towards your needs</p>

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

<section class="process pos--rel" id = "content">
    <h2 class="process__title">The Process</h2>

    <div class="container process__holder">

        <div class="process__description pos--rel">
            <p class="process__descriptionText">Try our healthy & delicious meal prep option if you want healthy and nutritious food cooked & delivered straight to your door twice per week (Monday & Wednesday).</p>
            <p class="process__descriptionText">Have your meal prep service specifically tailored to you and your goals by having a sit-down consultation with our on-site nutritionist & owner who will be able to tailor the calories to meet your needs.</p>

            <a href="#" class="imageTextBlock__btn">View our meal preps menu</a>
            <?php include "assets/svgs/icons/arrow-four.svg" ?>
        </div>

        <div class="process__steps">
            <ul class="process__stepsList">

            <div class="process__stepsListHolder">
                <li class="process__stepsItem pos--rel">
                    <?php include "assets/svgs/icons/consult.svg" ?>
                    <p class="process__stepsDescription">Sit down consultation with nutritionist</p>
                    <?php include "assets/svgs/icons/arrow.svg" ?>
                </li>
                <li class="process__stepsItem pos--rel">
                    <?php include "assets/svgs/icons/fruits.svg" ?>
                    <p class="process__stepsDescription">Pick your food choices</p>
                    <?php include "assets/svgs/icons/arrow-two.svg" ?>
                </li>
            </div>
            <div class="process__stepsListHolder process__stepsListHolder--reverse">
                <li class="process__stepsItem pos--rel">
                    <?php include "assets/svgs/icons/pour.svg" ?>
                    <p class="process__stepsDescription">Well prepared</p>
                    <?php include "assets/svgs/icons/arrow-three.svg" ?>
                </li>
                <li class="process__stepsItem pos--rel">
                    <?php include "assets/svgs/icons/truck.svg" ?>
                    <p class="process__stepsDescription">Delivered to your door Mondays and Wednesdays</p>
                </li>
            </div>
            </ul>
        </div>
    </div>
    <?php include "assets/svgs/mealPrepBackgroundCircle.svg" ?>
</section>

<section class="contactNutritionist pos--rel">
    <div class="container contactNutritionist__holder">

    <div class="contactNutritionist__info pos--rel">
        <h3 class="contactNutritionist__title">Contact our nutritionist</h3>

        <p class="contactNutritionist__text">Want to know more about this or interested, then fill out this form and our nutritionist will be in touch with you as soon as possible.</p>
        <?php include "assets/svgs/icons/arrow-five.svg" ?>
    </div>

    <div class="contactNutritionist__form">
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

    <?php include "assets/svgs/mealPrepBackgroundCircleTwo.svg" ?>
</section>

<?php

include "footer.php";
?>