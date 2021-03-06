<!doctype html>
<html lang="en">
    <head>
        
        <!-- Meta Tags -->
        <title>Your Designer</title>
        <meta name="title" content="Your Designer">
        <meta name="description" content="Your typical designer's portfolio">
        <meta name="author" content="Jude Okoroafor">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">
        <meta name="keywords" content="Template, HTML, YourDesigner, Designer">
        <!-- Hero CSS -->
        <!-- Bootstrap core CSS -->
        <link href="style/vendors/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style/main.css" rel="stylesheet">
        
    </head>
    <body class="bg-light">
        <?php include "includes/dbconn.php"; // Using database connection file here ?>
        <div id="top offcanvas-close"></div>
        <!-- MENU SECTION -->
        <section class="">
            <!-- ------------------------ MAIN NAV ----------------------- -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-main ">
                <a class="navbar-brand mr-auto mr-lg-0 reload-page" href="#" id="Reloadpage" style="min-width: 80px;">
                    <img src="img/logo.png" alt="Logo Image" id="logo">
                </a>
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto text-uppercase mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#top">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hire">Hire me</a>
                            <!--                             <a class="nav-link btn btn-primary btn-lg" href="#" role="button">Hire me</a>
                        -->                        </li>
                        <span class="align-bottom d-block d-sm-none fixed-bottom mb-5 socials text-center" id="">
                            <img src="img/twitter.png" alt="image">
                            <img src="img/facebook.png" alt="image">
                            <img src="img/behance.png" alt="image">
                            <img src="img/instagram.png" alt="image">
                        </span>
                    </ul>
                </div>
                <span class=" mr-auto mr-lg-0 d-none d-sm-block socials " id="">
                    <img src="img/twitter.png" alt="image">
                    <img src="img/facebook.png" alt="image">
                    <img src="img/behance.png" alt="image">
                    <img src="img/instagram.png" alt="image">
                </span>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <!----------------------- SECONDARY NAV ------------------------->
        </section>
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div class="splash">
                <div class="container">
                    <h1 class="display-3 font-weight-bolder hello-name">Hello, I’m Folio.</h1>
                    <p class="">Let’s create something new and awesome together.<br>I can help you create positive and permanent changes<br>in your business.
                    </p>
                    <p><a class="btn btn-primary btn-lg text-uppercase" href="#" role="button">download resume</a></p>
                </div>
                <div id="about"></div>
            </div>
        </section>
        <!-- ABOUT SECTION -->
        <section class="about-us-section">
            
            <div class="container">
                
                <div class="row text-center ">
                    <div class="col-sm-6">
                        <div class="about-us about-us-description ml-2 mr-2 text-left">
                            <h2 class="title font-weight-bold">I am a professional<br>designer from New York</h2>
                            <p class="title-description">I can help you create positive and permanent changes in your life. High Performance Portfolio Template. Let’s Create Something new and awesome Togeather. I can help you create positive and permanent changes in your life..</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-us mb-3 mr-sm-0 ml-sm-0 profile">
                            
                            <img class="img-fluid" src="img/about.png">
                        </div>
                    </div>
                </div>
                <div id="services"></div>
            </div>
        </section>
        <!-- SERVICES SECTION -->
        <section class="services-section ">
            
            <div class="container text-center">
                
                <div class="row services">
                    <div class="px-3 py-3 pb-md-4 mx-auto text-center col-md-8 offset-md-2 ">
                        <h6 class="subtitle font-weight-bold">Services</h6>
                        <h2 class="title font-weight-bold">From concept to creation</h5>
                        <p class="title-description ml-4 mr-4">Let’s create something new and awesome together.<br>I can help you create positive and permanent changes in your life..</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center justify-content-center font-weight-bold">
                    <div class="col-sm-3 col-md-4">
                        <div class=" m-3 p">
                            <img class="img-fluid pl-3 pr-3 pt-3" src="img/service1.png">
                            <p class="mt-2">Web Ui Design</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-4">
                        <div class="m-3">
                            <img class="img-fluid pl-3 pr-3 pt-3" src="img/service2.png">
                            <p class="mt-2">Mobile Ui Design</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-4">
                        <div class="m-3">
                            <img class="img-fluid pl-3 pr-3 pt-3" src="img/service3.png">
                            <p class="mt-2">Branding Design</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio"></div>
        </section>
        <!-- PORTFOLIO SECTION -->
        <section class="portfolio-section">
            <div class="container">
                <div class="row text-left justify-content-center font-weight-bold">
                    <div class="col-sm-6 col-md-5">
                        <div class="m-3">
                            <div class="d-block d-sm-none">
                                <h6 class="subtitle font-weight-bold">Portfolio</h6>
                                <h2 class="title font-weight-bold">Few selected works</h5>
                                <p class="title-description font-weight-normal">Let’s Create Something new and awesome Togeather.</p>
                            </div>
                            <img class="img-fluid" src="img/portfolio1.png">
                            <p class="mt-2">Branding Design</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="m-3">
                            <div class=" d-none d-sm-block">
                                <h6 class="subtitle font-weight-bold">Portfolio</h6>
                                <h2 class="title font-weight-bold">Few selected works</h5>
                                <p class="title-description font-weight-normal">Let’s Create Something new and awesome Togeather.</p>
                            </div>
                            <img class="img-fluid" src="img/portfolio2.png">
                            <p class="mt-2 ">Mobile Ui Design</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="m-3">
                            <img class="img-fluid" src="img/portfolio3.png">
                            <p class="mt-2">Branding Design</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="m-3">
                            <div class="d-none d-sm-block">
                                <p class="title-description font-weight-normal">&nbsp;</p>
                                <p class="title-description font-weight-normal">&nbsp;</p>
                                <p class="title-description font-weight-normal">&nbsp;</p>
                            </div>
                            <img class="img-fluid" src="img/portfolio4.png">
                            <p class="mt-2">Mobile Ui Design</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-sm-5">
                    <div class="col-4 col-sm-2 col-md-1 col-lg-1  col-xl-1  ">
                        <button type="button" class="btn btn-primary btn-lg text-uppercase">explore more</button>
                    </div>
                </div>
            </div>
            <div id="testimonial"></div>
        </section>
        <!-- EXPERIENCE SECTION -->
        <section class="experience-section">
            <div class="experience-shade">
                
                <div class="container p-3">
                    <div class="row text-center text-light">
                        <div class="col-sm-3">
                            <div class="counter">
                                <p class="count-text ">Happy Clients</p>
                                <h2 class="timer count-title count-number font-weight-bold" data-to="120" data-speed="1500"></h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="counter">
                                <p class="count-text ">Completed Projects</p>
                                <h2 class="timer count-title count-number font-weight-bold" data-to="220" data-speed="1500"></h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="counter">
                                <p class="count-text ">Tickets Closed</p>
                                <h2 class="timer count-title count-number font-weight-bold" data-to="140" data-speed="1500"></h2>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="counter">
                                <p class="count-text ">Speaker Conferences</p>
                                <h2 class="timer count-title count-number font-weight-bold" data-to="12" data-speed="1500"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-section">
        <div class="testimonial-section-header container text-center pt-5 pb-4">
            <h2 class="title font-weight-bold">What Clients Say About Me</h2>
            <p class="title-description font-weight-normal">Find reviews written by customer. Let’s Create Something new and awesome Togeather.</p>
        </div>
        <div class="testimonial parallax">
            <div class="testimonial-shade">
                <div class="container profile">
                    <div class="row justify-content-center">
                        <div class="col-sm-5 col-lg-4 card">
                            <div class="card-body text-center card-text">
                                <img class="img-fluid" src="img/profile-icon.png">
                                <p class="mt-3">“Excellent design and communication skill, fast turnaround revison. He improves on your work massively.”</p>
                                <p class="font-weight-bold mb-0">Mike Glen</p>
                                <p class="font-weight-lighter">Glen Associates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTER SECTION -->
    <section class="newsletter-section">
        <div class="home-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single">
                            <form method="post" action="">
                                <h2>Subscribe to our Newsletter</h2>
                                <div class="input-group">
                                    <input  type="email" class="form-control text-center" placeholder="Enter your email" name="userEmail" id="userEmail">
                                    <span class="input-group-btn">
                                        <input type="submit" name="send" class="btn btn-theme"
                                        value="Subscribe">
                                    </span>
                                </div>
                                
                <div id="statusMessage"> 
                    <?php
                    if (! empty($message)) {
                        ?>
                        <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                    <?php
                    }
                    ?>
                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- subscribe Modal -->
        <p class="text-muted text-center d-none">Wait! medium Modal will load in 1 seconds and large modal will load in 5 seconds.</p>
        <div class="modal fade text-center py-5"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document" style="margin-top: 5rem;">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="top-strip"></div>
                        <a href="#">
                            <img src="img/logo.png" alt="Logo Image">
                        </a>
                        <h3 class="pt-5 mb-0 text-secondary">Coming soon</h3>
                        <p class="pb-1 text-muted"><small>Sign up to update with our latest news and products.</small></p>
                        <form method="post" action="">
                            <div class="input-group mb-3 w-75 mx-auto">
                                <input type="email" class="form-control" placeholder="judeokoroafor@gmail.com" aria-label="Recipient's username" aria-describedby="button-addon2" name="userEmail" id="userEmail" required>
                                <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" name="send" value="Subscribe">
                                </div>
                            </div>
                        </form>
                        <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
                        <div class="bottom-strip"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="javascript/vendors/bootstrap.bundle.js"></script>
    <script src="javascript/script.js"></script>
</body>
</html>