<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

<link href="assets/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>


<header class="navbar navbar-dark sticky-top bg-gradient-primary flex-md-nowrap p-0 shadow">
<a href="index.php"><img class="mb-4 p-2" src="assets/image/isemblem.png" alt=" " height="50"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-shadow w-50 rounded-3 border-1" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap bg-primary">
      <a class="nav-link px-3" href="login.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>

          <li class="nav-item dropdown dropend">
            <a class="nav-link dropdown-toggle" href="dashboard.php" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">
              <span data-feather="file" class="align-text-bottom"></span>
              Programme Enroll
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="free_course.php">Free </a></li>
            <li><a class="dropdown-item" href="pro_course.php">Pro</a></li>
            <li><a class="dropdown-item" href="enterprise_course.php">Enterprise</a></li>
    </ul>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="payment.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Payment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="result.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pricing.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Pricing
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Help
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Payment</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>
    
<div class="container">
  <main>
    <div class="py-5 text-center">
    <a href="index.php"><img class="mb-2 " src="assets/image/isemblem.png" alt=" " height="50"></a>
    <h2> ISTutorial</h2>
      <!--<p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>-->
    </div>



    <!-- Your cart section -->
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">2</span>
        </h4>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Free</h6>
              <small class="text-muted">2 courses</small>
            </div>
            <span class="text-muted">&#x20A6 0</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Professional Package</h6>
              <small class="text-muted">10 courses</small>
            </div>
            <span class="text-muted">&#x20A6 100,000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Expertise Package</h6>
              <small class="text-muted">15 courses</small>
            </div>
            <span class="text-muted">&#x20A6 500,000</span>
          
          </li>
          <li class="list-group-item d-flex justify-content-between">
          <small class="text-muted">Bank charges not included</small>
          </li>
        </ul>
        </form>
      </div>
  
      <hr class="my-4">

      <!-- Payment section -->

      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
        <h4 class="mb-3">Payment</h4>
      <div class="my-3">
        <div class="form-check">
          <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
          <label class="form-check-label" for="credit">Credit card</label>
        </div>
        <div class="form-check">
          <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
          <label class="form-check-label" for="debit">Debit card</label>
        </div>
        <div class="form-check">
          <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
          <label class="form-check-label" for="paypal">PayPal</label>
        </div>
      </div>

      <div class="row gy-3">
        <div class="col-md-6">
          <label for="cc-name" class="form-label">Name on card</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" required>
          <small class="text-muted">Full name as displayed on card</small>
          <div class="invalid-feedback">
            Name on card is required
          </div>
        </div>

        <div class="col-md-6">
          <label for="cc-number" class="form-label">Credit card number</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" required>
          <div class="invalid-feedback">
            Credit card number is required
          </div>
        </div>

        <div class="col-md-3">
          <label for="cc-expiration" class="form-label">Expiration</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>

        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">CVV</label>
          <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
      </div>

      <hr class="my-4">

      <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
          
        </form>
      </div>
    </div>
  </main>


      <!-- Foot section -->
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Istutorial</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

<script src="assets/js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>