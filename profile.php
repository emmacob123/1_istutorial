<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Profile</title>

    

    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

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
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

  <header class="navbar navbar-dark sticky-top bg-gradient-primary flex-md-nowrap p-0 shadow">
  <a href="#"><img class="mb-4 p-2" src="assets/image/isemblem.png" alt=" " height="50"></a>
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
        <h1 class="h2">Profile</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Preview</button>
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#editt" aria-controls="sidebarMenu" aria-expanded="false">Edit</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary">
            <span data-feather="calendar" class="align-text-bottom"></span>
            Print
          </button>
        </div>
      </div>
      
      <div class="student-profile py-5 my-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="assets/img/1_icon.jpg" alt="">
                  <h3 action="input">John Drake</h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Student ID:</strong> 321000001</p>
                  <p class="mb-0"><strong class="pr-1">Program:</strong> Expert</p>
                  <p class="mb-0"><strong class="pr-1">Email:</strong> @hotmail.com</p>
                  <p class="mb-0"><strong class="pr-1">D.O.B:</strong> 1880/10/01</p>
                  <p class="mb-0"><strong class="pr-1">Gender:</strong> M</p>
                  <p class="mb-0"><strong class="pr-1">Country:</strong> United State</p>
                </div>
              </div>
            </div>

            <div id="editt" class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Edit Information</h3>
                </div>
                <div class="card-body pt-0">
                    <div class="row gy-3">
                        <div class="col-md-6">
                          <label for="cc-name" class="form-label">First name</label>
                          <input type="text" class="form-control" id="cc-name" value="John" required>
                    </div>
                
                    <div class="col-md-6">
                          <label for="cc-number" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="cc-number" value=" Drake" required>
                    </div>

                    <div class="col-md-6">
                            <label for="cc-name" class="form-label">Email</label>
                            <input type="text" class="form-control" id="cc-name" value="John@hotmail.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="cc-name" value="+123" required>
                    </div>

                    <div class="col-md-5">
                      <label for="country" class="form-label">Country</label>
                      <select class="form-select" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
        
                    <div class="col-md-4">
                      <label for="state" class="form-label">State</label>
                      <select class="form-select" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
        
                    <div class="col-md-3">
                      <label for="zip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required>
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>
                   
                    <div class="my-3 px-3 d-flex justify-content-between">
                      <label for="Gender" class="form-label">Gender:</label>
                      <div class="form-check px-5">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Male</label>
                      </div>
                    <div class="form-check px-3">
                      <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="debit">Female</label>
                    </div>
                  </div>
                </div>

              <div class="d-flex">
                <div class="col-md-5">
                  <label for="country" class="form-label">Program</label>
                  <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>Free</option>
                    <option>Professional</option>
                    <option>Expert</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid course.
                  </div>
                </div>

                <div class="col-md-4 px-3">
                  <label for="state" class="form-label">Duration</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>2 Weeks</option>
                    <option>12 Weeks</option>
                    <option>24 Weeks</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a option.
                  </div>
                </div>
              </div>

              <button class="w-100 btn btn-primary btn-lg mt-4" type="submit">Submit</button>
      </div>
    </main>
  </div>
</div>


    <script src="assets/js/bootstrap.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
