<?php
require('./layouts/toplayout.php')
?>
<link href="./assets/css/style.css" rel="stylesheet" />
<title>Whiltor | Drive Your Journey To Peak</title>
<meta content="Whiltor is a consulting service that can help you with all of your professional decisions and ideas by providing you with powerful and clever solutions. Connect with the most trusted and satisfactory consultancy firm all round the globe and Drive Your Journey To Peek!" name="description" />
<meta content="consultancy, services, target, consult, advice, development, designing, growth, success, marketing, solution, strategize, process, implement, achieve, roadmap, project, satisfaction, trust, loyalty, quality, goals, connect, grow, branding, graphic, seo, confused, collaborate, collaboration, mentoring, technical, hr, management, business, leadership, best, market, improve, presence, doorstep, excellence, strategic, powerful, fast, reliable, trustworthy, 24/7, available, quick, social media,platforms, helpline, availability, customer, choose, succeed, advancement, confusion, strategy, helpinghand, help, partners, partnership, mentor, optimise, discuss, work, team, teamwork, guidance, advising, counselling, direction, assistance, system, about, about us, about whiltor" name="keywords" />
</head>

<body onload="checkWidth()">

    <div>
        <?php
        require('./partials/homenav.php')
        ?>
    </div>
    <!-- Home Landing -->
    <div class="home-landing">
        <div class="home-content">
            <div class="container">
                <div class="row" id="landing-text-div-id">
                    <div class="col-md-4">
                        <span class="type" style="font-size:60px; font-weight:bold;"></span>
                        <h3>Your Vision With Whiltor</h3>
                        <h6>Connect with the most trusted and satisfactory consultancy firm all round the globe and <strong>Drive Your Journey To Peek!</strong></h6>
                        <a href="{{ route('contact') }}">
                            <button class="custom-btn1 btn-16 mt-3">
                                Request A Callback &nbsp;
                                <i class="fas fa-phone-alt land-phone"></i>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <img class="onmob-landing" src="./assets/img/homelanding/home.png" width="100%" alt="..."/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Landing End -->

    <!-- div-1 Landing transition 4-cards start-->
    <div class="container mb-5 px-4" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="card-wrapper px-3 py-2" style="border-bottom:5px solid #dbcef0;">
                            <div class="home-icon-div d-flex justify-content-center mt-2 top-icon" style="color: #8B6FC0; background-color: #F0E7FF; ">
                                <i class="fas fa-medal "></i>
                            </div>
                            <h4 class="mt-4">Trust</h4>
                            <p>Trust Whiltor with your Business And Drive Your Journey To Peek! </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="card-wrapper px-3 py-2" style="border-bottom:5px solid #FFEEBA">
                            <div class="home-icon-div d-flex justify-content-center mt-2 top-icon" style="color: #D98A19; background-color: #FFEEBA; ">
                                <i class="fas fa-star "></i>
                            </div>
                            <h4 class="mt-4">Loyalty</h4>
                            <p>Whiltor is known for providing quality service and its brand loyalty.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="card-wrapper px-3 py-2" style="border-bottom:5px solid #a9e0e0">
                            <div class="home-icon-div d-flex justify-content-center mt-2 top-icon" style="color: #3cacac; background-color: #a9e0e0;">
                                <i class="fas fa-tools "></i>
                            </div>
                            <h4 class="mt-4">Service</h4>
                            <p>Grow and Expand your Business with our renowned consultancy services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="card-wrapper px-3 py-2" style="border-bottom:5px solid #b0c4e7;">
                            <div class="home-icon-div d-flex justify-content-center mt-2 top-icon" style="color: #1A2942; background-color: #b0c4e7;">
                                <i class="fas fa-smile "></i>
                            </div>
                            <h4 class="mt-4">Satisfaction</h4>
                            <p>Whiltor is known for excellent customer services and satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- div-1 Landing transition 4-cards end -->

    <!-- div-2 analytic-div start-->
    <div class="main-text section-title mb-3 text-center px-4" style="margin-top:10% !important" data-aos="fade-up" data-aos-delay="0.1s">
        <h3 class="text-black">
            Achieve Your Dynamic Business Goals and
        </h3>
        <h4 class="text-black">
            Build a Better Future with Whiltor
        </h4>
    </div>
    <div class="container" data-aos="zoom-in">
        <div class="row">
            <div class="col-md-5">
                <div class="d-flex justify-content-center">
                    <img src="./assets/img/img21/img21NoShadowNoBg.png" width="80%" />
                </div>
            </div>
            <div class="col-md-7">
                <p class="mt-5 text-center text-md-start px-sm-3 p-md-0">
                Whiltor ensures your company's long-term success by leveraging our expertise and conceptual understanding. Our goal is to carry out your plan, and your faith is our greatest strength. It's never been easier to connect with consulting services and launch your company into a new era of quick growth by implementing cutting-edge technology and marketing strategies.
                </p>
                <div class="row mt-5">
                    <div class="col-md-3 d-none d-lg-block">
                        <lord-icon src="https://cdn.lordicon.com/qhgmphtg.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#30c9e8" style="width: 70px; height: 70px">
                        </lord-icon>
                        <p>Know About Us</p>
                    </div>
                    <div class="col-md-3 d-none d-lg-block">
                        <lord-icon    src="https://cdn.lordicon.com/uqpazftn.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#e8308c" style="width: 70px; height: 70px">
                        </lord-icon>
                        <p>Connect With Us</p>
                    </div>
                    <div class="col-md-3 d-none d-lg-block">
                        <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#e8e230" style="width: 70px; height: 70px">
                        </lord-icon>
                        <p>Grow With Us</p>
                    </div>
                </div>
            </div>
            <div class="d-sm-block d-lg-none">
                <div class="row mt-5">
                    <div class="col-sm-4 text-center">
                       <div class="d-flex justify-content-center">
                        <lord-icon src="https://cdn.lordicon.com/qhgmphtg.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#30c9e8" style="width: 70px; height: 70px">
                        </lord-icon>
                       </div>
                        <p>Know About Us</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <lord-icon    src="https://cdn.lordicon.com/uqpazftn.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#e8308c" style="width: 70px; height: 70px">
                        </lord-icon>
                        <p>Connect With Us</p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <lord-icon   src="https://cdn.lordicon.com/gqdnbnwt.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#e8e230" style="width: 70px; height: 70px">
                        </lord-icon>
                        <p>Grow With Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- div-2 analytic-div end-->
    <img src="./assets/img/scut1.png" width="100%">

    <!-- div-3 GET A GLIMPSES start -->
    <section id="why-us" class="why-us">
        <div class="container-fluid">
            <div class="row justify-content-center px-4" style="background-color:#1A2942">
                <h2 class="text-center text-white mb-5 mt-5">GET A GLIMPSES</h2>
                <div class="col-lg-4 mt-5">
                    <iframe width="100%"  src="https://www.youtube.com/embed/S-WPnIDovk4" title="Whiltor" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="aspect-ratio: 16/9 " allowfullscreen></iframe>
                </div>
                <div class="col-lg-1 mt-3"></div>
                <div class="col-lg-4 mt-5 mb-5">
                    <iframe width="100%"   src="https://www.youtube.com/embed/QKL46wxu_ek" title="Whiltor" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="aspect-ratio: 16/9 " allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <img src="./assets/img/scut2.png" width="100%">
    <!-- div-3 GET A GLIMPSES end  -->

    <!-- div-4 our features start -->
    <div class="main-text section-title mb-2 text-center" data-aos="fade-up">
        <h2 class="text-black" style="margin-top:10% !important">Our Featuring Services</h2>

    </div>
    <div class="pset" data-aos="zoom-in">
        <div class="container">
            <div class="row listar-feature-items justify-content-center">
                <div class="col-md-6 col-lg-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed mt-5" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px" style="align-self: flex-start">
                    <div class="listar-feature-item listar-feature-has-link">
                        <a href="" target="_blank"></a>
                        <div class="listar-feature-item-inner">
                            <div class="listar-feature-right-border"></div>
                            <div class="listar-feature-block-content-wrapper">
                                <div class="listar-feature-icon-wrapper">
                                    <div class="listar-feature-icon-inner">
                                        <div>
                                            <img alt="Branding" class="listar-image-icon" src="./assets/img/icons8-customer-service-128.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="listar-feature-content-wrapper" style="padding-top: 0px">
                                    <div class=" listar-feature-item-title listar-feature-counter-added">
                                        <span><span>01</span> Branding </span>
                                    </div>
                                    <div class="listar-feature-item-excerpt">
                                    Create a powerful brand image that stands out in the market and increase your audience by ten folds.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
                </div>
                <div  class="col-md-6 col-lg-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed mt-5" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px" style="align-self: flex-start">
                    <div class="listar-feature-item listar-feature-has-link">
                        <a href="" target="_blank"></a>
                        <div class="listar-feature-item-inner">
                            <div class="listar-feature-right-border"></div>
                            <div class="listar-feature-block-content-wrapper">
                                <div class="listar-feature-icon-wrapper">
                                    <div class="listar-feature-icon-inner">
                                        <div>
                                            <img alt="Product Development" class="listar-image-icon" src="./assets/img/icons8-idea-96.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="listar-feature-content-wrapper" style="padding-top: 0px">
                                    <div class="listar-feature-item-title listar-feature-counter-added">
                                        <span><span>02</span> Product Development </span>
                                    </div>
                                    <div class="listar-feature-item-excerpt">
                                    Develop quick, modern, advanced products using cutting-edge technologies, and expand your customer base with ease.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height">></div>
                </div>
                <div class="col-md-6 col-lg-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed mt-5" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px" style="align-self: flex-start">
                    <div class="listar-feature-item listar-feature-has-link">
                        <a href="" target="_blank"></a>
                        <div class="listar-feature-item-inner">
                            <div class="listar-feature-right-border"></div>
                            <div class="listar-feature-block-content-wrapper">
                                <div class="listar-feature-icon-wrapper">
                                    <div class="listar-feature-icon-inner">
                                        <div>
                                            <img alt="Graphic Solutions" class="listar-image-icon" src="./assets/img/icons8-technology-150.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="listar-feature-content-wrapper" style="padding-top: 0px">
                                    <div class="listar-feature-item-title listar-feature-counter-added">
                                        <span><span>03</span> Graphic Solutions </span>
                                    </div>
                                    <div class="listar-feature-item-excerpt">
                                    Create a memorable virtual experience for your customers by displaying stunning and eye-catching graphics.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- div-4 our features end -->

    <!-- div-5 3d-cards start -->
    <div class="main-text section-title mb-5 text-center" data-aos="zoom-in">
        <h2 class="text-black">WORK WITH WHILTOR</h2>
        <p class="mt-4 mb-5">
            Simple steps to work with Whiltor
        </p>
    </div>
    <div class="container cards-3d mt-5" data-aos="fade-up">
        <div class="row justify-content-center pt-5">
            <div class="col-md-6 col-lg-3 d-inline-flex justify-content-center" style="margin-top: 4rem">
                <div class="threed-card">
                    <div class="threed-img d-flex justify-content-center">
                        <img src="./assets/img/img2/img2NoShadowNoBg.png " alt="Confused??" width="290px" />
                    </div>
                    <div class="card-content">
                        <h4 class="text-center">Confused??</h4>
                        <p class="p-4">
                        Are you seeking for a platform that can help your business expand by providing solutions?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-inline-flex justify-content-center" style="margin-top: 4rem">
                <div class="threed-card">
                    <div class="threed-img d-flex justify-content-center">
                        <img src="./assets/img/img17/img17NoShadowNoBg.png " alt="Learn About Whiltor" width="290px" />
                    </div>
                    <div class="card-content">
                        <h4 class="text-center">Learn About Whiltor</h4>
                        <p class="p-4">Connect with us to learn more about Whiltor and how it can help you grow your business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-inline-flex justify-content-center" style="margin-top: 4rem">
                <div class="threed-card">
                    <div class="threed-img d-flex justify-content-center">
                        <img src="./assets/img/img8/img8NoShadowNoBg.png " alt="Connect with Us" width="290px" />
                    </div>
                    <div class="card-content">
                        <h4 class="text-center">Connect with Us</h4>
                        <p class="p-4">
                        Contact with us via our website, phone number, or any other social media platform.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-inline-flex justify-content-center" style="margin-top: 4rem">
                <div class="threed-card">
                    <div class="threed-img d-flex justify-content-center">
                        <img src="./assets/img/img4/img4NoShadowNoBg.png " alt="Enjoy Success" width="290px" />
                    </div>
                    <div class="card-content">
                        <h4 class="text-center">Enjoy Success
                        </h4>
                        <p class="p-4">
                        After you've connected with us, leave everything to us and drive your journey to peek.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- div-5 3d-cards end -->

    <!-- div-6 start -->
    <div class="container px-4" data-aos="ad-up" style="margin-top: 5rem">
        <div class="main-text section-title mb-5 text-center" data-aos="zoom-in ">
            <h2 class="text-black" style="margin-top:10% !important">Collaborate with Whiltor</h2>
        </div>
        <div class="row" data-aos="zoom-in">
            <div class="col-md-5">
                <div class="d-flex justify-content-center mt-5 mb-4">
                    <img src="./assets/img/3d-hands-fun-and-wild-handshake-2.png " width="250px " />
                </div>
            </div>
            <div class="col-md-7 text-center text-md-start">
                <h5 class="mt-3">Collaboration is Always Better</h5>
                <p class="mt-1">
                For a healthy and continual growth, connect with whiltor. Working with Whiltor provides you an edge over competitors in your field of expertise, allowing you to expand your business. We provide everything you need for your business to succeed, from consulting to development.
                </p>
                <a href="/contact"><button type="button" class="btn btn-outline-dark">Contact Us</button></a>
            </div>
        </div>
    </div>
    <!-- div-6 end -->

    <!-- div-7 Steps start -->
    <div class="container" data-aos="fade-up" style="margin-top: 4rem">

        <div class="circle-container" style="margin-top: 5rem">
            <div class="outer-circle">
                <div class="inner-circle">
                    <div class="inner-circle-content">
                        <span>SETUP</span>
                        <svg width="35 " height="35 " viewBox="0 0 24 24 ">
                <path
                  d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z "
                ></path>
              </svg>
                    </div>
                </div>
            </div>
            <div class="outer-circle">
                <div class="inner-circle">
                    <div class="inner-circle-content">
                        <span>CHOOSE</span>
                        <svg width="35 " height="35 " viewBox="0 0 24 24 ">
                <path
                  d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13
                        16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z "
                ></path>
              </svg>
                    </div>
                </div>
            </div>
            <div class="outer-circle">
                <div class="inner-circle">
                    <div class="inner-circle-content">
                        <span>CHECKOUT</span>
                        <svg width="35 " height="35 " viewBox="0 0 24 24 ">
                <path
                  d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z "
                ></path>
              </svg>
                    </div>
                </div>
            </div>
            <div class="outer-circle">
                <div class="inner-circle">
                    <div class="inner-circle-content">
                        <span>SUCCEED</span>
                        <i class="fas fa-award" style="font-size: 35px; margin-top: 9px; color: #1a2942"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- div-7 Steps end -->

    <!-- div-8 color-cards start -->
    <div class="container mb-5 px-3" style="margin-top: 6rem" data-aos="fade-up">
        <div class="main-text section-title mb-5 text-center" c>
            <h2 class="text-black">BENEFITS</h2>
            <p class="mt-4">
                Whiltor offers you a full range of services, from planning to execution.
            </p>
        </div>
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card yellow card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-headset" style="font-size: 50px; color: #d98a19; z-index: 100"></i>
                            </div>
                            <p>Consultancy</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card green card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-bullhorn" style="font-size: 50px; color: #4fc391; z-index: 100"></i>
                            </div>
                            <p>Marketing</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card purple card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-crown" style="font-size: 50px; color: #8b6fc0; z-index: 100"></i>
                            </div>
                            <p>Branding</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card blue card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-cogs" style="font-size: 50px; color: #3b6cb7; z-index: 100"></i>
                            </div>
                            <p>Product Development</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card teal card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-chalkboard-teacher" style="font-size: 50px; color: #3CACAC; z-index: 100"></i>
                            </div>
                            <p>Mentoring</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card darkgrey card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-users" style="font-size: 50px; color: #1A2942; z-index: 100"></i>
                            </div>
                            <p>Human Resource</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-5">
                <div class="d-flex justify-content-center">
                    <div>
                        <a href="# " class="card pink card-div">
                            <div class="overlay"></div>
                            <div class="circle">
                                <i class="fas fa-network-wired" style="font-size: 50px; color: #F7316E; z-index: 100"></i>
                            </div>
                            <p>Technical Support</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- div-8 color-cards end -->

    <!-- div-8 tab-cards start -->
    <div class="main-text section-title mb-5 text-center px-3" data-aos="fade-up" style="margin-top: 7rem">
        <h2 class="text-black">Advantages of choosing us </h2>
        <p class="mt-4">
        Our Work Speaks for Us. 
        </p>
    </div>
    <div class="container px-3">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <!-- Tab navs -->
                <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
                    <a class="tab-link active mt-3 px-3 py-1 card-div" id="v-tabs-home-tab" data-mdb-toggle="tab" href="#v-tabs-home" role="tab" aria-controls="v-tabs-home" aria-selected="true" data-aos="fade-up">
                        <div class="mt-lg-0 text-center text-lg-start" data-aos="fade-up ">
                            <div>
                                <lord-icon src="https://cdn.lordicon.com/sbiheqdr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width: 60px; height: 60px">
                                </lord-icon>
                            </div>
                            <h5>Personalised plans for your requirements</h5>
                            <p style="color: grey">
                            For us, your vision is everything, and we will first understand your business and goals before recommending the best plans for your growth.
                            </p>
                        </div>
                    </a>
                    <a class="tab-link mt-5 px-3 py-1 card-div" id="v-tabs-profile-tab" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab" aria-controls="v-tabs-profile" aria-selected="false" data-aos="fade-up">
                        <div class="mt-lg-0 text-center text-lg-start">
                            <div>
                                <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json " trigger="loopf" colors="primary:#121331,secondary:#08a88a " style="width: 60px; height: 60px">
                                </lord-icon>
                            </div>
                            <h5>Best solutions tailored to your vision</h5>
                            <p style="color: grey">
                            Before the Whiltor, it was never so simple to turn your digital visions into reality. Connect and experience  excellence for yourself.
                            </p>
                        </div>
                    </a>
                    <a class="tab-link mt-5 px-3 py-1 card-div" id="v-tabs-profile-tab" data-mdb-toggle="tab" href="#v-tabs-messages" role="tab" aria-controls="v-tabs-profile" aria-selected="false" data-aos="fade-up">
                        <div class="mt-lg-0 text-center text-lg-start" data-aos="fade-up">
                            <div>
                                <lord-icon src="https://cdn.lordicon.com/ssdupzsv.json" trigger="loop" colors="primary:#121331,secondary:#08a88a " style="width: 60px; height: 60px">
                                </lord-icon>
                            </div>
                            <h5>Boost your brand's visibility in market</h5>
                            <p style="color: grey">
                            We at Whiltor deliver a fully customized solutions that will makes your product stand out and shine in the marketplace.
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Tab navs -->
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <!-- Tab content -->
                <div class="tab-content h-100" id="v-tabs-tabContent">
                    <div class="tab-pane fade show active h-100" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab" data-aos="fade-up">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <img src="./assets/img/img3/img3NoShadowNoBg.png " width="100%" />
                        </div>
                    </div>
                    <div class="tab-pane fade h-100" id="v-tabs-profile" role="tabpane2" aria-labelledby="v-tabs-profile-tab" data-aos="fade-up">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <img src="./assets/img/img5/img5NoShadowNoBg.png " width="100% " />
                        </div>
                    </div>
                    <div class="tab-pane fade h-100" id="v-tabs-messages" role="tabpane3" aria-labelledby="v-tabs-messages-tab" data-aos="fade-up">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <img src="./assets/img/img4/img4NoShadowNoBg.png " width="100%" />
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
            </div>
        </div>
    </div>
    <!-- div-8 tab-cards end -->

    <!-- div-9 Call-to-action-box start-->
    <div class="container mt-5">
        <div class="row justify-content-center" style="position:relative;">
            <img src="./assets/img/book-service.png" class="top-img">
            <div class="col-12">
                <div class="call-to-action-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <div class="contact-div-home">
                                <h3 class="mt-4">Request a callback</h3>
                                <p class="">Are you stuck on something that is interfering with your dream project? Connect with us now. We offer solutions for all of your challenges, from project development to branding and marketing, we can meet all of your requirements. With just a phone call, you may have all of your services delivered right to your door.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12">
                            <div class="contact-btn d-flex justify-content-center align-items-center">
                                <div class="phone cta">Call us</div>
                                <div class="phone number">093 43514559</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require('./layouts/bottomlayout.php')
?>