<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Istutorial</title>

    

    <link href="assets/css/carousel.rtl.css" rel="stylesheet">

    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">IsTutorial</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#free2">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
   
      <div class="carousel-item active">
        <img src="assets/image/1_head.jpg" width="100%" height="105%">
        
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Welcome to IsTutorial</h1>
            <p>At IsTutorial we offer you the best programs for your coding knowledge.</p>
            <p><a class="btn btn-lg btn-primary" href="login.php">Sign up today</a></p>
            
          </div>
        </div>
      </div>

      <div class="carousel-item">
      <img src="assets/image/1_heads.jpg" width="100%" height="">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color: black;">Apply today to start now.</h1>
            <p style="color: black;">Whether you’re looking to begin your next step, change careers or build on a degree, there's an IsTutorial program to help get you there.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
      <img src="assets/image/1_head3.jpg" width="100%" height="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Find a career that's right for you.</h1>
            <p>Take our program preview to help narrow down your program search and find a suitable program you'll love.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div id="free2"class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img src="assets/image/1_fre.jpg" width="140" height="140" style="border-radius:50%;" >
        <h2 class="fw-normal">Free Program</h2>
        <p>It is good to give it a trial.....</p>
        <p><a class="btn btn-secondary" href="#free">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <img src="assets/image/1_pro.jpg" width="140" height="140" style="border-radius:50%;" >
        <h2 class="fw-normal">Professional Program</h2>
        <p>Get more advance experience.....</p>
        <p><a class="btn btn-secondary" href="#pro">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <img src="assets/image/1_expert.jpg" width="140" height="140" style="border-radius:50%;" >
        <h2 class="fw-normal">Expertise Program</h2>
        <p>The best is as no other.....</p>
        <p><a class="btn btn-secondary" href="#expert">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div id="free" class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Free Program. <span class="text-muted">Comes with limited courses.</span></h2>
        <p class="lead">
          Here you learn the basic that introduce to your new career</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="assets/image/1_fre.jpg" viewBox='0 0 16 16' width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div id="pro" class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Professional Program. <span class="text-muted">AdditionalCourses.</span></h2>
        <p class="lead">Here additional courses to better position you for your promising career. In this program 10 courese will be taken for a duration of 6 Months</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="assets/image/1_pro.jpg" viewBox='0 0 16 16' width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div id="expert" class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Expert Program. <span class="text-muted">Full package.</span></h2>
        <p class="lead">And yes, all courses to give you the absolute knowledge needed, job offers after completion.<br>In this program 15 courese will be taken for a duration of 8 Months.</p>
      </div>
      <div class="col-md-5">
      <img src="assets/image/1_expert.jpg" viewBox='0 0 16 16' width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="assets/js/bootstrap.js"></script>

      
  </body>
</html>
