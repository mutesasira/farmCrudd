<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>farmCrud Application</title>
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--}}
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>--}}


</head>
<body>
  <div class="container">

    
  <div class="d-flex" id="wrapper">

      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper"  >
        <div class="sidebar-heading"><b>MyFarm </b></div>
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action bg-light">Animals</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Crops</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Financial Mgt</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">About Us</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Contact Us</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
  
      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class = "navbarr">
          <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-success" id="menu-toggle">Expand Menu</button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About the Developers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                </ul>

                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something here</a>
                      </div>
                    </li>
                  </ul>
              </div>
    
          </nav>
        </div>
  
        <div class="container-fluid">
      
            @yield('form')
      
            <div class="content">
              </div>
                  <footer id="myFooter">
                      <div class="container">
                          <div class="row">
                              <div class="col-sm-3">
                                  <h2 class="logo"><a href="#"> LOGO </a></h2>
                              </div>
                              <div class="col-sm-2">
                                  <h5>Headind 1</h5>
                                  <ul>
                                      <li><a href="#">item 1</a></li>
                                      <li><a href="#">item 2</a></li>
                                      <li><a href="#">item 3</a></li>
                                  </ul>
                              </div>
                              <div class="col-sm-2">
                                  <h5>Item 2</h5>
                                  <ul>
                                      <li><a href="#">item 1</a></li>
                                      <li><a href="#">item 2</a></li>
                                      <li><a href="#">item 3</a></li>
                                  </ul>
                              </div>
                              <div class="col-sm-2">
                                  <h5>Heading 3</h5>
                                  <ul>
                                      <li><a href="#">item 1</a></li>
                                      <li><a href="#">item 2</a></li>
                                      <li><a href="#">item 3</a></li>
                                  </ul>
                              </div>
                              <div class="col-sm-3">
                                  <div class="social-networks">
                                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                      <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="footer-copyright">
                          <p>© 2017 Copyright Myfarm </p>
                      </div>
                  </footer>
          </div>
        </div>
        
  
        </div>
      </div>
      <!-- /#page-content-wrapper -->
  
    </div>
    <!-- /#wrapper -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  
  
 
    
</body>
</html>