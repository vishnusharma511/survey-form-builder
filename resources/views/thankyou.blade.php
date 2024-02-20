<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your meta description goes here. This is a brief summary of your webpage's content.">
    <title>Brand Communication Agency, Digital Marketing Company in India, Web Design Agency,</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
            rel="stylesheet" type="text/css" />
    </noscript>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body class="thankyou-pg">
    <header>
        <div class="container">
            <div class="inner-wrapper">
                <div class="logo-wrapper">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo" width="125" height="83">
                </div>
                <ul class="contact-details">
                    <li class="item">
                        <a href="mailto:info@interactivebees.com"><i
                                class="icon-mail"></i><span>info@interactivebees.com</span></a>
                    </li>
                    <li class="item">
                        <a href="tel:+91-9643695625"><i class="icon-call"></i><span>+91-9643695625</span></a>
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <section class="thankyou-section">
        <div class="container">
            <div class="inner-content d-flex justify-content-center align-items-center">
                <div class="title">Thank You</div>
            </div>
        </div>
    </section>
    <div class="callnow-mobile">
        <a href="tel:+91-9643695625"><i class="icon-call"></i><span></span></a>
    </div>

    <footer class="section-padding-top">
        <div class="container">
            <div class="inner-wrapper d-flex align-items-center justify-content-between">
                <div class="contact-details">
                    <ul class="d-flex direction-column">
                        <li class="item phone">
                            <a href="tel:+91-11-47098755" aria-label="phone number"><i
                                    class="icon-call"></i><span>+91-11-47098755</span></a>
                        </li>
                        <li class="item email">
                            <a href="mailto:info@interactivebees.com" aria-label="email address"><i
                                    class="icon-email"></i><span>info@interactivebees.com</span></a>
                        </li>
                        <li class="item address">
                            <i class="icon-location"></i> 28/7 , Ground Floor Nangia park, Shaktinagar, Delhi - 110007
                        </li>
                    </ul>
                </div>
                <div class="follow-us">
                    <div class="heading-wrapper">
                        <div class="title">
                            Follow Us On
                        </div>
                    </div>

                    <ul class="d-flex">
                        <li class="item">
                            <a href="https://www.facebook.com/InteractiveBees" target="_blank"
                                aria-label="Facebook"><i class="icon-fb"></i></a>
                        </li>
                        <li class="item">
                            <a href="https://twitter.com/interactivebees" target="_blank" aria-label="Twiter"><i
                                    class="icon-twiter"></i></a>
                        </li>
                        <li class="item">
                            <a href="https://www.linkedin.com/company/interactivebees" target="_blank"
                                aria-label="Linkedin"><i class="icon-linkedin"></i></a>
                        </li>
                        <li class="item">
                            <a href="https://www.youtube.com/interactivebees" target="_blank"
                                aria-label="Youtube"><i class="icon-youtube"></i></a>
                        </li>
                        <li class="item">
                            <a href="#" aria-label="Instagram"><i class="icon-insta"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright © 2024 Interactive Bees Pvt Ltd.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        jQuery.event.special.touchstart = {
            setup: function (_, ns, handle) {
                this.addEventListener("touchstart", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.touchmove = {
            setup: function (_, ns, handle) {
                this.addEventListener("touchmove", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.wheel = {
            setup: function (_, ns, handle) {
                this.addEventListener("wheel", handle, {
                    passive: true
                });
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function (_, ns, handle) {
                this.addEventListener("mousewheel", handle, {
                    passive: true
                });
            }
        };
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
