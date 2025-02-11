<?php require APPROOT . '/views/inc/header.php'; ?>


<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="<?php echo URLROOT; ?>/assets/img/new/hero-bg.jpg" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h1 data-aos="fade-up">Samchuks Empowerment Foundation</h1>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Join us in our mission to provide essential resources and support to those in need. Your involvement can make a significant impact.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="<?php echo URLROOT; ?>/pages/about" class="btn-get-started">Learn More</a>
            <a href="<?php echo URLROOT; ?>/assets/img/new/vid.mp4"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Why Us Section -->
  <section id="why-us" class="why-us section">

    <div class="container">

      <div class="row g-0">

        <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                }
              }
            </script>
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">MISSION STATEMENT</h3>
                  <h4 class="mb-3">We bring hope, resources and advocacy to the poor and most vulnerable among
                    us regardless of faith, race, marital status or condition in life.
                  </h4>
                  <p>Our mission is to
                    increase the opportunities for a younger section of our society who would
                    otherwise be forgotten. We aim at saving lives and enhancing the society
                    through training and supplies educated and skilled employees into the
                    commercial world. It is positive both on the people being trained and the
                    communities they reside.</p>
                </div>
              </div><!-- End slide item -->

              <div class="swiper-slide">
                <div class="item">
                  <h3 class="mb-3">OUR VISION</h3>
                  <h4 class="mb-3">We want works to facilitate the organic growth of resource networks for
                    underprivileged families in the community by optimizing meaningful skills
                    which are profitable to the economy of the people. The scheme is aimed at:</h4>
                  <p>
                  <ul>
                    <li>Reduction in illiteracy rate and vices. Constant food circulation too.</li>
                    <li>Encourage skills and work in the society and eliminating lazy mindsets</li>
                    <li>Reduction of societal crimes, as this project will equip them with skills and
                      make their lives more valuable, meaningful and beneficial to the society.</li>
                    <li>Reduction in the unemployment rate ravaging the host communities.</li>
                  </ul>
                  </p>
                </div>
              </div><!-- End slide item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="col-xl-5 img-bg aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <img src="<?php echo URLROOT; ?>/assets/img/new/vol.jpeg" alt="">
        </div>
      </div>

    </div>

  </section><!-- /Why Us Section -->



  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Programmes</h2>
      <p>Our Various Ways Of Fostering Self Empowerment And Reducing Unemployment.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-battery-charging" style="color: #d90769;"></i></div>
          <div>
            <h4 class="title">Youth Empowerment</h4>
            <p class="description"><strong>A path to a brighter future.</strong> By providing young people with education, skills, and opportunities, we enable them to shape their own future and contribute to social change.</p>
            <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->
        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
          <div>
            <h4 class="title">Skill acquisition strategies</h4>
            <p class="description">This initiative reflects our commitment to community development and poverty alleviation. Aimed at equipping participants with hands-on training in various fields including tailoring, catering, graphics design, etc..</p>
            <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
          <div>
            <h4 class="title">Empowering in special ways</h4>
            <p class="description">By organising sessions on entrepreneurship and financial literacy to help participants turn their newly acquired skkill into profitable ventures.</p>
            <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
          <div>
            <h4 class="title">General assistance to the Needy </h4>
            <p class="description">We believe in compassion, dignity, and empowerment by providing essential support inluding food, shelter healthcare etc.. to those in need.</p>
            <a href="#" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->


      </div>

    </div>

  </section><!-- /Services Section -->




  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section dark-background">

    <img src="<?php echo URLROOT; ?>/assets/img/cta-bg.jpg" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Fundraiser</h3>
            <p>Your generosity will provide hope, oppotunities and brighter future for those in need. Every donation big or small, makes a difference. Together we can transform lives, lets give hope to where its needed most. Thank you!</p>
            <a class="cta-btn" href="<?php echo URLROOT; ?>/pages/donate">Donate Now</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Programmes</h2>
      <p>Our Various Ways Of Fostering Self Empowerment And Reducing Unemployment.</p>
    </div><!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">
              <!-- 
              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/fash1.jpeg" alt="">
              </div> -->

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/fash2.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/event1.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/mil1.jpeg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h4>Programme information</h4>
            <ul>
              <li><strong>Tag</strong>: <a href="javascript:void">Fashion Design</a></li>
              <li><strong>Category</strong>: Skill Acquisation</li>
              <li><strong>Participants</strong>: 50+ individuals</li>
              <li><strong>Programme duration</strong>:6 Months</li>
            </ul>
            <a href="<?php echo URLROOT; ?>/pages/events#fashion" class="readmore stretched-link"><span>More details</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <!-- Recent programme item two -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">

              <!-- <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/fash1.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/fash2.jpeg" alt="">
              </div> -->

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/orph2.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/orph.jpeg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h4>Programme information</h4>
            <ul>
              <li><strong>Tag</strong>: <a href="javascript:void">2024 Orphanage Visit</a></li>
              <li><strong>Category</strong>: Community Outreach</li>
              <li><strong>Beneficiaries</strong>: 3+ Orphanage homes</li>
              <li><strong>Programme duration</strong>:Anually</li>
            </ul>
            <a href="<?php echo URLROOT; ?>/pages/events#orphanage" class="readmore stretched-link"><span>More details</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <!-- Recent programme item three -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/shoe1.jpeg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="<?php echo URLROOT; ?>/assets/img/new/event2.jpeg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h4>Programme information</h4>
            <ul>
              <li><strong>Tag</strong>: <a href="javascript:void">Shoe Making</a></li>
              <li><strong>Category</strong>: Skill Acquisation</li>
              <li><strong>Participants</strong>: 50+ individuals</li>
              <li><strong>Programme duration</strong>:6 Months</li>
            </ul>
            <a href="<?php echo URLROOT; ?>/pages/events#shoe" class="readmore stretched-link"><span>More details</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Portfolio Details Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section dark-background">
    <img src="<?php echo URLROOT; ?>/assets/img/new/vol.jpeg" alt="">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Volunteer Opportunities</h3>
            <p>Whether you have skills in education, healthcare, craftmanship or business, or simply a willingness to lend a hand, we invite you to join us as a volunteer!</p>
            <a class="cta-btn" href="<?php echo URLROOT; ?>/pages/volunteer">Get Involved</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Call To Action Section -->
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>