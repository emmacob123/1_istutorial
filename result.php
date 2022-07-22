<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Result</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

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
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-gradient-primary flex-md-nowrap p-0 shadow">
  <a href="#"><img class="mb-4 p-2" src="assets/image/isemblem.png" alt=" " height="50"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-shadow w-50 rounded-3 border-1" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
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
              Home
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
        <h1 class="h2">My Results</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Print Certificate</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">view Results</button>
          </div>
        </div>
      </div>
      <h2></h2> 
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Course</th>
              <th scope="col">Credit</th>
              <th scope="col">Marks</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <td>Introduction to IT</td>
              <td>15</td>
              <td>77</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>Introduction on Database</td>
              <td>30</td>
              <td>85</td>
              <td>passed</td>
            </tr>
            <tr>
              <td>mysql</td>
              <td>8</td>
              <td>67</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>mysql server</td>
              <td>8</td>
              <td>71</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>HTML</td>
              <td>5</td>
              <td>95</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>CSS</td>
              <td>20</td>
              <td>90</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>API</td>
              <td>15</td>
              <td>40</td>
              <td>Failed</td>
            </tr>
            <tr>
              <td>React Native</td>
              <td>15</td>
              <td>88</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>Advanced JAVA</td>
              <td>25</td>
              <td>45</td>
              <td>Failed</td>
            </tr>
            <tr>
              <td>Mobile App Design</td>
              <td>20</td>
              <td>87</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>Learning Oracle</td>
              <td>5</td>
              <td>78</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>Data Processing</td>
              <td>10</td>
              <td>95</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>C++</td>
              <td>12</td>
              <td>65</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>Wordpress</td>
              <td>10</td>
              <td>88</td>
              <td>Passed</td>
            </tr>
            <tr>
              <td>Introduction to statitics</td>
              <td>15</td>
              <td>79</td>
              <td>Passed</td>
            </tr>
          </tbody>
        </table>
            </div>
      </div> 
    </main>
  </div>
</div>


    <script src="/assets/js/bootstrap.bundle.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
