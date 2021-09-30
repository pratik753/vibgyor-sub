<?php
           
?>
<!doctype html>
<html class="no-js" lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vibgyor Advisors</title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- CSS -->

    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/vendor/lightbox.css">
    <link rel="stylesheet" href="/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/vendor/mdb.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/aos.css">


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '223792792397151');
        fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->
    <style>
        .post-slider {
            height: fit-content;
            position: relative;
        }
        
        .post-slider .slider-title {
            color: #cc2e72;
            font-weight: 800;
            text-align: center;
            margin: 2vw auto;
        }
        
        .post-slider .next {
            position: absolute;
            top: 50%;
            right: 30px;
            font-size: 2em;
            color: #cc2e72;
            cursor: pointer;
        }
        
        .post-slider .prev {
            position: absolute;
            top: 50%;
            left: 30px;
            font-size: 2em;
            color: #cc2e72;
            cursor: pointer;
        }
        
        .post-wrapper {
            position: relative;
            top: 20%;
            width: 84%;
            margin: 1vw auto;
            overflow: hidden;
            padding: 10px 0px 25px 0px;
        }
        /* .post {
  box-shadow: 0px 15px 20px rgba(112, 112, 112, 0.527);
} */
        
        .post:hover {
            transform: scale(1.02);
            transition: ease-out 0.25s;
            outline: none;
        }
        
        .post-slider .post-wrapper .post {
            width: 300px;
            margin: 0px 10px;
            display: inline-block;
            background: var(--sky);
            border-radius: 10px;
            box-shadow: 1rem 1rem 1rem -1rem #44434369;
        }
        
        .post-slider .post-wrapper .post .post-image {
            height: 40vh;
            padding: 0px
        }
        
        .post-slider .post-wrapper .post .post-info {
            padding: 0.5vw;
            z-index: 99;
        }
        
        .post-slider .post-wrapper .post .slider-image {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        
        .post-info i {
            width: auto;
            padding: 2%;
            color: #13A89E;
            border-radius: 2rem;
        }
        
        .page-wrapper {
            min-height: 100%;
        }
        
        @media only screen and (min-width: 320px) and (max-width: 770px) {
            #carouselExampleSlidesOnly img {
                height: 35vh;
            }
            .carousel-caption {
                font-size: 2vw;
            }
            .post-slider .slider-title {
                font-size: 26px;
            }
            .post-slider .post-wrapper .post .post-image {
                height: auto;
                padding: 0px;
            }
            .post-info i {
                width: auto;
                padding: 0%;
                color: #13A89E;
                border-radius: 2rem;
            }
            .likes {
                margin: 2%;
                float: right;
                width: fit-content;
            }
            .post-slider .post-wrapper .post .post-info {
                padding: 2.5vw;
                z-index: 99;
            }
            .sidebar .recent-post-title {
                margin: auto 1.5vw;
                font-weight: 800;
                color: #FCB040;
                text-align: center;
                font-size: 26px;
            }
        }
        
        @media only screen and (min-width: 770px) and (max-width: 1400px) {
            #carouselExampleSlidesOnly img {
                height: 50vh;
            }
            .carousel-caption {
                font-size: 2vw;
            }
            .post-slider .slider-title {
                font-size: 26px;
            }
            .post-slider .post-wrapper .post .post-image {
                height: auto;
                padding: 0px;
            }
            .likes-share {
                margin-top: 0vw;
                padding-right: 2vw;
                float: right;
            }
            h4,
            h3 {
                font-size: 2vw;
                margin: 0vw;
            }
            h6 {
                margin: 0 auto;
            }
            .post-info i {
                width: auto;
                padding: 0%;
                color: #13A89E;
                border-radius: 2rem;
            }
            .likes {
                margin: 2%;
                float: right;
                width: fit-content;
            }
            .post-slider .post-wrapper .post .post-info {
                padding: 2.5vw;
                z-index: 99;
            }
            .sidebar .recent-post-title {
                margin: auto 1.5vw;
                font-weight: 800;
                color: #FCB040;
                text-align: center;
                font-size: 26px;
            }
        }
        
        @media only screen and (max-width: 600px) {
            .post-slider .next {
                right: 5px;
            }
            .post-slider .prev {
                left: 5px;
            }
        }
    </style>

</head>


<div class="main-page">
    <!-- Start Header -->
    <nav class="navbar fixed-top navbar-expand-md navbar-light sticky" style="background-color: white;">
        <a class="navbar-brand" href="#"><img src="assets/images/main.png" style="width:200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"><i data-feather="menu"></i></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color:rgb(201, 21, 156);" href="index.html">Home</a>
                </li>


            </ul>
        </div>
    </nav>



    <main class="page-wrapper">
        <!-- Start Service Area  -->
<<<<<<< HEAD:newshome.php
     <section style="margin:6%">
        <div class="row">
            <!-- Start Single Service  -->
            <div class="col-lg-12" style="margin: 5%;">
                <h2 style="text-align: center;">Our Services</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">
    
                <div class="single-service service__style--4 large-size text-center">
                    <a href="offer.html">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="cast"></i>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="600" class="content">
                                <h3 class="title">Intraday Calls</h3>
                                <p></p>
                            </div>
                        </div>
                    </a>
=======
        <section style="margin:6%">
            <div class="row">
                <!-- Start Single Service  -->
                <div class="col-lg-12" style="margin: 5%;">
                    <h2 style="text-align: center;">Just a sneek peek of Our Services</h2>
>>>>>>> 8e56e4b981c17ac73c50158c290069c7178661ba:newshome.html
                </div>
                <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">

                    <div class="single-service service__style--4 large-size text-center">
                        <a href="offer.html">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="cast"></i>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="600" class="content">
                                    <h3 class="title">Intraday Calls</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">

                    <div class="single-service service__style--4 large-size text-center">
                        <a href="offer.html">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="layers"></i>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="600" class="content">
                                    <h3 class="title">Short Term Calls</h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">

                    <div class="single-service service__style--4 large-size text-center">
                        <a href="offer.html">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="monitor"></i>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="600" class="content">
                                    <h3 class="title">Investment Calls 1</h3>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Service  -->

                <!-- Start Single Service  -->
                <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">

                    <div class="single-service service__style--4 large-size text-center">
                        <a href="offer.html">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="activity"></i>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="600" class="content">
                                    <h3 class="title">Investment Calls 2
                                    </h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Service  -->
                <!-- Start Single Service  -->
                <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">

                    <div class="single-service service__style--4 large-size text-center">
                        <a href="offer.html">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="phone"></i>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="600" class="content">
                                    <h3 class="title">Sectoral Calls
                                    </h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Service  -->
                <!-- Start Single Service  -->
                <div data-aos="fade-up" data-aos-duration="500" class="col-lg-6 col-md-6 col-sm-6 col-12">

                    <div class="single-service service__style--4 large-size text-center">
                        <a href="offer.html">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="check"></i>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="600" class="content">
                                    <h3 class="title">Portfolio Health Checkup
                                    </h3>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Service  -->
            </div>
        </section>
        <section>
            <!-- Start Post Slider -->

            <div class="post-slider rn-section-gap">
                <h1 class="slider-title">Trending Financial News</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>

                <div class="post-wrapper">
                    <!--   
          <div class="post">
            <div class="post-image">
              <img src="https://source.unsplash.com/collection/190727/500x500" alt="" class="slider-image">
            </div>
            <div class="post-info">
              <h4><a href="#">Trending post headline goes here</a></h4><br>
              <div style="margin-top: -2vw;">
                <h6>USER:</h6><p>Epsum Lorem</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, ipsam. Maiores sint similique error atque iste! Voluptates molestias eligendi adipisci.<span style="color:#13A89E;"><a href="index.html">..readmore</a></span></p>
            
              </div>
              <div style="margin-top: 1vw;">
                <i class="far fa-calendar" style="color: rgba(51, 51, 51, 0.705)"> Mar
                  8,2021</i><span style="margin-left: 7vw ">
                  
              </div></span>
            </div>
          </div> -->

                    <!-- <div class="post">
            <div class="post-image">
              <img src="https://source.unsplash.com/collection/190727/500x500" alt="" class="slider-image">
            </div>
            <div class="post-info">
              <h4><a href="#">Trending post headline goeshere</a></h4><br>
              <div style="margin-top: -2vw;">
                <h6>USER</h6>
              </div>
              <div style="margin-top: 1vw;">
                <i class="far fa-calendar" style="color: rgba(51, 51, 51, 0.705)"> Mar
                  8,2021</i><span style="margin-left: 7vw ">
                  <i class="fa fa-thumbs-up">&nbsp;</i>
                  <i class="fa fa-thumbs-down">&nbsp;</i>
                  <i class="fa fa-share"></i>
              </div></span>
            </div>
          </div>
  
          <div class="post">
            <div class="post-image">
              <img src="https://source.unsplash.com/collection/190727/500x500" alt="" class="slider-image">
            </div>
            <div class="post-info">
              <h4><a href="#">Trending post headline goeshere</a></h4><br>
              <div style="margin-top: -2vw;">
                <h6>USER</h6>
              </div>
              <div style="margin-top: 1vw;">
                <i class="far fa-calendar" style="color: rgba(51, 51, 51, 0.705)"> Mar
                  8,2021</i><span style="margin-left: 7vw ">
                  <i class="fa fa-thumbs-up">&nbsp;</i>
                  <i class="fa fa-thumbs-down">&nbsp;</i>
                  <i class="fa fa-share"></i>
              </div></span>
            </div>
          </div>
  
          <div class="post">
            <div class="post-image">
              <img src="https://source.unsplash.com/collection/190727/500x500" alt="" class="slider-image">
            </div>
            <div class="post-info">
              <h4><a href="#">Trending post headline goeshere</a></h4><br>
              <div style="margin-top: -2vw;">
                <h6>USER</h6>
              </div>
              <div style="margin-top: 1vw;">
                <i class="far fa-calendar" style="color: rgba(51, 51, 51, 0.705)"> Mar
                  8,2021</i><span style="margin-left: 7vw ">
                  <i class="fa fa-thumbs-up">&nbsp;</i>
                  <i class="fa fa-thumbs-down">&nbsp;</i>
                  <i class="fa fa-share"></i>
              </div></span>
            </div>
          </div>
  
          <div class="post">
            <div class="post-image">
              <img src="https://source.unsplash.com/collection/190727/500x500" alt="" class="slider-image">
            </div>
            <div class="post-info">
              <h4><a href="#">Trending post headline goeshere</a></h4><br>
              <div style="margin-top: -2vw;">
                <h6>USER</h6>
              </div>
              <div style="margin-top: 1vw;">
                <i class="far fa-calendar" style="color: rgba(51, 51, 51, 0.705)"> Mar
                  8,2021</i><span style="margin-left: 7vw ">
                  <i class="fa fa-thumbs-up">&nbsp;</i>
                  <i class="fa fa-thumbs-down">&nbsp;</i>
                  <i class="fa fa-share"></i>
              </div></span>
            </div>
          </div>
  
          <div class="post">
            <div class="post-image">
              <img src="https://source.unsplash.com/collection/190727/500x500" alt="" class="slider-image">
            </div>
            <div class="post-info">
              <h4><a href="#">Trending post headline goeshere</a></h4><br>
              <div style="margin-top: -2vw;">
                <h6>USER</h6>
              </div>
              <div style="margin-top: 1vw;">
                <i class="far fa-calendar" style="color: rgba(51, 51, 51, 0.705)"> Mar
                  8,2021</i><span style="margin-left: 7vw ">
                  <i class="fa fa-thumbs-up">&nbsp;</i>
                  <i class="fa fa-thumbs-down">&nbsp;</i>
                  <i class="fa fa-share"></i>
              </div></span>
            </div>
          </div> -->

                </div>
            </div>
            <!-- End Post Slider -->


        </section>

        <!-- End Service Area  -->

    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <h6>Locate Us</h6>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i>&emsp;Vibgyor Advicorp Private Limited, 117, Swastik Disa Corporate Park, Opp Shreyas Cinema, LBS Marg, Ghatkopar (W), Mumbai 400086.</li>
                        <li>
                            <div class="map"> </div>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-4">
                    <h6>Connect Us</h6>
                    <ul class="footer-links">
                        <li onclick="location.href='mailto:info@vibgyoradvisors.com'"><i class="fas fa-envelope"></i>&emsp;info@vibgyoradvisors.com</li>
                        <li onclick="location.href='tel:8591402580'"><i class="fas fa-phone"></i>&emsp;8591402580</li>
                        <li onclick="location.href='tel:022-79615327'"><i class="fas fa-tty"></i>&emsp;022-79615327</li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-4">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4483.712803053567!2d72.91082386943492!3d19.09282140785004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7cc36cfdd89%3A0x108837ab2c1bc1f!2sSwastik%20Disa%20Corporate%20Park!5e0!3m2!1sen!2sin!4v1620983347252!5m2!1sen!2sin"
                        width="300" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
            <hr style="color:#cc2e72;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text"> Division of Vibgyor Advicorp PVT Limited &copy; 2019

                    </p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/sachin.neema.332/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="https://www.instagram.com/vibgyor_advisors/"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer -->

</div>

<!-- JS -->
<!-- Modernizer JS -->
<script src="/assets/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="/assets/js/vendor/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/vendor/stellar.js"></script>
<script src="/assets/js/vendor/particles.js"></script>
<script src="/assets/js/vendor/masonry.js"></script>
<script src="/assets/js/vendor/stickysidebar.js"></script>
<script src="/assets/js/plugins/plugins.min.js"></script>
<script src="/assets/js/vendor/mdb.min.js"></script>
<!-- Main JS -->
<script src="/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="/assets/js/lazyload.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="/assets/js/vendor/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-storage.js"></script>
<script src="/assets/js/firebase.js"></script>
<script src="/assets/js/newshome.js"></script>
</body>

</html>