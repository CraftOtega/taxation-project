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
                            <li>Services</li>
                        </ul>
                        <h1>Our Services</h1>
                        <p> Our platform serves as an all-inclusive resource that facilitates education, compliance, and
                            efficiency in tax-related transactions.</p>
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

        <!-- Page Service Area -->
        <section id="pg-services-area" class="cr-section pg-services-area section-padding--xlg">

            <!-- Pg Service Area Top -->
            <div class="pg-services-area__description">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 order-2 order-lg-1">
                            <div class="pg-services__details">
                                <h4>CAN’T SOLVE YOUR TAX PROBLEM?</h4>
                                <h3>WE PROVIDE BEST
                                    <span class="color--theme">SERVICES FOR YOU</span>
                                </h3>
                                <p>At the Oyo State Withholding Tax Portal, we provide a comprehensive range of services
                                    designed to simplify and enhance the management of Withholding Tax for individuals,
                                    businesses, tax agents, and the tax authority in Oyo State, Nigeria</p>

                                <p>We are committed to educating the public about the Withholding Tax System. Our platform
                                    offers in-depth information on the laws, regulations, guidelines, and policies governing
                                    Withholding Taxes in Nigeria. By providing clear and accessible explanations, we aim to
                                    demystify tax processes, promote transparency, and encourage voluntary compliance among
                                    taxpayers </p>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2">
                            <div class="pg-services__thumb wow fadeInRight">
                                <img src="assets/images/services/sevices-thumb-right.webp" alt="services thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Pg Service Area Top -->

            <!-- Services Styles Bottom -->
            <div class="pg-services-area__srevicelist servicelist--style2">
                <div class="container">
                    <div class="row">

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="assets/images/icons/service-icon-user.webp" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="single-service">Public Education on Withholding Tax</a>
                                    </h5>
                                    <p>We are committed to educating the public about the Withholding Tax System. Our
                                        platform offers in-depth information on the laws, regulations, guidelines, and
                                        policies governing Withholding Taxes in Nigeria. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="assets/images/icons/service-icon-bar.webp" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="single-service">Enhanced Capacity for Tax Authorities</a>
                                    </h5>
                                    <p>For the tax authority, our platform enhances the capacity to monitor compliance with
                                        the Withholding Tax regime. We provide tools that aid in the identification of
                                        vendors and individuals on whose behalf Withholding Taxes are paid, facilitating the
                                        assessment of associated high net-worth individuals. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="assets/images/icons/service-icon-home.webp" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="single-service">IT Tools for Tax Computation and Payment</a>
                                    </h5>
                                    <p>Our portal equips tax agents and taxpayers with advanced IT tools that streamline the
                                        computation and payment of Withholding Taxes. Users can accurately calculate the tax
                                        due on various transactions through our intuitive WHT Ledger Page. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="assets/images/icons/service-icon-briefcase.webp" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="single-service">Seamless Registration and STIN Verification</a>
                                    </h5>
                                    <p>We offer a secure registration process that integrates seamlessly with the existing
                                        Oyo State Internal Revenue Service (OYIRS) system at selfservice.oyostatebir.com.
                                        Users can register using their existing State Taxpayer Identification Number (STIN),
                                        which is verified in real-time. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="assets/images/icons/service-icon-briefcase-2.webp" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="single-service">Advanced Reporting and Analytics</a>
                                    </h5>
                                    <p>We provide robust reporting and analytics tools that generate various reports
                                        essential for compliance and accounting. Users can produce batch reports summarizing
                                        each set of transactions after remittance, timeline reports for specific periods,
                                        and detailed tax agent reports that can be aggregated or broken down by individual
                                        transactions </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 wow flipInX">
                            <div class="service">
                                <div class="service__icon">
                                    <img src="assets/images/icons/service-icon-pie.webp" alt="service icon">
                                </div>
                                <div class="service__content">
                                    <h5>
                                        <a href="single-service">Data Security and Confidentiality</a>
                                    </h5>
                                    <p>We prioritize the security and confidentiality of all user data. Our platform employs
                                        advanced encryption technologies and adheres to strict data protection protocols to
                                        safeguard sensitive information. Access controls are in place to ensure that only
                                        authorized users can access specific data, maintaining privacy and trust in our
                                        services. </p>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                    </div>
                </div>
            </div>
            <!--// Services Styles Bottom -->

        </section>
        <!--// Page Service Area -->

        <!-- Funfact Area -->
        <div id="funfact-area" class="funfact-area bg--white">
            <div class="funfacts">
                <div class="row g-0">

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">349</span>
                            </h1>
                            <h5>TRUSTED CLIENTS</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">109</span>
                            </h1>
                            <h5>Awards Win</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="funfact text-center">
                            <h1>
                                <span class="counter">459</span>
                            </h1>
                            <h5>Project Done</h5>
                        </div>
                    </div>
                    <!--//  Single Funfact -->

                    <!--  Single Funfact -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
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
                                and experience a streamlined approach to managing Withholding Taxes.</p>
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
