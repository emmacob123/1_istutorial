<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>

    
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

    
        .table-row{
            cursor:pointer;
        }
      </style>
  
      
      <!-- Custom styles for this template -->
      <link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Admin Manager</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="#">Sign out</a>
          </div>
        </div>
      </header>
      

      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <img class="profile_img" src="assets/img/1_icon.jpg" alt="" width="30" height="30">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Admin
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Users
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3   border-bottom">
          <h1 class="h3">Admin</h1>
        </div>

        <h2>Users</h2>
        <div class="table-responsive">
            <div class="container">
                <table class='table table-bordered table-condensed table-striped table-hover'>
                <tr><th>Name</th><th>Email</th><th>Country</th> <th>Last Seen</th><th>Users Status</th></tr>
                 <tr class="table-row"data-href="#">
                  <td>Jhohn</td>
                  <td>jhone@gmail.com</td>
                  <td>USA</td>
                  <td>00:00</td>
                  <td class="btn btn bg-success m-1" data-bs-dismiss="alert">online</td>
                  <td class="btn btn bg-danger m-1" data-bs-dismiss="alert">Offline</td>
                </tr>

                 <tr class="table-row" data-href="#">
                  <td>Kelly</td>
                  <td>kelly@gmail.com</td>
                  <td>USA</td>
                  <td>00:00</td>
                  <td class="btn btn bg-success m-1" data-bs-dismiss="alert">online</td>
                  <td class="btn btn bg-danger m-1" data-bs-dismiss="alert">Offline</td>
                </tr>

                <tr class="table-row" data-href="#">
                  <td>Kamana</td>
                  <td>kamna@gmail.com</td>
                  <td>India</td>
                  <td>00:00</td>
                  <td class="btn btn bg-success m-1" data-bs-dismiss="alert">online</td>
                  <td class="btn btn bg-danger m-1" data-bs-dismiss="alert">Offline</td>
                </tr>

                <tr class="table-row" data-href="#">
                  <td>Anay</td>
                  <td>anay@gmail.com</td>
                  <td>Canada</td>
                  <td>00:00</td>
                  <td class="btn btn bg-success m-1" data-bs-dismiss="alert">online</td>
                  <td class="btn btn bg-danger m-1" data-bs-dismiss="alert">Offline</td>
                </tr>

                 </table>
                </div>
      </main>
    

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>