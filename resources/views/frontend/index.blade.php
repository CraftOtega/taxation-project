@extends('frontend.layouts.app')

@section('content')
    <!-- Top Banner -->
    <div class="banner-area">
        <div class="banner banner-slider-active banner--animated-content">

            <!-- Single Banner -->
            <div class="banner__single bg-image--1" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="banner__single__content">
                                <h1>Web
                                    <span class="color--theme">79</span> WE ARE EXPERT IN
                                    <span class="color--theme">TAX</span> SOLUTIONS
                                </h1>
                                <a href="register" class="cr-btn">
                                    <span>Register Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Single Banner -->

            <!-- Single Banner -->
            <div class="banner__single bg-image--2" data-black-overlay="6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner__single__content text-center">
                                <h1>Web
                                    <span class="color--theme">79</span> WE ARE EXPERT IN
                                    <span class="color--theme">TAX</span> SOLUTIONS
                                </h1>
                                <a href="register" class="cr-btn">
                                    <span>Register Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Single Banner -->

            <!-- Single Banner -->
            <div class="banner__single bg-image--3" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="banner__single__content">
                                <h1>WORRIED
                                    <span class="color--theme">ABOUT TAX?</span> WE ARE EXPERT IN
                                    <span class="color--theme">TAX</span> SOLUTIONS
                                </h1>
                                <a href="contact" class="cr-btn">
                                    <span>Contact Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Single Banner -->

        </div>
    </div>
    <!-- //Top Banner -->


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

                    </li>
                    <li><a href="about-us">ABOUT</a></li>
                    <li><a href="features">FEATURES</a></li>
                    <li>
                        <a href="services">SERVICE</a>

                    </li>
                    <li>
                        <a href="#">PAGES</a>
                        <ul class="sub-menu">
                            <li><a href="about-us">ABOUT</a></li>
                            <!--<li>-->
                            <!--    <a href="blog">BLOG</a>-->

                            <!--</li>-->
                            <li><a href="features">FEATURES</a></li>
                            <li>
                                <a href="services">SERVICE</a>

                            </li>

                        </ul>
                    </li>
                    <!--<li>-->
                    <!--    <a href="blog">BLOG</a>-->

                    <!--</li>-->
                    <li><a href="contact">CONTACT</a></li>
                </ul>
            </nav>
            <!--// Main Navigation -->

            <div class="offcanvas__button">
                <a class="cr-btn cr-btn--lg" href="register">
                    <span>Register Now</span>
                </a>
                  <a class="cr-btn cr-btn--lg" href="login">
                    <span>Login</span>
                </a>
            </div>
        </div>
    </div>
    <!-- //Offcanvas -->



    <!-- Page Conent -->
    <main class="page-content">

        <div class="container mb-5" style="margin-top:80px;">
            <div class="row">
                <div class="col-lg-5" style="max-width:500px;">
                    <div class="about-area__image">
                        <img class="wow slideInLeft img-fluid " data-wow-delay="0"
                            src="https://gazettengr.com/wp-content/uploads/Screenshot_20211025-071608_WhatsAppBusiness.jpg"
                            alt="about area thumb">

                    </div>
                </div>
                <div class="col-lg-7 col-md-10">
                    <div class="section-title text-center">
                        <h4></h4>
                        <h2>WITHHOLDING
                            <span class="color--theme">TAX</span>
                        </h2>
                        <p>
                            The Oyo State Board of Internal Revenue is a State Revenue Agency that derives its
                            existence from the Personal Income Tax Act Law of the Federation 2004, which stipulates
                            the establishment of the THE BOARD OF INTERNAL REVENUE by all the States of the
                            Federation.
                            The Oyo State Edict of 1996 established the Board to carry out the functions of
                            assessing, collecting and accounting for taxes, levies and fees with the additional
                            responsibility of tax policy formation for the state.
                        </p>
                        <div style="justify-content:center;">
                            <a href="withholding" class="cr-btn">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <!-- About Area -->
        <section id="about-area" class="cr-section about-area bg--white">
            <div class="container">
                <div class="about-area__inside">
                    <div class="row">
                        <div class="col-lg-5 pb-4" style="max-width:500px;">
                            <div class="about-area__image">
                                <img class="wow slideInLeft img-fluid" data-wow-delay="0" src="https://westwoodnetlease.com/wp-content/uploads/2019/10/tax-saving.jpeg"
                                    alt="about area thumb">



                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="about-area__content">
                                <!--<h4>WE ARE “-->
                                <!--<span class="color--theme">About</span>”</h4>-->
                                <h3 class="cd-headline cx-heading slide">About Oyo State
                                    <span class="color--theme cd-words-wrapper cd-words-wrapper-2">
                                        <b class="is-visible"> BIR</b>
                                        <b> BIR</b>
                                        <b> BIR</b>
                                    </span>
                                    <!--TO GROWUP</h3>-->
                                </h3>
                                <p>
                                    Withholding Tax is an advance payment of income tax. In principle, WHT is a payment on
                                    account of
                                    the ultimate income tax liability of the taxpayer or company. Withholding tax is not a
                                    separate
                                    tax on its own and does not confer an exemption from the filing of annual tax returns by
                                    the
                                    company which had suffered WHT. The tax is to be deducted at source when a payment is
                                    due or
                                    paid to the beneficiary, whichever comes earlier.




                                </p>
                                <a href="about-us" class="cr-btn">
                                    <span>Read More</span>
                                </a>
                            </div>
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
                                <a href="features">ENSURE SECURITY</a>
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">
                                we prioritize the security of your financial information as much as your tax optimization.
                            </p>
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
                                <a href="features">EXPERT TEAM</a>
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">
                                Our expert team is composed of highly qualified tax professionals, accountants, and
                                financial advisors with decades of combined experience in the field. </p>
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
                                <a href="features">24/7 SUPPORT</a>
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay="0.15s"> we believe that exceptional service goes
                                beyond providing expert tax solutions — it means being there whenever you need us. </p>
                        </div>
                    </div>
                </div>
                <!--// Single Feature -->

            </div>
        </section>
        <!--// Features Area -->


        <!-- Service Area -->
        <section id="service-area" class="service-area section-padding--xlg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-title">
                            <h4>OUR SERVICES</h4>
                            <h2>PROVIDE BEST
                                <span class="color--theme">SERVICES</span>
                            </h2>
                            <p>we offer a comprehensive range of tax and financial services designed to meet the diverse
                                needs of your business. Our goal is to provide you with seamless solutions
                                that not only ensure compliance but also enhance your financial performance.</p>
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
                                                <a href="single-service">PERSONAL TAX</a>
                                            </h5>
                                            <p>Our personalized tax services are designed to simplify the process and ensure
                                                that you achieve maximum benefits. Whether you're an individual, a
                                                high-net-worth client, or a business owner, our experienced tax
                                                professionals are here to guide you through every step. We help you navigate
                                                deductions, credits, and exemptions, optimize your tax strategy, and file
                                                your returns accurately and on time. </p>
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
                                                <a href="single-service">CORPORATE TAX</a>
                                            </h5>
                                            <p>we specialize in delivering tailored corporate tax solutions that align with
                                                your business goals and compliance needs. Our expert team understands the
                                                complexities of corporate taxation and works diligently to minimize your tax
                                                liabilities while maximizing your savings. We provide a full suite of
                                                services, including corporate tax planning, preparation, filing, and
                                                strategic advisory, to ensure your business remains compliant with all
                                                relevant tax laws and regulations</p>
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
                                                <a href="single-service">Business TAX</a>
                                            </h5>
                                            <p>we provide comprehensive business tax services to help businesses of all
                                                sizes stay compliant and financially efficient. Our team of experienced tax
                                                professionals works closely with you to understand the unique needs and
                                                challenges of your business, delivering customized tax strategies that
                                                minimize liabilities and maximize savings. </p>
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
                                                <a href="single-service">Finance TAX</a>
                                            </h5>
                                            <p> we offer specialized finance tax services to help businesses in the
                                                financial sector manage their tax obligations with precision and efficiency.
                                                Our team understands the unique tax challenges faced by financial
                                                institutions, investment firms, and other finance-related businesses. </p>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Service -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-area__bars text-center">
                            <div class="cr-bars justify-content-lg-end justify-content-center">
                                <div class="cr-bar" data-bar-percent="25" data-bar-title="2020"></div>
                                <div class="cr-bar" data-bar-percent="45" data-bar-title="2021"></div>
                                <div class="cr-bar" data-bar-percent="37" data-bar-title="2022"></div>
                                <div class="cr-bar" data-bar-percent="69" data-bar-title="2023"></div>
                                <div class="cr-bar" data-bar-percent="88" data-bar-title="2024"></div>
                            </div>
                            <span class="cr-bars__name">Our progress</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// Service Area -->

        <!-- Tax Calculation Area -->
        <section id="tax-calculation" class="tax-calculation-area bg--grey--light">
            <div class="taxcalc">
                <div class="row no-gutters align-items-center">

                    <!-- Tax Calculation Area Left -->
                    <div class="col-xl-5">
                        <div class="taxcalc__content" data-black-overlay="4">
                            <div class="taxcalc__content__inner">
                                <h3>TAX
                                    <span class="color--theme">CALCULATION</span>
                                </h3>
                                <p>accurate tax calculation is at the heart of our services, ensuring you meet your tax
                                    obligations with precision and confidence. Our expert team uses advanced tools and
                                    up-to-date knowledge of tax laws to provide precise calculations for all types of taxes,
                                    including income tax, corporate tax, and VAT. </p>
                            </div>
                        </div>
                    </div>
                    <!--// Tax Calculation Area Left -->

                    <!-- Tax Calculation Area Right -->
                    <div class="col-xl-7">
                        <div class="taxcalc__calculation">
                            <div class="taxcalc__calculation__inner">
                                <div class="row no-gutters">

                                    <div class="col-lg-6 col-md-6 wow fadeInUp">
                                        <div class="single-input">
                                            <label for="taxcalc-business-area">Choose Your Business Area*</label>
                                            <select name="taxcalc-business-area" id="taxcalc-business-area">
                                                <option value="1">Select your business</option>
                                                <option value="2">Marketing</option>
                                                <option value="3">IT Industries</option>
                                                <option value="4">Management Industries</option>
                                                <option value="5">Property Business</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.15">
                                        <div class="single-input">
                                            <label for="taxcalc-country-residence">Country of residence*</label>
                                            <select name="taxcalc-country-residence" id="taxcalc-country-residence">
                                                <option value="1">Australia</option>
                                                <option value="2">United States</option>
                                                <option value="3">United Kingdom</option>
                                                <option value="3">Germany</option>
                                                <option value="3">Netherland</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3">
                                        <div class="single-input">
                                            <label for="taxcalc-employee-counter">Number of Employees</label>
                                            <select name="taxcalc-employee-counter" id="taxcalc-employee-counter">
                                                <option value="1">Select Here</option>
                                                <option value="2">0 - 20</option>
                                                <option value="3">21 - 50</option>
                                                <option value="4">51 - 150</option>
                                                <option value="5">151 - 500</option>
                                                <option value="6">500+</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.45">
                                        <div class="single-input">
                                            <label for="taxcalc-tax-year">Tax Year*</label>
                                            <select name="taxcalc-tax-year" id="taxcalc-tax-year">
                                                <option value="1">2000 - 2005</option>
                                                <option value="2">2006 - 2010</option>
                                                <option value="3">2011 - 2015</option>
                                                <option value="4">2016 - 2020</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.6">
                                        <div class="single-input">
                                            <label for="taxcalc-yearly-income">Yearly Total Income</label>
                                            <select name="taxcalc-yearly-income" id="taxcalc-yearly-income">
                                                <option value="1">Select Range</option>
                                                <option value="2">0 - 1 Million</option>
                                                <option value="3">1 Million - 3 Million</option>
                                                <option value="4">3 Million - 10 Million</option>
                                                <option value="5">10 Million - 20 Million</option>
                                                <option value="6">20 Million+</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.75">
                                        <div class="button-holder">
                                            <button class="cr-btn" type="submit">
                                                <span>Calculate</span>
                                            </button>
                                            <span class="equal-sign">=</span>
                                            <div class="single-input">
                                                <label for="taxcalc-total-calculation">Total Payable Tax</label>
                                                <input type="text" id="taxcalc-total-calculation"
                                                    placeholder="$000.00">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Tax Calculation Area Right -->

                </div>
            </div>
        </section>
        <!--// Tax Calculation Area -->

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
                            <p>our tax advisor services are designed to provide you with expert guidance and strategic
                                insights tailored to your financial situation. Our team of seasoned tax advisors offers
                                personalized consultations to help you navigate complex tax laws, identify opportunities for
                                savings, and make informed decisions that align with your financial goals. Whether you need
                                assistance with tax planning, investment strategies, or resolving tax-related issues, we are
                                here to provide clear, actionable advice. We work closely with you to understand your unique
                                circumstances, ensuring that you receive the most effective and customized solutions to
                                optimize your tax position and achieve long-term success. </p>
                        </div>
                    </div>
                </div>
                <div class="row advisors">

                    <!-- Single Advisor -->
                    <div class="col-lg-3 col-sm-6">
                        <figure class="advisor">
                            <div class="advisor__image">
                                <img src="assets/images/advisors/advisor1.png" alt="team member">
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
                                <img src="assets/images/advisors/advisor2.webp" alt="team member">
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
                                <img src="assets/images/advisors/advisor3.jpg" alt="team member">
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
                                <img src="assets/images/advisors/advisor4.png" alt="team member">
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
        {{-- <div id="testimonial-area" class="testimonial-area section-padding--xlg bg--grey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="testimonial text-center">

                            <!-- Testimonial Content -->
                            <div class="testimonial__content testimonial-content-slider-active">

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>Their expertise in corporate tax planning has not only helped us stay compliant but
                                        also significantly reduced our tax liabilities. The team’s personalized approach and
                                        prompt support have been invaluable. We couldn't be happier
                                        with the results and the peace of mind that comes with their exceptional service.
                                    </p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>I’ve always found managing personal taxes to be stressful, but web79 made the entire
                                        process seamless. Their tax advisors provided clear guidance and took the time to
                                        explain every detail, which made a huge difference. I appreciate their thoroughness
                                        and dedication to finding the best tax-saving opportunities for me. I highly
                                        recommend web79 for anyone looking for reliable and expert tax support. </p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>As a financial planner, I need a tax partner who understands the nuances of
                                        finance-related tax issues, and web79 fits the bill perfectly. Their in-depth
                                        knowledge and strategic insights have been instrumental in optimizing my clients'
                                        tax positions. The level of professionalism and accuracy they deliver is unmatched.
                                        I trust web79 completely for all my tax calculation and advisory needs.</p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>They helped me navigate complex tax regulations and find opportunities for savings
                                        that I hadn't considered before. Their 24/7 support and personal attention have made
                                        a tremendous difference. I highly recommend web79 for any business looking for
                                        reliable and expert tax assistance. </p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>They helped me navigate complex tax regulations and find opportunities for savings
                                        that I hadn't considered before. Their 24/7 support and personal attention have made
                                        a tremendous difference. I highly recommend web79 for any business looking for
                                        reliable and expert tax assistance. </p>
                                </div>
                                <!--// Testimonial Content Single -->

                                <!-- Testimonial Content Single -->
                                <div class="testimonial__content__single">
                                    <p>They helped me navigate complex tax regulations and find opportunities for savings
                                        that I hadn't considered before. Their 24/7 support and personal attention have made
                                        a tremendous difference. I highly recommend web79 for any business looking for
                                        reliable and expert tax assistance.</p>
                                </div>
                                <!--// Testimonial Content Single -->

                            </div>
                            <!--// Testimonial Content -->

                            <!-- Testimonial Author -->
                            <div class="testimonial__author testimonial-author-slider-active">

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-1.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>DAVID MILLER</h6>
                                        <span>President</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-2.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>RAISA MARIYA</h6>
                                        <span>CEO</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-3.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>SHON SMITH</h6>
                                        <span>Executive</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-1.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>DAVID MILLER</h6>
                                        <span>President</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-2.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>RAISA MARIYA</h6>
                                        <span>CEO</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                                <!-- Single Author -->
                                <div class="testimonial__author__single">
                                    <div class="testimonial__author__image">
                                        <img src="assets/images/testimonial/testimonial-author-3.webp"
                                            alt="testimonial author">
                                    </div>
                                    <div class="testimonial__author__description">
                                        <h6>SHON SMITH</h6>
                                        <span>Executive</span>
                                    </div>
                                </div>
                                <!--// Single Author -->

                            </div>
                            <!--// Testimonial Author -->

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--// Testimonial Area -->

        <!-- Blog Area -->
      {{--  <section id="blog-area" class="blog-area section-padding--xlg bg--white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-title text-center">
                            <h4>OUR BLOG</h4>
                            <h2>LATEST POST
                                <span class="color--theme">FROM BLOG</span>
                            </h2>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque
                                ipsa quae</p>
                        </div>
                    </div>
                </div>
                <div class="row blog-area__blogs justify-content-center">

                    <!-- Single Blog -->
                    <div class="col-lg-4 col-md-6">
                        <article class="blog sticky">
                            <div class="blog__thumb">
                                <a href="blog-details">
                                    <img src="assets/images/blog/calculate-tax.jpg" alt="blog thumb">
                                </a>
                            </div>
                            <div class="blog__content">
                                <header class="blog__content__header">
                                    <ul class="blog__content__categories">
                                        <li>
                                            <a href="blog-right-sidebar">Tax</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar">Personal Tax</a>
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="blog-details">How to calculate tax ?</a>
                                    </h4>
                                </header>
                                <footer class="blog__content__footer">
                                    <ul class="blog__content__meta">
                                        <li>October 28.</li>
                                        <li>
                                            <a href="blog-right-sidebar">Alex Smith.</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar">4 Comments</a>
                                        </li>
                                    </ul>
                                    <p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti,
                                        totam rem aperiam, eaque ipsa
                                        quae so some ulation </p>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <!--// Single Blog -->

                    <!-- Single Blog -->
                    <div class="col-lg-4 col-md-6">
                        <article class="blog">
                            <div class="blog__thumb">
                                <img src="assets/images/blog/tax tutorial.jpg" alt="blog thumb">

                                <!-- <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/347257536&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe> -->
                            </div>
                            <div class="blog__content">
                                <header class="blog__content__header">
                                    <ul class="blog__content__categories">
                                        <li>
                                            <a href="blog-right-sidebar">Tax</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar">Tax Tutorial</a>
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="blog-details">TAX CALCULATION TUTORIAL</a>
                                    </h4>
                                </header>
                                <footer class="blog__content__footer">
                                    <ul class="blog__content__meta">
                                        <li>October 28.</li>
                                        <li>
                                            <a href="blog-right-sidebar">Momen Bhuiyan.</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar">6 Comments</a>
                                        </li>
                                    </ul>
                                    <p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti,
                                        totam rem aperiam, eaque ipsa
                                        quae so some ulation </p>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <!--// Single Blog -->

                    <!-- Single Blog -->
                    <div class="col-lg-4 col-md-6">
                        <article class="blog blog--slider-active">
                            <div class="blog__thumb">
                                <a href="blog-details">
                                    <img src="assets/images/blog/blog-thumbnail-2.webp" alt="blog thumb">
                                </a>
                                <a href="blog-details">
                                    <img src="assets/images/bg/tax/tax-payer.jfif" alt="blog thumb">
                                </a>
                            </div>
                            <div class="blog__content">
                                <header class="blog__content__header">
                                    <ul class="blog__content__categories">
                                        <li>
                                            <a href="blog-right-sidebar">BUSINESS</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar">BUSINESS DEVELOPMENT</a>
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="blog-details">BUSINESS DEVELOPMENT</a>
                                    </h4>
                                </header>
                                <footer class="blog__content__footer">
                                    <ul class="blog__content__meta">
                                        <li>October 28.</li>
                                        <li>
                                            <a href="blog-right-sidebar">Jesica Sharlin.</a>
                                        </li>
                                        <li>
                                            <a href="blog-right-sidebar">12 Comments</a>
                                        </li>
                                    </ul>
                                    <p>Perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudanti,
                                        totam rem aperiam, eaque ipsa
                                        quae so some ulation </p>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <!--// Single Blog -->

                </div>
            </div>
        </section> --}}
        <!--// Blog Area -->

        <!-- Call To Action Area -->
        <section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="calltoaction text-center">
                            <h3>NEED ANY HELP AT
                                <span class="color--theme"> YOUR TAX SOLUTION?</span>
                            </h3>
                            <p>we're here to support you every step of the way. Whether you have questions about tax
                                planning, need assistance with filing, or require expert advice on complex tax issues, our
                                dedicated team is ready to help </p>
                            <h6>JUST DAIL
                                <a href="callto://+12345678">+12345678</a> (TOLL FREE)
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
