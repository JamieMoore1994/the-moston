<?php
$title = "About us - The Moston Cafe";

include "header.php";
?>
<main data-barba = "container" data-barba-namespace = "about">
    <section class="homeBanner">
            <div class="container homeBanner__holder">
                <div class="homeBanner__intro">
                    <h1 class="homeBanner__title">About us</h1>

                    <p class="homeBanner__subheading">Find out about the team
                    that makes this cafe run</p>

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

    <section class="aboutIntro" id = "content">
        <div class="container pos--rel aboutIntro__holder">

            <div class="aboutIntro__image">
                <img src="assets/images/aboutCafeImage.jpg" alt="The Moston cafe">
            </div>

            <div class="aboutIntro__text">
                <h2 class="aboutIntro__title">What is The Moston?</h2>
                <p class="aboutIntro__textContent">Community café- we aim to bring the community spirit back to Moston by supplying it with what its longed for, a clean café with top standard food. We also aim to introduce themed nights e.g. steak & curry nights etc. along with eating challenges for the public to try their hand at.</p>

                <p class="aboutIntro__textContent">Follow us on <a class = "externalLinks" href="https://www.facebook.com/TheMostoncafe/" title = "The Moston Cafe Instagram page">Facebook</a> & <a class = "externalLinks" href="https://www.instagram.com/themostoncafe/?hl=en" title = "The Moston Cafe Instagram page">Instagram</a> to keep up to date with our latest eating challenges & more info on when we will be introducing themed nights.</p>
            </div>


            <?php include "assets/svgs/aboutGreyCircle.svg" ?>
        </div>
    </section>

    <section class="ourStaff pos--rel">
        <h2 class="ourStaff__title">Our Staff</h2>
        <div class="container container--large">
            <ul class="ourStaff__list">
                <!--Chris-->
                <li class="ourStaff__profile">
                    <div class="ourStaff__image">
                        <img src="assets/images/chefImg.png" alt="Chris Carpenter">
                    </div>
                    <div class="ourStaff__profileContent">
                        <h3 class="ourStaff__staffName">Chris Carpenter</h3>
                        <h4 class="ourStaff__staffJobTitle">Co-founder/Owner/Chef/Cake artist</h4>
                        <p class="ourStaff__profileDescription">Hi I’m Chris, experienced chef & self taught cake artist, I have worked in many kitchens from small pubs to 3 rosette restaurants serving some of the finest foods. I Have always worked towards opening my own café/cake shop. Dreams do come true.</p>

                        <p class="ourStaff__profileDescription">For the past 3 years or so I have been building Cakey (online cake shop) pushing the limits and myself to bring people professional but more than anything affordable bespoke cakes. I saw the property to rent and before I stepped foot inside, I knew this was happening.</p>

                        <p class="ourStaff__profileDescription">My aim and goals opening the Moston is to not only produce the best fry up and café around, but to bring community spirit back into the area.  We aim to bring you high quality food at a fraction of restaurant prices, introducing steak nights and similar events.  Date nights right around the corner and barley breaking the bank. I am looking forward to expanding your taste buds.</p>
                    </div>
                </li>
                <!--Kai-->
                <li class="ourStaff__profile">
                    <div class="ourStaff__image">
                        <img src="assets/images/chefImg.png" alt="Chris Carpenter">
                    </div>
                    <div class="ourStaff__profileContent">
                        <h3 class="ourStaff__staffName">Kai Gorman</h3>
                        <h4 class="ourStaff__staffJobTitle">Co-founder/Owner/Nutritionist</h4>
                        <p class="ourStaff__profileDescription">Hi, I’m Kai, experienced Personal Trainer & Nutritionist, despite this being a passion and something I love to do I’ve always wanted to open my own café since being young, before getting into the fitness industry but never wanting to take the risk that comes with owning a business with its own premises and the costs included in that.</p>

                        <p class="ourStaff__profileDescription">While still in the fitness industry and coaching clients 1-1, I decided that the coronavirus putting a halt to my 40-60 hour working weeks as a PT was my chance to take the risk and put all my spare time into opening this café.</p>

                        <p class="ourStaff__profileDescription">My aim opening this café is bringing the people of Moston what they’ve always needed, a banging café, while using my knowledge as a nutritionist to add what else Moston has been longing for, a healthy meal prep company who can supply tailored meals to suit your needs.I look forward to seeing you all in our café and enjoying our great tasting food!</p>
                    </div>
                </li>
                <li class="ourStaff__profile">
                    <div class="ourStaff__image">
                        <img src="assets/images/chefImg.png" alt="Chris Carpenter">
                    </div>
                    <div class="ourStaff__profileContent">
                        <h3 class="ourStaff__staffName">Paul</h3>
                        <h4 class="ourStaff__staffJobTitle">Head Chef</h4>
                        <p class="ourStaff__profileDescription">Hi, I’m Paul, I'm a very experienced chef with a passion for cooking. I love to make food people will 
                        Enjoy eating.  I’m also a family man and that’s what matters to me most, so bringing a community together along with my partners will be a good achievement for us all.</p>

                        <p class="ourStaff__profileDescription">I started a catering business (Fresh Made Catering) after working at so many events for other people i decided it was time to take a leap. Now we have teamed up with two guys who are absolutely top at what they do to offer the community the best food they can get.</p>

                        <p class="ourStaff__profileDescription">My aim opening this café is bringing the people of Moston what they’ve always needed, a banging café, while using my knowledge as a qualified chef to add to what Moston has been longing for, a healthy meal prep company an all round community cafe and cake shop wrapped up into one. I look forward to seeing you all in our café and enjoying our great tasting food!</p>
                    </div>
                </li>
            </ul>
        </div>

        <?php include "assets/svgs/aboutChefsCircle.svg" ?>
    </section>

<?php

include "footer.php";
?>