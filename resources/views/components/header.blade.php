<script>
    window.onload = function() {
        var logo = document.getElementsByClassName('logo__image')[0]; // Get the first image element
        var path = window.location.pathname; // Get the current URL path

        if (path.includes("about")) {
            logo.src = "assets/LOGOS/Transparent PNG/CC_MFP_Logo_transparent-16.png"; // Change to the about logo
        } else {
            logo.src = "assets/LOGOS/Transparent PNG/CC_Logo_transparent_circles_solid.png"; // Change to the default logo
        }
    };
</script>

<header class="header header--overlay    background-dark " kjb-settings-id="sections_header_settings_background_color">
    <div class="hello-bars">





    </div>

    <div class="header__wrap">
        <div class="header__content header__content--desktop background-dark">
            <div class="container header__container media justify-content-left">


                <style>
                    @media (min-width: 768px) {
                        #block-1555988494486 {
                            text-align: left;
                        }
                    }

                    .link-list__link {
                        color: black !important;
                    }
                </style>

                <div id="block-1555988494486" class="header__block header__block--logo header__block--show header__switch-content " kjb-settings-id="sections_header_blocks_1555988494486_settings_stretch">


                    <style>
                        #block-1555988494486 {
                            line-height: 1;
                        }

                        #block-1555988494486 .logo__image {
                            display: block;
                            width: 175px;
                        }

                        #block-1555988494486 .logo__text {
                            color: ;
                        }
                    </style>

                    <a class="logo" href="/">


                        <img loading="auto" class="logo__image" alt="Header Logo" kjb-settings-id="sections_header_blocks_1555988494486_settings_logo" src="assets/LOGOS/Transparent PNG/CC_Logo_transparent_circles_solid.png" />


                    </a>
                </div>



                <style>
                    @media (min-width: 768px) {
                        #block-1555988491313 {
                            text-align: left;
                        }
                    }
                </style>

                <div id="block-1555988491313" class="header__block header__switch-content header__block--menu stretch" kjb-settings-id="sections_header_blocks_1555988491313_settings_stretch">
                    <div class="link-list justify-content-left" kjb-settings-id="sections_header_blocks_1555988491313_settings_menu">

                        <!-- <a class="link-list__link" href="https://www.robrea.co.uk/events">EVENTS</a> -->

                        <a class="link-list__link" href="{{ route('about') }}">ABOUT</a>

                        <a class="link-list__link" href="#">WORK WITH MIA</a>

                        <a class="link-list__link" href="#">CORPORATE</a>

                        <a class="link-list__link" href="#">FREE RESOURCE</a>

                        <a class="link-list__link" href="{{ route('course') }}">ONLINE COURSE</a>

                        <a class="link-list__link" href="{{ route('contact') }}">CONTACT</a>

                    </div>
                </div>



                <div class="hamburger hidden--desktop" kjb-settings-id="sections_header_settings_hamburger_color">
                    <div class="hamburger__slices">
                        <div class="hamburger__slice hamburger--slice-1"></div>
                        <div class="hamburger__slice hamburger--slice-2"></div>
                        <div class="hamburger__slice hamburger--slice-3"></div>
                        <div class="hamburger__slice hamburger--slice-4"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="header__content header__content--mobile">
            <div class="header__switch-content header__spacer"></div>
        </div>
    </div>

</header>