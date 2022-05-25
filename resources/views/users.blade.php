<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Test</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
       
        <span class="d-none d-lg-block" id="users">Users</span>
      </a>
     
    </div>

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        @csrf
        <input type="number" placeholder="Year" min="1900" max="2500" id="number_age" >
        
        <input type="text" name="query" placeholder="Search..." title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->




    
    <nav class="header-nav ms-auto">
      
        
      
        <ul class="d-flex align-items-center" id="items-box">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                 
                  <span class="d-none d-md-block dropdown-toggle ps-2">Language</span>
                </a><!-- End Profile Iamge Icon -->
      
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                  <li class="dropdown-header">
                   
                    <span>Language</span>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                      <i class="bi bi-person"></i>
                      <span>English</span>
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
      
      
      
      
      
      
                </ul><!-- End Profile Dropdown Items -->
             
    
    
    
    
    
    
    
    
    </li><!-- End Profile Nav -->
      
    <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
         
          <span class="d-none d-md-block dropdown-toggle ps-2">Reports</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
           
            <span>Reports</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>Report 1</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>






        </ul>
     
    </li>

<li class="nav-item dropdown pe-3">

    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
     
      <span class="d-none d-md-block dropdown-toggle ps-2">Project</span>
    </a><!-- End Profile Iamge Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
      <li class="dropdown-header">
       
        <span>Project</span>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Project 1</span>
        </a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>






    </ul><!-- End Profile Dropdown Items -->
 








</li>


        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-envelope-fill"></i>
              
             <i class="bi bi-circle-fill" id="fill"></i>
            </a><!-- End Notification Icon -->
  
            
          </li><!-- End Notification Nav -->


        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell-fill"></i>
            
            <i class="bi bi-circle-fill" id="fill"></i>
          </a><!-- End Notification Icon -->

          
        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-fill"></i>
            <span class="badge bg-success badge-number"></span>
          </a><!-- End Messages Icon -->

          
        </li><!-- End Messages Nav -->

        
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

 



<div class="sidebars-container">
  
    <div class="strip-sidebar">
<ul class="sidebar-nav-top" id="sidebar-nav">
    <li class="nav-item-new">  <i class="bi bi-search" ></i></li>
    <li class="nav-item-new">  <i class="bi bi-folder"></i></li>
    <li class="nav-item-new">  <i class="bi bi-person"></i></li>
    <li class="nav-item-new">  <i class="bi bi-chat"></i></li>
    <li class="nav-item-new">  <i class="bi bi-file"></i></li>
</ul>

<ul class="sidebar-nav-bottom" id="sidebar-nav">
    <li class="nav-item-new">  <i class="bi bi-tools"></i></li>
    <li><img class="tiny-image" src="" alt=""/></li>
   
    <li class="nav-item-new">  <i class="bi bi-list toggle-sidebar-btn"></i></li>
</ul>
  </div>

<!-- ======= Sidebar ======= -->
<div class="sidebar">
  <aside id="sidebar" >
   <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-speedometer"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Users</span>
        </a>
       
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-building"></i><span>Departments</span>
        </a>
        
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Employee</span>
        </a>
        
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-activity"></i><span>Activities</span>
        </a>
      
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar-event"></i><span>Events</span>
        </a>
       
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Payroll</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-person-rolodex"></i>
          <span>Account</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-flag"></i>
          <span>Report</span>
        </a>
      </li><!-- End Blank Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
</div>
</div>






  <main id="main" class="main">

    <hr>

    <section class="section dashboard">
      <div class="row">
       
        <div class="clearfix">
         
            <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add user</button>
          </div>
      
<div class="container">
<div class="row">

          
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
             
             
                <form class="row g-3">
                    <div class="col-md-12">
                     
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Employers ID*">
                    </div>
                    <div class="col-md-6">
                     
                      <input type="text" class="form-control" id="inputPassword4" placeholder="First Name*">
                    </div>
                    <div class="col-6">
                       <input type="text" class="form-control" id="inputAddress" placeholder="Last Name*" >
                    </div>
                    <div class="col-4">
                     
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Email ID*">
                    </div>
                    <div class="col-md-4">
                      
                      <input type="text" class="form-control" id="inputCity" placeholder="Phone number*">
                    </div>
                    
                    <div class="col-md-4">
                     
                        <select id="inputState" class="form-select">
                          <option selected>Select Role Type</option>
                          <option>Super Admin</option>
                          <option>Admin</option>
                          <option>Employee</option>
                          <option>HR Admin</option>
                        </select>
                      </div>
                    
                    <div class="col-md-4">
                      
                        <input type="text" class="form-control" id="inputCity" placeholder="Username*">
                      </div>

                      <div class="col-md-4">
                      
                        <input type="text" class="form-control" id="inputCity" placeholder="Password*">
                      </div>

                      <div class="col-md-4">
                      
                        <input type="text" class="form-control" id="inputCity" placeholder="Confirm Password*">
                      </div>

                   
                  




                      <div class="col-lg-12">
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">
              
                              <div class="card-body pb-0">
                               
              
                                <table class="table table-borderless">
                                  <thead>
                                    <tr class="row-setting">
                                      <th scope="col">Module Permission</th>
                                      <th scope="col">Read</th>
                                      <th scope="col">Write</th>
                                      <th scope="col">Delete</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row" id="modal-head">Super Admin</th>
                                      <td> 
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                         
                                        </td>
                                      <td>
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                         </td>
                                      <td class="fw-bold">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          
                                      </td>
                                      
                                    </tr>
                                  
                                    <tr>
                                        <th scope="row" id="modal-head">Admin</th>
                                        <td> 
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                           
                                          </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                           </td>
                                        <td class="fw-bold">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            
                                        </td>
                                        
                                      </tr>

                                      <tr>
                                        <th scope="row" id="modal-head">Employee</th>
                                        <td> 
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                           
                                          </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                           </td>
                                        <td class="fw-bold">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            
                                        </td>
                                        
                                      </tr>
                                      <tr>
                                        <th scope="row" id="modal-head">HR Admin</th>
                                        <td> 
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                           
                                          </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                           </td>
                                        <td class="fw-bold">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            
                                        </td>
                                        
                                      </tr>
                                  </tbody>
                                </table>
              
                              </div>
              
                            </div>
                          </div>
                    </div>







                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Add User</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                      
                    </div>
                   
                  </form>
            
            
            
            
            
            </div>
            
          </div>
        </div>
      </div>


</div>
</div> 
         








        

      </div>
      
        <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="col-12">
                <div class="card top-selling overflow-auto">
  
                  <div class="card-body pb-0">
                    <h5 class="card-title">List Users</span></h5>
  
                    <table class="table table-borderless">
                      <thead>
                        <tr class="row-setting">
                          <th scope="col">Name</th>
                          <th scope="col">Create Date</th>
                          <th scope="col">Role</th>
                          <th scope="col">Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                          <td>34ll</td>
                          <td>$64</td>
                          <td class="fw-bold">124</td>
                          
                        </tr>
                      
                       
                      </tbody>
                    </table>
  
                  </div>
  
                </div>
              </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
     <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>BingHR.io</span></strong>
    </div>
   
  </footer><!-- End Footer -->

 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>