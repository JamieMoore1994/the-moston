<?php
$title = "The Moston Cafe - Manchester";

include "header.php";
?>

    <section class="homeBanner">
        <div class="container homeBanner__holder">
            <div class="homeBanner__intro">
                <h1 class="homeBanner__title">Your new local cafe in Moston for <span class="homeBanner__textUnderline">delicious food</span>

                <div class="homeBanner__textFill"></div>
                </h1>


                <a href="#" class="btn btn--black homeBanner__btn">Check our menus</a>

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

                <!--Small image mask three section-->
                <div class="homeBanner__imageHolderSmall homeBanner__imageHolderSmall--three pos--abs">
                    <div class="homeBanner__smallImageMask homeBanner__smallImageMask--three pos--rel">
                        <img src="assets/images/homeMaskedImageThree.jpg" alt="" class = "homeBanner__maskedImages pos--abs">

                        <?php include "assets/svgs/circleMasks/homeBannerSmallMaskThree.svg" ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php

include "footer.php";
?> 
