<?php include "includes/header.php";?>

    <body>
        <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="assets/favicon.ico" width="30" height="30" alt="">
    </a>
        <h1 class="navbar-brand"><i>Charify</i></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#creators">Creators</a>
            </li>
            </ul>
        </div>
        <a href="donate.php" class="btn btn-primary btn-lg">Donate Now</a>
    </nav>


        </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto"><h1 class="mb-5">Charify</h1></div>
                    <div class="col-xl-9 mx-auto"><h3 class="mb-5">Ranking over 13,000 of Canada's Charities based on the Percentage of Revenue supporting their Mission</h3></div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    </div>
                </div>
            </div>
        </header>
        <!-- Image Showcases-->

        <section class="showcase" id="features">

            <div class="container-fluid p-0">

                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/71DByEqOlbL._AC_SL1500_.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Usability</h2>
                        <p class="lead mb-0">Search through 13,000 charities in Canada and see how much of your donation is actually used to support the charity's mission through a couple of clicks.</p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Content</h2>
                        <p class="lead mb-0">Contains all the important content for each charity that you would need to know about before choosing to donate: percentage of amount going to goods and services for the charity, website link, charity name, and more.</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light" id="creators">
            <div class="container">
                <h2 class="mb-5">Created By: </h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/IMG_20210331_233608.jpg" alt="..." />
                            <h5>Zefeng Wang</h5>
                            <p class="font-weight-light mb-0">Frontend + Backend</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/b9dc143762700bee689092a1c96edc98.jpg" alt="..." />
                            <h5>Luke Strickland</h5>
                            <p class="font-weight-light mb-0">Backend</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
