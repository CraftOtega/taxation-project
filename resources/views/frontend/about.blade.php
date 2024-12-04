@extends('frontend.layouts.app')

@section('content')
    <!-- Breadcrumb Area -->
    <div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="cr-breadcrumb">
                        <ul class="cr-breadcrumb__pagination">
                            <li>
                                <a href="index">Home</a>
                            </li>
                            <li>About</li>
                        </ul>
                        <h1>About Us</h1>
                        <p>Welcome to the Oyo State Withholding Tax Portal—your comprehensive resource for understanding and
                            managing Withholding Tax in Oyo State, Nigeria. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->


    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="2" id="offcanvasMenu">
        <div class="offcanvas-header">
            <div class="offcanvas__logo">
                <a href="index">
                    <!--<img src="assets/images/logo/logo-theme.webp" alt="header logo">-->
                    web79
                </a>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <ul class="offcanvas__info">
                <li>
                    <a href="#"><i class="flaticon-old-typical-phone"></i> 01354 568 787</a>
                </li>
                <li>
                    <a href="#"><i class="flaticon-black-back-closed-envelope-shape"></i> info@taxco.com</a>
                </li>
            </ul>

            <!-- Main Navigation -->
            <nav class="canvas-menu">
                <ul>
                    <li>
                        <a href="index">HOME</a>
                        <!-- <ul class="sub-menu">
                                    <li><a href="index">Homepage Classic</a></li>
                                    <li><a href="index-2">Homepage Interactive</a></li>
                                    <li><a href="index-3">Homepage Modern</a></li>
                                    <li><a href="index-with-content-slider">Homepage Content Slider</a></li>
                                    <li><a href="index-with-single-banner">Homepage Single Banner</a></li>
                                    <li><a href="index-boxed-layout">Homepage Boxed Layout</a></li>
                                </ul> -->
                    </li>
                    <li><a href="about-us">ABOUT</a></li>
                    <li><a href="features">FEATURES</a></li>
                    <li>
                        <a href="services">SERVICE</a>
                        <!-- <ul class="sub-menu">
                                    <li><a href="services">Services</a></li>
                                    <li><a href="services-2">Services Style 2</a></li>
                                    <li><a href="single-service">Single Service</a></li>
                                </ul> -->
                    </li>
                    <li>
                        <a href="#">PAGES</a>
                        <ul class="sub-menu">
                            <li><a href="about-us">ABOUT</a></li>
                            <li>
                                <a href="blog">BLOG</a>
                                <!-- <ul class="sub-menu">
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="blog-with-right-sidebar">Blog With Right Sidebar</a></li>
                                            <li><a href="blog-with-left-sidebar">Blog With Left Sidebar</a></li>
                                            <li><a href="blog-details">Blog Details</a></li>
                                            <li><a href="blog-details-with-left-sidebar">Blog Details With Left Sidebar</a></li>
                                            <li><a href="blog-details-with-video">Blog Details With Video</a></li>
                                            <li><a href="blog-details-with-slider">Blog Details With Slider</a></li>
                                        </ul> -->
                            </li>
                            <li><a href="features">FEATURES</a></li>
                            <li>
                                <a href="services">SERVICE</a>
                                <!-- <ul class="sub-menu">
                                            <li><a href="services">Services</a></li>
                                            <li><a href="services-2">Services Style 2</a></li>
                                            <li><a href="single-service">Single Service</a></li>
                                        </ul> -->
                            </li>
                            <!--<li><a href="advisors">Advisors</a></li>-->
                            <!--<li><a href="advisor-details">Advisor Details</a></li>-->
                            <!--<li><a href="appointment">Appointment</a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="blog">BLOG</a>
                        <!-- <ul class="sub-menu">
                                    <li><a href="blog">Blog</a></li>
                                    <li><a href="blog-with-right-sidebar">Blog With Right Sidebar</a></li>
                                    <li><a href="blog-with-left-sidebar">Blog With Left Sidebar</a></li>
                                    <li><a href="blog-details">Blog Details</a></li>
                                    <li><a href="blog-details-with-left-sidebar">Blog Details With Left Sidebar</a></li>
                                    <li><a href="blog-details-with-video">Blog Details With Video</a></li>
                                    <li><a href="blog-details-with-slider">Blog Details With Slider</a></li>
                                </ul> -->
                    </li>
                    <li><a href="contact">CONTACT</a></li>
                </ul>
            </nav>
            <!--// Main Navigation -->

            <div class="offcanvas__button">
                <a class="cr-btn cr-btn--lg" href="appointment">
                    <span>Make an appointment</span>
                </a>
            </div>
        </div>
    </div>
    <!-- //Offcanvas -->

    <!-- Page Conent -->
    <main class="page-content">

        <!-- About Area -->
        <section id="about-area" class="cr-section about-area bg--white">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-10">
                        <div class="about-area__content2 text-center">
                            <h4>WE ARE “
                                <span class="color--theme">web79</span>”
                            </h4>
                            <h3 class="cd-headline cx-heading slide">PROVIDE BEST TAX SOLUTION FOR YOUR
                                <span class="color--theme cd-words-wrapper cd-words-wrapper-2">
                                    <b class="is-visible">Business</b>
                                    <b>Performance</b>
                                    <b>Success</b>
                                </span>
                                TO GROWUP
                            </h3>
                            <p>Educate the public about the Withholding Tax System, demystifying tax laws and regulations to
                                promote transparency and understanding.</p>
                            <p>Equip tax agents and taxpayers with innovative IT tools that facilitate accurate tax
                                computation and seamless payment processes.
                                Enhance the capabilities of the Oyo State tax authority in monitoring compliance, assessing
                                taxes for high net-worth individuals, and efficiently accounting for collected revenues.</p>
                            <a href="#" class="cr-readmore">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-area__image2">
                            <img src="assets/images/about/about-thumbnail-3.webp" alt="about area image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //About Area -->

        <!-- Features Area -->
        <section id="features-area" class="cr-section features-area">
            <div class="row g-0">

                <!-- Single Feature -->
                <div class="col-lg-4">
                    <div class="feature">
                        <div class="feature__icon">
                            <span>
                                <i class="flaticon-shield"></i>
                            </span>
                            <span>
                                <i class="flaticon-shield"></i>
                            </span>
                        </div>
                        <div class="feature__content">
                            <h4 class="wow fadeInUp">
                                <a href="features">Educational Resources</a>
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">In-Depth Information: Access detailed
                                explanations of Withholding Tax laws, regulations, guidelines, and policies.
                                Public Awareness: Learn about how tax revenues contribute to the social and economic
                                development of Oyo State.</p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4">
                    <div class="feature active">
                        <div class="feature__icon">
                            <span>
                                <i class="flaticon-team"></i>
                            </span>
                            <span>
                                <i class="flaticon-team"></i>
                            </span>
                        </div>
                        <div class="feature__content">
                            <h4 class="wow fadeInUp">
                                <a href="features">IT Tools for Compliance</a>
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">Tax Computation: Utilize our online tools to
                                accurately calculate taxes due on various transactions.
                                Easy Payment: Remit Withholding Tax through our secure online payment platforms integrated
                                with state systems.</p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4">
                    <div class="feature">
                        <div class="feature__icon">
                            <span>
                                <i class="flaticon-24-hours"></i>
                            </span>
                            <span>
                                <i class="flaticon-24-hours"></i>
                            </span>
                        </div>
                        <div class="feature__content">
                            <h4 class="wow fadeInUp">
                                <a href="features">Enhanced Tax Authority Support</a>
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">Compliance Monitoring: Advanced systems to help
                                authorities track and enforce tax compliance.
                                Vendor Identification: Tools to identify vendors and individuals associated with tax
                                payments.
                                Revenue Accounting: Detailed analytics and reporting for all Withholding Tax sub-categories.
                            </p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

            </div>
        </section>
        <!--// Features Area -->

        <!-- Service Area -->
        <section id="service-area" class="service-area section-padding-top--xlg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-title">
                            <h4>Our Key Features</h4>
                            <h2>User-Friendly
                                <span class="color--theme">Interface</span>
                            </h2>
                            <p>Navigate through our platform with ease, whether you're a tax agent, taxpayer, or part of the
                                tax authority.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="service-area__services">
                            <div class="row">

                                <!-- Single Service -->
                                <div class="col-lg-6 col-md-6 wow flipInX">
                                    <div class="service">
                                        <div class="service__icon">
                                            <img src="assets/images/icons/service-icon-user.webp" alt="service icon">
                                        </div>
                                        <div class="service__content">
                                            <h5>
                                                <a href="single-service">Comprehensive Reporting</a>
                                            </h5>
                                            <p>Generate batch reports, timeline reports, and tax credit reports to keep
                                                track of all your transactions and tax obligations. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Service -->

                                <!-- Single Service -->
                                <div class="col-lg-6 col-md-6 wow flipInX">
                                    <div class="service">
                                        <div class="service__icon">
                                            <img src="assets/images/icons/service-icon-bar.webp" alt="service icon">
                                        </div>
                                        <div class="service__content">
                                            <h5>
                                                <a href="single-service">Personalized Dashboard:</a>
                                            </h5>
                                            <p>Access your personal page displaying company information, transaction
                                                history, and tailored tools for your tax needs. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Service -->

                                <!-- Single Service -->
                                <div class="col-lg-6 col-md-6 wow flipInX">
                                    <div class="service">
                                        <div class="service__icon">
                                            <img src="assets/images/icons/service-icon-briefcase.webp" alt="service icon">
                                        </div>
                                        <div class="service__content">
                                            <h5>
                                                <a href="single-service">Secure Registration</a>
                                            </h5>
                                            <p>Register using your existing State Taxpayer Identification Number (STIN) with
                                                seamless verification through selfservice.oyostatebir.com.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Service -->

                                <!-- Single Service -->
                                <div class="col-lg-6 col-md-6 wow flipInX">
                                    <div class="service">
                                        <div class="service__icon">
                                            <img src="assets/images/icons/service-icon-pie.webp" alt="service icon">
                                        </div>
                                        <div class="service__content">
                                            <h5>
                                                <a href="single-service">Data Security:</a>
                                            </h5>
                                            <p>We prioritize the confidentiality and security of your information with
                                                robust data protection measures.
                                        </div>
                                    </div>
                                    <!--// Single Service -->

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-area__bars text-center">
                                <div class="cr-bars justify-content-lg-end justify-content-center">
                                    <div class="cr-bar" data-bar-percent="25" data-bar-title="2013"></div>
                                    <div class="cr-bar" data-bar-percent="45" data-bar-title="2014"></div>
                                    <div class="cr-bar" data-bar-percent="37" data-bar-title="2015"></div>
                                    <div class="cr-bar" data-bar-percent="69" data-bar-title="2016"></div>
                                    <div class="cr-bar" data-bar-percent="88" data-bar-title="2022"></div>
                                </div>
                                <span class="cr-bars__name">Our progress</span>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--// Service Area -->

        <!-- Team Area -->
        <section id="team-area" class="advisor-area bg--white section-padding--xlg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-title text-center">
                            <h4>OUR TEAM</h4>
                            <h2>MEET OUR
                                <span class="color--theme">TAX ADVISOR</span>
                            </h2>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque
                                ipsa quae</p>
                        </div>
                    </div>
                </div>
                <div class="row advisors">

                    <!-- Single Advisor -->
                    <div class="col-lg-3 col-sm-6">
                        <figure class="advisor">
                            <div class="advisor__image">
                                <img src="assets/images/advisors/advisor-1.webp" alt="team member">
                            </div>
                            <figcaption class="advisor__content">
                                <h6>
                                    <a href="advisor-details">SIMON DE ANDERSON</a>
                                </h6>
                                <p>Senior Advisor</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!--// Single Advisor -->

                    <!-- Single Advisor -->
                    <div class="col-lg-3 col-sm-6">
                        <figure class="advisor">
                            <div class="advisor__image">
                                <img src="assets/images/advisors/advisor-2.webp" alt="team member">
                            </div>
                            <figcaption class="advisor__content">
                                <h6>
                                    <a href="advisor-details">JUlia ANDERSON</a>
                                </h6>
                                <p>Senior Advisor</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!--// Single Advisor -->

                    <!-- Single Advisor -->
                    <div class="col-lg-3 col-sm-6">
                        <figure class="advisor">
                            <div class="advisor__image">
                                <img src="assets/images/advisors/advisor-3.webp" alt="team member">
                            </div>
                            <figcaption class="advisor__content">
                                <h6>
                                    <a href="advisor-details">David Miller</a>
                                </h6>
                                <p>Tax Advisor</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!--// Single Advisor -->

                    <!-- Single Advisor -->
                    <div class="col-lg-3 col-sm-6">
                        <figure class="advisor">
                            <div class="advisor__image">
                                <img src="assets/images/advisors/advisor-4.webp" alt="team member">
                            </div>
                            <figcaption class="advisor__content">
                                <h6>
                                    <a href="advisor-details">Martin Smith</a>
                                </h6>
                                <p>Tax Advisor</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!--// Single Advisor -->

                </div>
            </div>
        </section>
        <!--// Team Area -->

        <!-- Funfact Area -->
        <div id="funfact-area" class="funfact-area bg--white">
            <div class="funfacts">
                <div class="row g-0">

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">349</span>
                            </h1>
                            <h5>TRUSTED CLIENTS</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">109</span>
                            </h1>
                            <h5>Awards Win</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">459</span>
                            </h1>
                            <h5>Project Done</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">19</span>
                            </h1>
                            <h5>Expert Advisor</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                </div>
            </div>
        </div>
        <!--// Funfact Area -->

        <!-- Testimonial Area -->
        <div id="testimonial-area" class="testimonial-area section-padding--xlg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title no-padding">
                            <h2>WHAT
                                <span class="color--theme">CLIENTS SAY</span>
                            </h2>
                            <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanti,
                                totam rem aperiam, eaque
                                ipsa quae so something new for tax calculation </p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="testimonial testimonial-slider-style3-active testimonial--style3">

                            <!-- Testimonial Single -->
                            <div class="testimonial__single">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit
                                        rnatur aut odit aut fugit, sed
                                        quia</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-3.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>SHON SMITH</h6>
                                        <span>President</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Single -->

                            <!-- Testimonial Single -->
                            <div class="testimonial__single">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit
                                        rnatur aut odit aut fugit, sed
                                        quia</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-2.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>RAISA MARIYA</h6>
                                        <span>Ceo</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Single -->

                            <!-- Testimonial Single -->
                            <div class="testimonial__single">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit
                                        rnatur aut odit aut fugit, sed
                                        quia</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-1.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>John Patrik</h6>
                                        <span>Executive</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Single -->

                            <!-- Testimonial Single -->
                            <div class="testimonial__single">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit
                                        rnatur aut odit aut fugit, sed
                                        quia</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-3.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>SHON SMITH</h6>
                                        <span>President</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Single -->

                            <!-- Testimonial Single -->
                            <div class="testimonial__single">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit
                                        rnatur aut odit aut fugit, sed
                                        quia</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-2.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>RAISA MARIYA</h6>
                                        <span>Ceo</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Single -->

                            <!-- Testimonial Single -->
                            <div class="testimonial__single">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>parchitecto beatae vitae dicta sunt abo no enim ipsam voluptatem quia voluptas sit
                                        rnatur aut odit aut fugit, sed
                                        quia</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-1.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>John Patrik</h6>
                                        <span>Executive</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Single -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Testimonial Area -->

        <!-- Call To Action Area -->
        <section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="calltoaction text-center">
                            <h3>NEED ANY HELP AT
                                <span class="color--theme"> YOUR TAX SOLUTION?</span>
                            </h3>
                            <p>We invite you to explore the full range of services offered on the Oyo State Withholding Tax
                                Portal. Whether you are a taxpayer seeking to understand your obligations, a tax agent
                                managing multiple clients, or a tax authority official overseeing compliance, our platform
                                is designed to meet your needs effectively and efficiently. Register today using your STIN
                                and experience a streamlined approach to managing Withholding Taxes. </p>
                            <h6>JUST DAIL
                                <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Call To Action Area -->

    </main>
    <!-- //Page Conent -->
@endsection
