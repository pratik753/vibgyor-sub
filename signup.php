<?php
require 'dbconfig.php';
if (isset($_POST['logsubmit'])) {

    $email = $_POST['logemail'];
    $pass = $_POST['logpassword'];
   

    $name = $con->query("select * from `users` where email='" . $email . "' and password='" . $pass . "'");
    $user = $name->fetch_assoc();

    if ($name->num_rows != 0) {
        $_SESSION['username'] = $user['name'];
        $_SESSION['uid'] = $user['id'];
        ?>
        <script>
            window.location.href = "newshome.php";
        </script>
    <?php
    } 
    else {
    ?>
        <script>
            alert('Invalid Email Address or Password!\nOr Your Account might be Deactivated!\nContact System Administrator');
        </script>
        <?php
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-WWE3C8BVZB"></script> -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WWE3C8BVZB');
    </script>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 10px;
        }
        
        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 0.5px solid grey;
        }
        
        .separator:not(:empty)::before {
            margin-right: .25em;
        }
        
        .separator:not(:empty)::after {
            margin-left: .25em;
        }
        
        .social-network {
            list-style: none;
            display: flex;
            justify-content: center;
            text-align: center;
            margin-right: 1vw;
        }
        
        .social-network li {
            display: inline;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin: 1vw;
        }
        
        .social-circle li a {
            cursor: pointer;
            display: inline-block;
            position: relative;
            color: #fff;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            text-align: center;
            width: 45px;
            height: 45px;
            font-size: 30px;
        }
        
        .social-circle li a:hover i,
        .triggeredHover {
            color: #fff;
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -ms--transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }
        
        .login-popup .box2 {
            background-color: #ffffff;
            height: auto;
            width: auto;
            border-radius: 2%;
        }
        
        .box p {
            padding-top: 12px;
            text-align: center;
        }
        
        .login-popup {
            margin: 4%;
        }
        
        .login-popup.show .box {
            opacity: 1;
            margin-left: 0;
            padding: 1vw;
        }
        
        .login-popup .box .form {
            position: relative;
            display: none;
        }
        
        .login-popup .box .active {
            display: block;
        }
        
        .login-popup .box {
            width: 100%;
            height: 100%;
        }
        
        .login-popup .box .form h1 {
            text-align: center;
        }
        
        .login-popup .box .form .form-control {
            height: 45px;
            margin-bottom: 30px;
            width: 100%;
            border: none;
            border-bottom: 1px solid #cccccc;
            font-size: 15px;
            color: #000000;
        }
        
        .login-popup .box .form .form-control:focus {
            outline: none;
        }
        
        .login-popup .box .form label {
            font-size: 15px;
            color: #555555;
        }
        
        .login-popup .box .btn {
            position: relative;
            width: 40%;
            margin: auto;
            margin-top: 4%;
            margin-left: 6%;
            height: 45px;
            border: none;
            outline: none;
            border-radius: 25px;
            background: transparent;
            font-size: 15px;
            text-transform: uppercase;
            color: #f45485;
            border: 2px solid #f45485;
            cursor: pointer;
        }
        
        .login-popup .box .btn:hover {
            color: #f45485;
            background: transparent;
        }
        
        .login-popup .box .activebtn {
            background: #f45485;
            color: white;
        }
        
        .login-popup .box .submit {
            margin-left: 30%;
            background: #13A89E;
            color: white;
            border: none;
            width: 40%;
            margin: 0 30%;
            margin-top: 4%;
            outline: none;
            border-radius: 25px;
            height: 45px;
            cursor: pointer;
        }
        
        .login-popup .box .submit:hover {
            color: #13A89E;
            border: 2px solid #13A89E;
            background: transparent;
        }
        
        .login-popup .box .form .btn:focus {
            outline: none;
        }
        
        #forgot {
            cursor: pointer;
        }
        
        .box2 {
            box-shadow: #555555;
        }
        
        @media only screen and (min-width:980px) {
            .section-title--2 {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }
    </style>
</head>

<body>
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
                    <li class="nav-item">
                        <a class="nav-link" href="sevices.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member.html">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connect.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Start Breadcrump Area  -->
        <div data-aos="fade-down" data-aos-duration="500" class="about-area rn-section-gap bg_color--1" style="margin-top:5%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title section-title--2 text-center mb--30">
                            <div class="about-inner inner">
                                <div class="section-title">

                                    <p class="description"><b>
                                        True to our name we hold our clients and their money in way which works for them and shine in all 
                                        7 colours like a Vibgyor.
                                        We offer full range products and services on equity side.
                                        </b>

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="login-popup" method="post">
                            <div class="box2">

                                <!-- <div class="sign-head">
                                <div class="close">&times;</div> 
                              </div> -->

                                <div class="box">
                                    <div class="form log active">
                                        <h1>Log In</h1>
                                        <input type="text" name="logemail" id="logemail" placeholder="Email *" class="form-control" required>
                                        <input type="password" name="logpassword" id="logpassword" placeholder="Password *" class="form-control" required>
                                        <button name="logsubmit" type="submit" class="submit" >Submit</button>
                                    </div>
                                </div>
                            </div>
                         </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrump Area  -->
        <!-- Start Page Wrapper  -->


        <!-- End Page Wrapper  -->

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



    <script src="/assets/js/connect.js"></script>
    <script src="/assets/js/vendor/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.querySelector(".signbtn").addEventListener("click", function() {
            document.querySelector(".sign").classList.add("active");
            document.querySelector(".signbtn").classList.add("activebtn");
            document.querySelector(".log").classList.remove("active");
            document.querySelector(".logbtn").classList.remove("activebtn");
        });

        document.querySelector(".logbtn").addEventListener("click", function() {
            document.querySelector(".log").classList.add("active");
            document.querySelector(".logbtn").classList.add("activebtn");
            document.querySelector(".sign").classList.remove("active");
            document.querySelector(".signbtn").classList.remove("activebtn");
        });
    </script>

    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-storage.js"></script>
    <script src="/assets/js/firebase.js"></script>
    <script src="assets/js/login.js"></script>

</body>

</html>