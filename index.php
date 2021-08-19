<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Jenny</title>
  <link rel="stylesheet" href="assets/css/color.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body>

<!--Switcher-->
  <div class="style-switcher">
    <span class="style-switcher__control"></span>
    <div class="style-switcher__list">
      <a class="style-switcher__link style-switcher__link--color"></a>
      <a class="style-switcher__link style-switcher__link--mono"></a>
    </div>
  </div>
<!--Switcher-->

<!--Main menu-->
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="menu__wrapper d-none d-lg-block col-md-12">
          <nav class="">
            <ul>
              <li><a href="#hello">Hello</a></li>
              <li><a href="#resume">Resume</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="menu__wrapper col-md-12 d-lg-none">
          <button type="button" class="menu__mobile-button">
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button>
        </div>
      </div>
    </div>
  </div>
<!--Main menu-->

<!-- Mobile menu -->
  <div class="mobile-menu d-lg-none">
    <div class="container">
      <div class="mobile-menu__close">
        <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
      </div>
      <nav class="mobile-menu__wrapper">
        <ul>
          <li><a href="#hello">Hello</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
<!-- Mobile menu -->

<!--Header-->
  <header class="main-header" style="background-image: url(assets/img/img_bg_header.jpg)">
    <div class="container">
      <div class="row personal-profile">
        <div class="col-md-4 personal-profile__avatar">
          <img class="" src="     assets/img/img_bg_header.jpg    ")alt="avatar">
        </div>
        <div class="col-md-8">
          <p class="personal-profile__name">Jennie</p>
          <p class="personal-profile__work">backend developer, software-engineer</p>
          <div class="personal-profile__contacts">
            <dl class="contact-list contact-list__opacity-titles">
              <dt>Age:</dt>
              <dd>23</dd>
              <dt>Phone:</dt>
              <dd><a href="tel:09098888788">09078546647</a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:jenny@gmail.com">jenny@gmail.com</a></dd>
              <dt>Address:</dt>
              <dd>Lagos state, Nigeria</dd>
            </dl>
          </div>
          <p class="personal-profile__social">
            <a href="" target="_blank"><i class="fa fa-github"></i></a>
            <a href="" target="_blank"><i class="fa fa-linkedin-square"></i></a>
            <a href="" target="_blank"><i class="fa fa-facebook-square"></i></a>
          </p>
        </div>
      </div>
    </div>
  </header>
<!--Header-->

<!--Hello-->
  <section id="hello" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h2 id="hello_header" class="section__title">Hi_</h2>
        <p class="section__description">
          I am a backend developer. I build with css, php and html
        </p>
        <a href="" class="section_btn site-btn"><img src="assets/img/img_btn_icon.png" alt="">Download CV</a>
      </div>
    </div>
  </section>
<!--Hello-->

  <hr>

<!--Resume-->
  <section id="resume" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h2 id="resume_header" class="section__title">Resume_</h2>
        <p class="section__description">
          I am diligent innovative optimistic <i><b>helpful </b>individual
          give chances to great minds. ability to communicate effectivetly with my team members.
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 section__resume resume-list">
        <h3 class="resume-list_title">education</h3>
        <div class="resume-list__block">
          <p class="resume-list__block-title">Delta state university </p>
          <p class="resume-list__block-date">2020</p>
          <p>
            Bachelor degree
          </p>
        </div>
      
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 section__resume resume-list">
        <h3 class="resume-list_title">Internship</h3>
        <div class="resume-list__block">
          <p class="resume-list__block-title">HNGi8 x I4G</p>
          <p class="resume-list__block-date">August 2021</p>
          <p>
             Backend Developer (Intern)
          </p>
        </div>
        <div class="resume-list__block">
          <p class="resume-list__block-title">Zuri Team</p>
          <p class="resume-list__block-date">july 2021</p>
          <p>
            Awesome developer.
          </p>
        </div>
        
        </div>
      </div>
    </div>
    <div class="row section__resume progress-list js-progress-list">
      <div class="col-md-12">
        <h3 class="progress-list__title">general skills</h3>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">html5</span>
            <span class="progress-list__skill-value">80%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">css3</span>
            <span class="progress-list__skill-value">70%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">java script</span>
            <span class="progress-list__skill-value">90%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">jquery</span>
            <span class="progress-list__skill-value">80%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">bootstrap 3</span>
            <span class="progress-list__skill-value">80%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">grunt</span>
            <span class="progress-list__skill-value">60%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">git</span>
            <span class="progress-list__skill-value">90%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="progress-list__skill">
          <p>
            <span class="progress-list__skill-title">adobe photoshop</span>
            <span class="progress-list__skill-value">80%</span>
          </p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Resume-->

<!--Portfolio-->
  <section id="portfolio" class="container section">
    <div class="row">
      <div class="col-md-12">
        <h2 id="portfolio_header" class="section__title">My projects_</h2>
      </div>
    </div>
    <div class="row portfolio-menu">
      <div class="col-md-12">
        <nav>
          <ul>
            <li><a href="" data-portfolio-target-tag="all">all</a></li>
            <li><a href="" data-portfolio-target-tag="mobile apps">mobile apps</a></li>
            <li><a href="" data-portfolio-target-tag="web-sites">web-sites</a></li>
            <li><a href="" data-portfolio-target-tag="landing-pages">landing pages</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="portfolio-cards">
      <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="web-sites">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/img_project_1_mono.png" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Mobile and desktop app for London hostel store  </h3>
          <p class="project-card__description">
            Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
            Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
          <a href="" class="project-card__link">www.superapp.com</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="mobile apps">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img class="" src="assets/img/img_project_2_mono.png" alt="project-img">
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Web app page for trevel company</h3>
          <p class="project-card__description">
            Preference any astonished unreserved mrs. Prosperous understood middletons in conviction an
             uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from mr.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>BEM</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
          <a href="" class="project-card__link">www.travellend.com</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="landing-pages">
        <div class="col-md-6 col-lg-5 project-card__img">
        <img class="" src="assets/img/img_project_3_mono.png" alt="project-img">
      </div>
        <div class="col-md-6 col-lg-7 project-card__info">
        <h3 class="project-card__title">Admin template for Photo Service</h3>
        <p class="project-card__description">
          Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
          Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
        </p>
        <p class="project-card__stack">Used stack:</p>
        <ul class="tags">
          <li>html5</li>
          <li>css3</li>
          <li>JavaScript</li>
          <li>BEM</li>
          <li>bower</li>
          <li>grunt</li>
        </ul>
        <a href="" class="project-card__link">www.coolphoto.com</a>
      </div>
      </div>
    </div>
  </section>
<!--Portfolio-->

<!--Testimonials-->
  <div id="testimonials" class="section">
    <div class="background slider-carousel" style="background-image: url(assets/img/img_bg_main.jpg);">
      <div class="container">
        <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselTestimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTestimonials" data-slide-to="1"></li>
            <li data-target="#carouselTestimonials" data-slide-to="2"></li>
            <li data-target="#carouselTestimonials" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                  <p class="slider-carousel__title">Antonio Anderson</p>
                  <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                  <hr>
                  <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                    cease too the decay. </p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <div class="slider-carousel__circle">
            <p><i class="fa fa-quote-right" aria-hidden="true"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Testimonials-->



<!--Contact-->
  <div class="background" style="background-image: url(assets/img/img_bg_main.jpg)">
    <div id="contact" class="container section">
      <div class="row">
        <div class="col-md-12">
          <p id="contacts_header" class="section__title">Get in touch_</p>
        </div>
      </div>
      <div class="row contacts">
        <div class="col-md-5 col-lg-4">
          <div class="contacts__list">
            <dl class="contact-list">
              <dt>Phone:</dt>
              <dd><a href="tel:09098888788">09078546647</a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:g@gmail.com">jenny@gmail.com</a></dd>
            </dl>
          </div>
          <div class="contacts__social">
            <ul>
              <li><a href="">Facebook</a></li>
              <li><a href="">Linkedin</a></li>
              <li><a href="">GitHub</a></li>
            
            </ul>
          </div>
        </div>
        <div class="col-md-7 col-lg-5">
          <div class="contacts__form">
            <p class="contacts__form-title">Or just write me a letter here_</p>
            <form action="mail.php" method="post" class="js-form">
              <div class="form-group">
                <input class="form-field js-field-name" name="name" type="text" placeholder="Your name" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                <input class="form-field js-field-email" name="email" type="email"  placeholder="Your e-mail" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                <textarea class="form-field js-field-message" name="message" placeholder="Type the message here" required></textarea>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <button class="site-btn site-btn--form" type="submit" value="Send">Send</button>
            </form>
          </div>
          <div class="footer">
            <p>© 2021 jenny All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--Contact-->

<!-- Portfolio Modal -->
  <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md-11 col-lg-9 ml-auto mr-auto">
        <p class="portfolio-modal__title">Mobile and desktop app for London hostel store</p>
        <img class="portfolio-modal__img" src="assets/img/img_project_1_mono.png" alt="modal_img">
        <p class="portfolio-modal__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          conse.
        </p>
        <div class="portfolio-modal__link">
          <a href="">www.superapp.com</a>
        </div>
        <div  class="portfolio-modal__stack">
          <p class="portfolio-modal__stack-title">Using stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal -->

  <script src="assets/js/jquery-2.2.4.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/menu.js"></script>
  <script src="assets/js/jquery.waypoints.js"></script>
  <script src="assets/js/progress-list.js"></script>
  <script src="assets/js/section.js"></script>
  <script src="assets/js/portfolio-filter.js"></script>
  <script src="assets/js/slider-carousel.js"></script>
  <script src="assets/js/mobile-menu.js"></script>
  <script src="assets/js/contacts.js"></script>
  <script src="assets/js/mbclicker.min.js"></script>
  <script src="assets/js/site-btn.js"></script>
  <script src="assets/js/style-switcher.js"></script>
</body>
</html>
