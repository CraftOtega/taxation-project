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
                            <li>Features</li>
                        </ul>
                        <h1>Features</h1>
                        <p>Explore the robust features of the Oyo State Withholding Tax Portal designed to simplify tax
                            processes, enhance compliance, and provide valuable resources for taxpayers, tax agents, and the
                            tax authority.</p>
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
                    <img src="assets/images/logo/logo-theme.webp" alt="header logo">
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
                        <!--<ul class="sub-menu">-->
                        <!--	<li><a href="index">Homepage Classic</a></li>-->
                        <!--	<li><a href="index-2">Homepage Interactive</a></li>-->
                        <!--	<li><a href="index-3">Homepage Modern</a></li>-->
                        <!--	<li><a href="index-with-content-slider">Homepage Content Slider</a></li>-->
                        <!--	<li><a href="index-with-single-banner">Homepage Single Banner</a></li>-->
                        <!--	<li><a href="index-boxed-layout">Homepage Boxed Layout</a></li>-->
                        <!--</ul>-->
                    </li>
                    <li><a href="about-us">ABOUT</a></li>
                    <li><a href="features">FEATURES</a></li>
                    <li>
                        <a href="services">SERVICE</a>
                        <!--<ul class="sub-menu">-->
                        <!--	<li><a href="services">Services</a></li>-->
                        <!--	<li><a href="services-2">Services Style 2</a></li>-->
                        <!--	<li><a href="single-service">Single Service</a></li>-->
                        <!--</ul>-->
                    </li>
                    <li>
                        <a href="#">PAGES</a>
                        <ul class="sub-menu">
                            <li><a href="about-us">ABOUT</a></li>
                            <li>
                                <a href="blog">BLOG</a>
                                <!--<ul class="sub-menu">-->
                                <!--	<li><a href="blog">Blog</a></li>-->
                                <!--	<li><a href="blog-with-right-sidebar">Blog With Right Sidebar</a></li>-->
                                <!--	<li><a href="blog-with-left-sidebar">Blog With Left Sidebar</a></li>-->
                                <!--	<li><a href="blog-details">Blog Details</a></li>-->
                                <!--	<li><a href="blog-details-with-left-sidebar">Blog Details With Left Sidebar</a></li>-->
                                <!--	<li><a href="blog-details-with-video">Blog Details With Video</a></li>-->
                                <!--	<li><a href="blog-details-with-slider">Blog Details With Slider</a></li>-->
                                <!--</ul>-->
                            </li>
                            <li><a href="features">FEATURES</a></li>
                            <li>
                                <a href="services">SERVICE</a>
                                <!--<ul class="sub-menu">-->
                                <!--	<li><a href="services">Services</a></li>-->
                                <!--	<li><a href="services-2">Services Style 2</a></li>-->
                                <!--	<li><a href="single-service">Single Service</a></li>-->
                                <!--</ul>-->
                            </li>
                            <!--<li><a href="advisors">Advisors</a></li>-->
                            <!--<li><a href="advisor-details">Advisor Details</a></li>-->
                            <!--<li><a href="appointment">Appointment</a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="blog">BLOG</a>
                        <!--<ul class="sub-menu">-->
                        <!--	<li><a href="blog">Blog</a></li>-->
                        <!--	<li><a href="blog-with-right-sidebar">Blog With Right Sidebar</a></li>-->
                        <!--	<li><a href="blog-with-left-sidebar">Blog With Left Sidebar</a></li>-->
                        <!--	<li><a href="blog-details">Blog Details</a></li>-->
                        <!--	<li><a href="blog-details-with-left-sidebar">Blog Details With Left Sidebar</a></li>-->
                        <!--	<li><a href="blog-details-with-video">Blog Details With Video</a></li>-->
                        <!--	<li><a href="blog-details-with-slider">Blog Details With Slider</a></li>-->
                        <!--</ul>-->
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

        <!-- Features Area -->
        <section id="pg-features-area" class="cr-section pg-features-area section-padding--xlg">
            <div class="container">
                <div class="pg-features">
                    <div class="row align-items-end">
                        <div class="col-xl-8 col-lg-7 order-2 order-lg-1">
                            <div class="pg-features__description">
                                <span class="pg-features__icon">
                                    <i class="flaticon-shield"></i>
                                </span>
                                <div class="pg-features__content">
                                    <h3>Comprehensive Educational Resources</h3>
                                    <p>In-Depth Information: Access a wealth of knowledge on Withholding Tax laws,
                                        regulations, guidelines, and policies.</p>
                                    <p>Public Awareness: Understand the importance of tax compliance and how tax revenues
                                        contribute to Oyo State's development.</p>
                                    <p>Types of Withholding Taxes: Learn about the different categories of Withholding Taxes
                                        and their applications </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 wow fadeInRight order-1 order-lg-2">
                            <div class="pg-features__thumb">
                                <img src="assets/images/feature/educational resources.jpg" alt="feature thumb 1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pg-features">
                    <div class="row align-items-end">
                        <div class="col-xl-4 col-lg-5 wow fadeInLeft">
                            <div class="pg-features__thumb">
                                <img src="assets/images/feature/register.png" alt="feature thumb 1">
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="pg-features__description">
                                <span class="pg-features__icon">
                                    <i class="flaticon-team"></i>
                                </span>
                                <div class="pg-features__content">
                                    <h3>Seamless Registration and STIN Verification</h3>
                                    <p>Secure Registration: Register on our platform using your existing State Taxpayer
                                        Identification Number (STIN).</p>
                                    <p>Integration with OYIRS: Our system seamlessly interacts with the Oyo State Internal
                                        Revenue Service registration portal, selfservice.oyostatebir.com, for instant STIN
                                        verification. User Authentication: Ensure secure access to your personal dashboard
                                        with verified credentials. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pg-features">
                    <div class="row align-items-end">
                        <div class="col-xl-8 col-lg-7 order-2 order-lg-1">
                            <div class="pg-features__description">
                                <span class="pg-features__icon">
                                    <i class="flaticon-24-hours"></i>
                                </span>
                                <div class="pg-features__content">
                                    <h3>Enhanced Compliance Monitoring Tools</h3>
                                    <p>
                                        Vendor Identification: Efficiently identify vendors and individuals associated with
                                        tax payments. Compliance Tracking: Advanced features for the tax authority to
                                        monitor adherence to Withholding Tax regulations. Revenue Accounting: Detailed
                                        accounting for revenue collected from each Withholding Tax sub-category.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 wow fadeInRight order-1 order-lg-2">
                            <div class="pg-features__thumb">
                                <img src="{{asset('assets/images/feature/monitoring tools.jpg')}}" alt="feature thumb 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Features Area -->

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
                            <p>Experience a streamlined and efficient approach to managing Withholding Tax obligations with
                                our feature-rich platform designed to meet the needs of all stakeholders in Oyo State's tax
                                ecosystem. </p>
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
