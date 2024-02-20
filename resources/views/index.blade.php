<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Your meta description goes here. This is a brief summary of your webpage's content.">
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

<body>
    <header>
        <div class="container">
            <div class="inner-wrapper">
                <div class="logo-wrapper">
                    <img src="{{ asset('img/logo.svg') }}" alt="logo" width="125" height="83">
                </div>
                <ul class="contact-details">
                    <li class="item">
                        <a href="mailto:info@interactivebees.com"><i class="icon-mail"></i><span>info@interactivebees.com</span></a>
                    </li>
                    <li class="item">
                        <a href="tel:+91-9643695625"><i class="icon-call"></i><span>+91-9643695625</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section class="banner-section">
        <div class="img-wrapper">
            <img src="{{ asset('img/banner.webp') }}" alt="Banner Image" width="1920" height="924" />
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="content">
                    <h1>Elevating Businesses through Engaging Stories</h1>
                </div>
            </div>
        </div>
        <div class="scroll-bottom-btn">
            <i class="icon-arrow"></i>
        </div>
    </section>

    <div class="enquiry-btn">
        <div class="dark-btn">Enquiry Now</div>
    </div>

    <div class="callnow-mobile">
        <a href="tel:+91-9643695625"><i class="icon-call"></i><span></span></a>
    </div>

    <div class="page-sections">


        <section class="about-section section-padding">
            <div class="container">
                <div class="animate-icon one">
                    <img src="{{ asset('img/icon/animation/icon-1.svg') }}" alt="one" width="152" height="152">
                </div>
                <div class="top-heading">
                    At <strong>Interactive Bees</strong>, we do more than marketing; we create brand stories, innovative
                    solutions, and growth opportunities. We help you make your brand stand out and succeed in the
                    digital age.
                </div>
                <ul class="items d-flex align-items-center justify-content-center">
                    <li class="item">
                        <div class="inner-content d-flex align-items-center">
                            <div class="img-wrapper">
                                <img src="{{ asset('img/about/experience.svg') }}" alt="experience" width="125" height="125">
                            </div>
                            <div class="content">
                                <div class="num">15+</div>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="inner-content d-flex align-items-center">
                            <div class="img-wrapper">
                                <img src="{{ asset('img/about/clients.svg') }}" alt="experience" width="125" height="125">
                            </div>
                            <div class="content">
                                <div class="num">348+</div>
                                <p>Committed Clients</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="services-section section-padding">

            <div class="container">
                <div class="animate-icon two">
                    <img src="{{ asset('img/icon/animation/icon-2.svg') }}" alt="two" width="138" height="145">
                </div>
                <div class="heading-wrapper text-center">
                    <div class="title">Hive of <span>Expertise</span></div>
                </div>
                <div class="items d-flex justify-content-center mt-80">
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper d-flex justify-content-center">
                                <img src="{{ asset('img/services/brand.gif') }}" alt="" width="225" height="225">
                            </div>
                            <div class="content">
                                <div class="num">01</div>
                                <div class="heading">Brand Identity & Communication</div>
                                <p>We create unique, memorable brand identities that define who you are and why you
                                    matter. Your brand is more than a logo; it's a promise, a story, and a difference.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper d-flex justify-content-center">
                                <img src="{{ asset('img/services/website.gif') }}" alt="" width="225" height="225">
                            </div>
                            <div class="content">
                                <div class="num">02</div>
                                <div class="heading">Website UI UX Design & Development</div>
                                <p>We build captivating websites designed to do more than just look great, they convert
                                    visitors into customers. We ensure an exceptional user experience with user-friendly
                                    interfaces, stunning visuals, and seamless navigation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper d-flex justify-content-center">
                                <img src="{{ asset('img/services/film.gif') }}" alt="" width="225" height="225">
                            </div>
                            <div class="content">
                                <div class="num">03</div>
                                <div class="heading">Film Production</div>
                                <p>We produce compelling films that showcase your brand's personality, values, and
                                    vision. We use storytelling, visuals, and sound to create films that capture
                                    attention, evoke emotions, and drive action.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper d-flex justify-content-center">
                                <img src="{{ asset('img/services/content.gif') }}" alt="" width="225" height="225">
                            </div>
                            <div class="content">
                                <div class="num">04</div>
                                <div class="heading">Content Marketing</div>
                                <p>We craft compelling, informative, and creative content that resonates with your
                                    audience. We tell your brand's story and build lasting connections. We provide the
                                    content that keeps your audience coming back for more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-content">
                            <div class="img-wrapper d-flex justify-content-center">
                                <img src="{{ asset('img/services/digital.gif') }}" alt="" width="225" height="225">
                            </div>
                            <div class="content">
                                <div class="num">05</div>
                                <div class="heading">Digital Marketing and Social Media</div>
                                <p>We have the knowledge, tools, and strategies to help your business stand out in the
                                    crowded online space. By leveraging various digital marketing techniques, such as
                                    SEO, social media.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-section section-padding">
            <div class="container">
                <div class="animate-icon three">
                    <img src="{{ asset('img/icon/animation/icon-3.svg') }}" alt="three" width="135" height="158">
                </div>
                <div class="heading-wrapper text-center">
                    <div class="title">A Honeycomb of <span>Happy Clients</span></div>
                </div>
                <ul class="items d-flex justify-content-center mt-80">
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/amaze.svg') }}" alt="amaze" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/century.svg') }}" alt="century" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/indolite.svg') }}" alt="indorama" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/nasscom.svg') }}" alt="nasscom" width="158" height="106">
                        </div>
                    </li>
                    {{-- <!-- <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/honeybun.svg') }}" alt="honeybun" width="158" height="106">
                        </div>
                    </li> --> --}}
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/asdc.svg') }}" alt="asdc" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/vinsys.svg') }}" alt="vinsys" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/appolo.svg') }}" alt="apollo" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/littlenap.svg') }}" alt="littlenap" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/intercont.svg') }}" alt="intercont" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/mankind.svg') }}" alt="mankind" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/mahindra.svg') }}" alt="mahindra" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/coforge.svg') }}" alt="coforge" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/sopra.svg') }}" alt="sopra" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/canon.svg') }}" alt="canon" width="158" height="106">
                        </div>
                    </li>

                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/pmkvy.svg') }}" alt="pmkvy" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/hindisoeasy.svg') }}" alt="hindi" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/fss.svg') }}" alt="fss" width="158" height="106">
                        </div>
                    </li>
                    <!-- <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/caho.svg') }}" alt="caho" width="158" height="106">
                        </div>
                    </li> -->
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/viraj.svg') }}" alt="viraj" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/saroj.svg') }}" alt="saroj" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/hjhsopital.svg') }}" alt="hjhsopital" width="158" height="106">
                        </div>
                    </li>
                    <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/avon.svg') }}" alt="avon" width="158" height="106">
                        </div>
                    </li>
                    <!-- <li class="item">
                        <div class="img-wrapper d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/brands/indolite.svg') }}" alt="indolite" width="158" height="106">
                        </div>
                    </li> -->
                </ul>
            </div>
        </section>

        <section class="portfolio-section section-padding">
            <div class="container">
                <div class="animate-icon four">
                    <img src="{{ asset('img/icon/animation/icon-4.svg') }}" alt="four" width="103" height="128">
                </div>
                <div class="heading-wrapper text-center">
                    <div class="title">The Storytelling <span>Canvas</span></div>
                </div>
                <ul class="items mt-80">
                    <li>
                        <img src="{{ asset('img/portfolio/viraj.webp') }}" alt="Viraj" width="100%" height="100%" />
                        <div class="content">
                            <div class="sm-text">Graphic Design</div>
                            <div class="name">Viraj</div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/portfolio/yoko.webp') }}" alt="Yokohama" width="100%" height="100%" />
                        <div class="content">
                            <div class="sm-text">Campaign</div>
                            <div class="name">Yokohama</div>
                        </div>
                    </li>
                    <li>
                        <video class="" width="100%" height="100%" autoplay="" loop=""
                            muted="" playsinline="" src="{{ asset('img/portfolio/ibaby.mp4') }}"></video>
                        <div class="content">
                            <div class="sm-text">Videography</div>
                            <div class="name">Ibaby Express</div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/portfolio/yokohama.webp') }}" alt="Yokohama" width="100%" height="100%" />
                        <div class="content">
                            <div class="sm-text">Graphic Design</div>
                            <div class="name">Yokohama</div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/portfolio/saroj.webp') }}" alt="SAROJ" width="100%" height="100%" />
                        <div class="content">
                            <div class="sm-text">Campaign</div>
                            <div class="name">SAROJ HOSPITAL</div>
                        </div>
                    </li>
                    <li>
                        <video class="" width="100%" height="100%" autoplay="" loop=""
                            muted="" playsinline="" src="{{ asset('img/portfolio/canon.mp4') }}"></video>
                        <div class="content">
                            <div class="sm-text">Videography</div>
                            <div class="name">Canon</div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/portfolio/futureskill.webp') }}" alt="Futureskills" width="100%"
                            height="100%" />
                        <div class="content">
                            <div class="sm-text">Graphic Design</div>
                            <div class="name">Futureskills</div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('img/portfolio/republic.webp') }}" alt="VIRAJ" width="100%" height="100%" />
                        <div class="content">
                            <div class="sm-text">Campaign</div>
                            <div class="name">Viraj</div>
                        </div>
                    </li>
                    <li>
                        <video class="" width="100%" height="100%" autoplay="" loop=""
                            muted="" playsinline="" src="{{ asset('img/portfolio/yokohama.mp4') }}"></video>
                        <div class="content">
                            <div class="sm-text">Videography</div>
                            <div class="name">Yokohama</div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="customers-section section-padding">
            <div class="container">
                <div class="animate-icon five">
                    <img src="{{ asset('img/icon/animation/icon-5.svg') }}" alt="five" width="147" height="168">
                </div>
                <div class="inner-wrapper d-flex align-items-center justify-content-center">
                    <div class="content-wrapper item">
                        <div class="heading-wrapper">
                            <div class="title">Your Brand's Next Chapter Starts with a Ring! <span>Call Us
                                    Today.</span>
                            </div>
                        </div>
                        <div class="btn-wrapper d-flex">
                            <a href="#" aria-label="Call us Now" class="dark-btn"><i
                                    class="icon-call"></i>Call us
                                Now</a>
                            <a href="#" aria-label="Mail Now" class="dark-btn"><i class="icon-email"></i>Mail
                                Now</a>
                        </div>
                    </div>
                    <div class="form-wrapper item">
                        @include('common.form')
                    </div>
                </div>
            </div>
        </section>

        <footer class="section-padding-top">
            <div class="container">
                <div class="animate-icon six">
                    <img src="{{ asset('img/icon/animation/icon-6.svg') }}" alt="six" width="167" height="167">
                </div>
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
                                <i class="icon-location"></i> 28/7 , Ground Floor Nangia park, Shaktinagar, Delhi -
                                110007
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
    </div>
    <div class="form-popup active">
        <div class="inner-content">
            <div class="heading-wrapper d-flex align-items-start justify-content-between">
                <div class="title">Your Digital Success is Just One Call Away! <span>Get In Touch</span></div>
                <div class="cross"><i class="icon-cross"></i></div>
            </div>
            @include('common.form')

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        jQuery.event.special.touchstart = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchstart", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.touchmove = {
            setup: function(_, ns, handle) {
                this.addEventListener("touchmove", handle, {
                    passive: !ns.includes("noPreventDefault")
                });
            }
        };
        jQuery.event.special.wheel = {
            setup: function(_, ns, handle) {
                this.addEventListener("wheel", handle, {
                    passive: true
                });
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function(_, ns, handle) {
                this.addEventListener("mousewheel", handle, {
                    passive: true
                });
            }
        };
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
