<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="This is a prcing page...">
      <meta name="author" content="is team">
      <title>Register</title>
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
    <link href="form-validation.css" rel="stylesheet">
  </head>
<div class="container">
  <main class="form-signin w-100 m-auto">
    <div class="py-5 text-center">
    <a href="index.php"><img class="mb-4 p-2" src="assets/image/isemblem.png" alt=" " height="50"></a>
      <h2>Register</h2>
      <p class="lead">Register and get lot of excitements.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-6">
        
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <input type="FirstName" class="form-control" id="firstname" placeholder="Enter First Name">
            </div>
            <div class="col-12">
              <input type="LastName" class="form-control" id="lastname" placeholder="Enter Last Name">
            </div>
            <div class="col-12">
              <input type="PhoneNumber" class="form-control" id="floatingInput" placeholder="Enter Phone Number">
            </div>
            <div class="col-12">
              <input type="email" class="form-control" id="floatingInput" placeholder="Enter Email">
            </div>
            <div class="col-12">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Enter Password">
            </div>
            <div class="col-12">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
            </div>

            <div class="col-12">
              <input type="text" class="form-control" id="address" placeholder="Enter Residential Address" required>
              <div class="invalid-feedback">
                Please enter your address.
              </div>
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>Nigeria</option>
                <option>Ghana</option>
                <option>South Africa</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>FCT - Abuja</option>
                <option>Benue</option>
                <option>Borno</option>
                <option>Lagos</option>
                <option>Edo</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Register</button>
        <div class="form-floating">


          <a href="login.php"> Click here to sign in</a>

      </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 ISTutorial</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
