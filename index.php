<?php 

    $title = 'Bosh Sahifa - PHP Blog';

    require 'includes/header.php';

?>

    <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container d-flex flex-column align-items-center text-center">
            <h2 data-aos="fade-up" data-aos-delay="100">Bizning veb-saytimizga xush kelibsiz</h2>
            <p data-aos="fade-up" data-aos-delay="200">Biz PHP yordamida veb-saytlar yaratuvchi iqtidorli dasturchilar jamoasimiz</p>
            <div data-aos="fade-up" data-aos-delay="300">
            <a href="https://www.youtube.com/watch?v=a7_WFUlFS94" class="glightbox pulsating-play-btn"></a>
            </div>
        </div>

        </section>
    <!-- /Hero Section -->

    <!-- About Section -->
        <?php 
            require 'includes/about.php';
        ?>
    <!-- /About Section -->

    <!-- Services Section -->
      <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>PHP qanday xizmatlar ko'rsata oladi</h2>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Dynamic Website Development</h3>
                </a>
                <p>PHP yordamida foydalanuvchi bilan o‘zaro ishlaydigan dinamik veb-saytlar yaratish.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Custom CMS Development</h3>
                </a>
                <p>O‘ziga xos kontent boshqaruv tizimlari (CMS) tuzish.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Blog & News Portal Creation</h3>
                </a>
                <p>Yangiliklar va blog platformalarini ishlab chiqish.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>API Development & Integration</h3>
                </a>
                <p>Backend API lar yaratish va ularga ulanish.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Web Security Implementation</h3>
                </a>
                <p>PHP asosida xavfsizlik choralari (login, ma’lumotlarni himoya qilish).</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Database Integration</h3>
                </a>
                <p>MySQL yoki boshqa ma’lumotlar bazalari bilan integratsiya qilish.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div><!-- End Service Item -->

          </div>

        </div>

      </section>
    <!-- /Services Section -->

    <!-- Stats Section -->
      <section id="stats" class="stats section dark-background">

        <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="subheading">
              <h3>Hozirgacha PHP nimaga erishdi</h3>
            </div>

            <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                <p>Tajriba</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <div class="displey-flex d-flex justify-content-center">
                  <span data-purecounter-start="0" data-purecounter-end="75" data-purecounter-duration="1" class="purecounter"></span>
                  <span>%</span>
                </div>
                <p>Internetdagi saytlarni % tashkil qiladi</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                <p>Mashhur Frameworklar soni</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="5000000"  data-purecounter-duration="1" class="purecounter"></span>
                <p>PHP Ishchilar</p>
                </div>
            </div><!-- End Stats Item -->

            </div>

        </div>

        </section>
    <!-- /Stats Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Tez-tez So'raladigan </span><strong>Savollar</strong></h3>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>PHP nima va u nimaga ishlatiladi?</h3>
                <div class="faq-content">
                  <p>PHP — bu server tomonida ishlaydigan dasturlash tili bo‘lib, dinamik va interaktiv veb-saytlar yaratishda ishlatiladi. U HTML bilan birga ishlaydi va ma’lumotlar bazasi bilan oson integratsiya qilinadi.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>PHP qaysi mashhur frameworklarga ega?</h3>
                <div class="faq-content">
                  <p>PHP’da Laravel, Symfony, CodeIgniter, Yii, CakePHP kabi mashhur frameworklar mavjud. Laravel ayniqsa eng ko‘p ishlatiladigan va zamonaviy loyihalar uchun qulay framework hisoblanadi.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>PHP bilan ishlash uchun nimalar kerak?</h3>
                <div class="faq-content">
                  <p>PHP bilan ishlash uchun web-server (Apache, Nginx), PHP o‘zi va ma’lumotlar bazasi (MySQL, MariaDB) o‘rnatilgan bo‘lishi kerak. Oson o‘rnatish uchun XAMPP yoki Laragon kabi paketlardan foydalanish mumkin.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->


    <!-- Contact Section -->
      <section id="contact" class="contact section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Kontakt</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Biz bilan bog'laning</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Bizning emailimiz</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Ismingiz" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Elektron pochtangiz" required="">
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Xaqida" required="">
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Xabar" required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Sizning xabaringiz yuborildi. Rahmat!</div>

                    <button type="submit">Xabar Yuboring</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section>
    <!-- /Contact Section -->

<?php 

    require 'includes/footer.php';

?>