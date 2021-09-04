@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"Cookies Policy"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite"> How we use Cookies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">What are Cookies?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#use">Access to Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#legal"> How we manage Cookies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#collect"> Social Media Third Party Cookies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#exp">Expiry of Cookies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sec">Security and safety</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#collection">Collection of information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#explore">Explore more</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">
                    <p>In relation to personal data obtained on or from our website (“Site”), eDropShip has prepared this Cookies Policy.
                    </p>
                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">How we use Cookies</h3>
                        <p>We can use cookies when you visit our website to provide you with a great user experience. A cookie is a piece of information that is submitted from our website and saved by the user's web server when surfing on your computer.
                        </p>
                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">What are Cookies?</h3>
                        <p>We use Google Analytic in order to constantly improve your browsing experience on our websites.
                        </p>
                    </div>
                    <div class="privacy-item" id="use">
                        <h3 class="title">Access to Information</h3>
                        <p>Relationship with customers and their confidence in us are of importance to eDropShip. We ensure that we remain prudent with respect to the handling of personal information gathered under our jurisdiction. When you visit our website
                            (https:/www.eDropShip.co.uk/), you agree that you have read all the privacy policy and requirements and that you will observe them strictly.</p>
                    </div>
                    <div class="privacy-item" id="legal">
                        <h3 class="title">How we manage Cookies</h3>
                        <p>Please ensure that you have read this policy carefully so that you can easily make informed choices about sharing your personal information with us. All technical words have the same definition as that set out in the Terms and
                            Conditions. The policy is designed to define the applicable laws, duties and Requirements of eDropship for staff, consumers and users of our official website. This strategy consists of the ways in which we store, process and
                            use our customers' personal information.
                        </p>
                    </div>
                    <div class="privacy-item" id="collect">
                        <h3 class="title">Social Media Third Party Cookies</h3>
                        <p>
                        Other cookies may be stored on the User's hard drive by external vendors while this website uses referral services, supported links or advertising.
                        </p>

                    </div>
                    <div class="privacy-item" id="exp">
                        <h3 class="title">Expiry of Cookies</h3>
                        <p>This cookies are used on eDropShip website to gather information about your activities. These cookies assist us, too to recall you. To boost and configure your browsing experience and for analytical purposes, eDropShip uses this material.</p>
                    </div>
                    <div class="privacy-item" id="sec">
                        <h3 class="title">Security and safety</h3>
                        <p>eDropShip protects the personal data supplied to this Website from deletion, misuse, unauthorized access, disclosure, alteration or destruction. Our website stores cookies on the user's computer.</p>
                    </div>
                    <div class="privacy-item" id="collection">
                        <h3 class="title">Collection of information</h3>
                        <p>eDropShip protects the personal data supplied to this Website from deletion, misuse, unauthorized access, disclosure, alteration or destruction. Our website stores cookies on the user's computer.</p>
                    </div>
                    <div class="privacy-item" id="explore">
                        <h3 class="title">Explore more</h3>
                        <p>To explore more about how to control your cookie settings and browser settings, or how to delete cookies on your hard drive, please visit www.eDropShip.co.uk.</p>
                    </div>
                                    </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
