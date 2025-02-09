<?php require APPROOT . '/views/inc/header.php'; ?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(<?php echo URLROOT; ?>/assets/img/new/ceo2.jpeg);">
        <div class="container">
            <h1>Volunteer Opportunities</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo URLROOT; ?>/pages">Home</a></li>
                    <li class="current">Volunteer</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-8 offset-lg-2">
                    <h1>Join The Movement, Be The Change</h1>
                    <p class="fst-italics fs-6">Volunteering with us is a rewarding way to give back to your community. Join our team and help provide essential support to the less privledged.</p>
                    <form action="<?php echo URLROOT; ?>/pages/volunteer" method="post" data-aos="fade-up" data-aos-delay="500">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>" placeholder="Full Name">
                                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                            </div>
                            <div class="col-md-6">
                                <select name="sex" class="form-control <?php echo (!empty($data['sex_err'])) ? 'is-invalid' : ''; ?>" id="gender">
                                    <option value="">Sex</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $data['sex_err']; ?></span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="occ" class="form-control <?php echo (!empty($data['occ_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['occ']; ?>" placeholder="Occupation">
                                <span class="invalid-feedback"><?php echo $data['occ_err']; ?></span>
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" name="email" placeholder="Your Email">
                                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone']; ?>" placeholder="Phone number">
                                <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
                            </div>
                            <div class="col-md-6">
                                <select name="aoi" class="form-control <?php echo (!empty($data['aoi_err'])) ? 'is-invalid' : ''; ?>">
                                    <option value="">Area of interest</option>
                                    <option value="Community outreach">Community outreach</option>
                                    <option value="Empowerment">Empowerment</option>
                                    <option value="Skills traning">Skills traning</option>
                                    <option value="Medical support">Medical support</option>
                                    <option value="Legal support">Legal support</option>
                                </select>
                                <span class="invalid-feedback"><?php echo $data['aoi_err']; ?></span>
                            </div>

                            <div class="col-md-12 text-center">
                                <!-- <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div> -->

                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
    <!-- Services Section -->
    <section class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="row">
                <h2>Explore Our Volunteer Benefits</h2>
                <div class="col-lg-8 offset-lg-2">
                    <p>Our volunteer opportunities offer a chance to gain valuable skills, meet like-minded individuals, and create a positive impact in the community.</p>
                </div>
            </div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-person-plus" style="color: #f57813;"></i></div>
                    <div>
                        <h4 class="title">Gain Experience</h4>
                        <p class="description">Volunteering allows you to acquire valuable skills that can enhance your personal and professional growth. Join us to learn while you help others.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-people" style="color: #1335f5;"></i></div>
                    <div>
                        <h4 class="title">Build Community</h4>
                        <p class="description">Meet our new friends and connect with like-minded individuals who share your passion for others. Together, we can create a supportive community.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-heart" style="color: #15a04a;"></i></div>
                    <div>
                        <h4 class="title">Make an Impact</h4>
                        <p class="description">Your efforts can lead to significant changes in the lives of those we serve. Experience the joy of making a real difference in your community.</p>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="d-grid">
                    <p><a href="<?php echo URLROOT; ?>/pages/volunteer#contact" class="btn btn-primary rounded-3">Join Now</a></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>