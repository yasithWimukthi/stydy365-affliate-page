<?php
/* Template Name: Study365 Affiliate Page */
function mypage_head()
{

    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/css/1training-affiliate.css">' . "\n";
}

add_action('wp_head', 'mypage_head');
get_header(vibe_get_header());
?>

<main>
    <div class="container">
        <!--        join with us section-->
        <div class="row join-section-wrapper">
            <div class="col-md-12 col-lg-6">
                <div class="join-section d-flex justify-content-center">
                    <div class="join-section__content">
                        <p class="join-section__content-main-heading">Become an affiliate</p>
                        <p class="join-section__content-content">Join now and start earning with One Education!
                            Become one of our partners as an affiliate and help us promote
                            quality education worldwide.
                        </p>
                        <button class="join-now-btn">Join Now</button>
                    </div>
                </div>
                <div class="info-section py-4 px-5">
                    <p class="info-heading">Info</p>
                    <p class="info-text fw-bolder">Join the New Skills Academy Partner Program and Start Earning
                        Today!</p>
                    <p class="info-question">How Does it Work?</p>
                    <p class="info-answer">
                        When you join the New Skills Academy Partner Program, you’ll get a unique link that is
                        associated to your partner account to send visitors to newskillsacademy.co.uk where they will
                        have an opportunity to purchase any of our 700+ courses.<br/>

                        <br/>Your unique partner number is connected to this link so that our system can track the
                        visitors you send to our site.<br/>

                        <br/>You can use your unique link in social media posts, emails, website pages, blog posts, or
                        anywhere else you choose!
                    </p>
                    <p class="info-question">How do I get Paid?</p>
                    <p class="info-answer">
                        Your commissions will be paid on a monthly basis (the first week of each month).<br/>

                        <br/>All payments are paid via PayPal. Please have your PayPal information ready when you
                        register for a partner account.
                    </p>
                    <p class="info-question">How do I Sign Up?</p>
                    <p class="info-answer">
                        Registering for a New Skills Academy partner account is simple, just fill the form below and one
                        of our sales team will get back in touch with you shortly.
                    </p>
                    <p class="info-heading">Benefits</p>
                    <p class="benefits-sub-heading">Benefits of Joining</p>
                    <ul class="benefits-list info-answer">
                        <li>Earn generous commission on every sale</li>
                        <li>Over 800 accredited course to promote</li>
                        <li>750,000 happy students currently enrolled on our courses</li>
                        <li>Easy Tracking Payment direct to your PayPal or bank account</li>
                    </ul>
                    <p class="info-heading">FAQ’s</p>
                    <div class="accordion faq-accordion" id="questions-accordion">
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1"
                                        aria-expanded="true" aria-controls="collapse-1">
                                    <p>Is there any cost to join?</p>
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1"
                                 data-bs-parent="#questions-accordion">
                                <div class="accordion-body mt-3">
                                    <p>sample content</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2"
                                        aria-expanded="true" aria-controls="collapse-2">
                                    <p>Is there a minimum term contract?</p>
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="heading-2"
                                 data-bs-parent="#questions-accordion">
                                <div class="accordion-body mt-3">
                                    <p>sample content</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3"
                                        aria-expanded="true" aria-controls="collapse-3">
                                    <p>Do you have terms and conditions?</p>
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="heading-3"
                                 data-bs-parent="#questions-accordion">
                                <div class="accordion-body mt-3">
                                    <p>sample content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="awarding-body-section py-4">
                    <p class="awarding-body-section__heading">Learn with confidence</p>
                    <div class="awarding-body-list px-5 py-5 d-flex justify-content-center flex-wrap">
                        <div class="awarding-body-list__item mx-2 my-2">
                            <img src="./assets/PEOPLECERT%201.png" class="awarding-body-1"/>
                        </div>
                        <div class="awarding-body-list__item mx-2 my-2">
                            <img src="./assets/6sigma%201.png" class="awarding-body-2"/>
                        </div>
                        <div class="awarding-body-list__item mx-2 my-2">
                            <img src="./assets/QLS-Homepage-menu%201.png" class="awarding-body-3"/>
                        </div>
                        <div class="awarding-body-list__item mx-2 my-2">
                            <img src="./assets/Sage%201.png" class="awarding-body-2"/>
                        </div>
                        <div class="awarding-body-list__item mx-2 my-2">
                            <img src="./assets/PEOPLECERT%201%20(1).png" class="awarding-body-2"/>
                        </div>
                        <div class="awarding-body-list__item mx-2 my-2">
                            <img src="./assets/PEOPLECERT%201.png" class="awarding-body-1"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 ">
                <div class="join-form-wrapper py-5 px-5">
                    <div class="join-form-container">
                        <p class="join-form-heading__main">Join with us</p>
                        <p class="join-form-heading__sub">Complete the quick enquiry form below and one of our student
                            advisers will be in touch shortly</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row join-section-wrapper">
            <div class="col-md-12 col-lg-6">
                <div class="free-course-img-container">
                    <img src="assets/courses.png"/>
                </div>
                <div class="free-course-container">
                    <div class="free-course-form py-5 px-5">
                        <p class="join-form-heading__main mt-5">Get a free course</p>
                        <p class="join-form-heading__sub">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla
                            accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="free-course-img-container">
                    <img src="assets/student.png"/>
                </div>
                <div class="feedback-container py-5 px-5">
                    <p class="join-form-heading__main mt-5">What Out Students Say</p>
                    <div class="user-details-container">
                        <p class="user-name">Julia Simsom</p>
                        <p class="user-occupation">Sales manager</p>
                    </div>
                    <div class="feedback-carousel-container">
                        <div class="left-comma-container d-flex flex-row">
                            <div class="comma-1 mx-1 position-relative"></div>
                            <div class="comma-2"></div>
                        </div>
                        <div id="carouselExampleControls" class="carousel  d-flex flex-column  feedback-carousel"
                             data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <p class="px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                                        molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla
                                        accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                                        Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent
                                        auctor purus luctus enim egestas, ac scelerisque ante pulvinar.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                                        molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla
                                        accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                                        Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent
                                        auctor purus luctus enim egestas, ac scelerisque ante pulvinar.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                                        molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla
                                        accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
                                        Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent
                                        auctor purus luctus enim egestas, ac scelerisque ante pulvinar.
                                    </p>
                                </div>
                            </div>
                            <div class="left-comma-container d-flex flex-row justify-content-end">
                                <div class="comma-3 mx-1"></div>
                                <div class="comma-4"></div>
                            </div>
                            <div class="controllers-container ">
                                <div class="star-container d-flex flex-row ">
                                    <p>&#9733;</p>
                                    <p>&#9733;</p>
                                    <p>&#9733;</p>
                                    <p>&#9733;</p>
                                    <p>&#9733;</p>
                                </div>
                                <div class="button-wrapper ">
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/plugins/bootstrap-5.1.0/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?php
get_footer(vibe_get_footer());
?>

