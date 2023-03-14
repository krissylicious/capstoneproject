<?php 
include "conn.php";
session_start();
 
  if (empty($_SESSION)) {
  	?>
  	<script>
  		alert("Session Expired\nPlease Login again.");
  		window.location.href="../index.php";
  </script>
  <?php
  }else{

  $email =$_SESSION['email'];




  $getname = mysqli_query($conn, "SELECT * FROM officials WHERE email='$email'");
  while ($row=mysqli_fetch_object($getname)) {
  	

  	$fn = $row -> fn;
  	$ln = $row -> ln;
  	$cn = $row -> cn;
  	$address = $row -> address;
  	$position = $row -> position;
  	$password = $row -> password;

   $name = $fn.' '.$ln;


   
  }

 
  }
   
 ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ADMIN HOMEPAGE</title>
   
   
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon1.avif">
    
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
   
    
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark fixed-top bg-info">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="navbar-brand ms-4" href="adminhomee.php">
                        
                        <b class="logo-icon">
                            
                            <img src="../img/logo4.png" width="100%" class="dark-logo" />

                        </b>
                       
                        
                    </a>
                   
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
              
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                   
                    <ul class="navbar-nav me-auto mt-md-0 ">
                       

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                   
                    <ul class="navbar-nav">
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-bs-toggle="modal" data-bs-target="#update" href="#" role="button" aria-expanded="false">
                                <img src="../img/admin.png" alt="user" class="profile-pic me-2"><?php echo $name;?>
                            </a>
                           
                        </li>
                    </ul>
                </div>
            </nav>
            

        </header>
       
        <!-- admin profile-->
<div class="modal fade" id="update">
  <div class="modal-dialog">
    <div class="modal-content">

      
      <div class="modal-header">
        <h4 class="modal-title">PROFILE</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      
      <div class="modal-body">
         <div class="card">

         	<?php
                  			$getofficialsdetails = mysqli_query($conn, "SELECT * FROM officials WHERE email='$email' ");
								while ($show = mysqli_fetch_array($getofficialsdetails)){
 


								?>
         		 <div class="card-body">
                                <form class="form-horizontal form-material mx-2" action="process.php?id=<?php echo $show['id'];?>" method="POST">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">First Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $fn;?>"
                                                class="form-control ps-0 form-control-line" name="fn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $ln;?>"
                                                class="form-control ps-0 form-control-line" name="ln"
                                                id="example-email">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Email</label>
                                        <div class="col-md-12">
                                            <input type="emailc" placeholder="" value="<?php echo $email;?>"
                                                class="form-control ps-0 form-control-line" name="email">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12 mb-0">Contact Number</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $cn;?>"
                                                class="form-control ps-0 form-control-line" name="cn">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $address;?>"
                                                class="form-control ps-0 form-control-line" name="address" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Position</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $position;?>"
                                                class="form-control ps-0 form-control-line" name="position">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" id="myInput"s placeholder="" value="<?php echo $password;?>"
                                                class="form-control ps-0 form-control-line" name="password"  
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
								                   title="Must contain at least one number and one UPPERCASE 
								                   and lowercase letter, and at least 8 or more characters.">

								      <input type="checkbox" onclick="myFunction()">Show Password

									      <script>
									        function myFunction() {
									          var x = document.getElementById("myInput");
									          if (x.type === "password") {
									            x.type = "text";
									          } else {
									            x.type = "password";
									          }
									        }
									        </script>
                                        </div>
                                    </div>
                                    
                        </div>
         </div>
      </div>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
         <input type="submit" class="btn btn-success text-white " name="adminupdate" value="Update Profile">
      </div>
      	</form>

      	<?php
      }
      	?>
    </div>
  </div>
</div>
        <aside class="left-sidebar" data-sidebarbg="skin6">
           
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                                href="adminhomee.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adminreg1.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-plus"></i><span class="hide-menu">Register</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="viewresident.php" aria-expanded="false"><i class="mdi me-2 mdi-account-search"></i><span
                                    class="hide-menu">View Residents</span></a>
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="report_complain.php" aria-expanded="false"><i class="mdi me-2 mdi-chart-bar"></i><span
                                    class="hide-menu">Report/Complaint</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="analytics.php" aria-expanded="false"><i
                                    class="mdi me-2 mdi-chart-line"></i><span class="hide-menu">Analytics</span></a>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" data-bs-toggle="modal" data-bs-target="#myModal1"
                                 href="#" aria-expanded="false"><i
                                    class="mdi me-2 mdi-format-text"></i><span class="hide-menu">Complaint Title</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                 href="complain_list.php" ><i
                                    class="mdi me-2 mdi-view-list"></i><span class="hide-menu">Complaint List</span></a>
                        </li>
                        
                        
                    </ul>

                </nav>
               
            </div>
            
            <div class="sidebar-footer fixed-bottom">
                <div class="row">
                    <div class="col-4 link-wrap">
                       
                        <a href="" class="link" data-bs-toggle="modal" data-bs-target="#myModal"  data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                       
                        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                       
                        <a href="../logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        
       
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="adminhomee.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                </div>
            </div>
            
            <div class="container-fluid">
                
            	   
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div>
                                                <h3 class="card-title">Sales Overview</h3>
                                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                                            </div>
                                            <div class="ms-lg-auto mx-sm-auto mx-lg-0">
                                                <ul class="list-inline d-flex">
                                                    <li class="me-4">
                                                        <h6 class="text-success"><i
                                                                class="fa fa-circle font-10 me-2 "></i>Ample</h6>
                                                    </li>
                                                    <li>
                                                        <h6 class="text-info"><i
                                                                class="fa fa-circle font-10 me-2"></i>Pixel</h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="amp-pxl" style="height: 360px;">
                                            <div class="chartist-tooltip"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Our Visitors </h3>
                                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                                <div id="visitor"
                                    style="height: 290px; width: 100%; max-height: 290px; position: relative;"
                                    class="c3">
                                    <div class="c3-tooltip-container"
                                        style="position: absolute; pointer-events: none; display: none;">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr class="mt-0 mb-0">
                            </div>
                            <div class="card-body text-center ">
                                <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                                    <li class="me-4">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Mobile</h6>
                                    </li>
                                    <li class="me-4">
                                        <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Desktop</h6>
                                    </li>
                                    <li class="me-4">
                                        <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>Tablet</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="../assets/images/background/profile-bg.jpg"
                                alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="user"></div>
                                <h3 class="mb-0">Angela Dominic</h3>
                                <p>Web Designer &amp; Developer</p>
                                <a href="javascript:void(0)"
                                    class="mt-2 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                                <div class="row text-center mt-3">
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h3 class="mb-0 font-light">1099</h3><small>Articles</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h3 class="mb-0 font-light">23,469</h3><small>Followers</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mt-3">
                                        <h3 class="mb-0 font-light">6035</h3><small>Following</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body bg-info">
                                <h4 class="text-white card-title">My Contacts</h4>
                                <h6 class="card-subtitle text-white mb-0 op-5">Checkout my contacts here</h6>
                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button"
                                            class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button>
                                    </h2>
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <img src="../assets/images/users/1.jpg"
                                                    alt="user" class="img-circle"> <span
                                                    class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Pavan kumar</h5> <span
                                                    class="mail-desc">info@wrappixel.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <img src="../assets/images/users/2.jpg"
                                                    alt="user" class="img-circle"> <span
                                                    class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Sonu Nigam</h5> <span
                                                    class="mail-desc">pamela1987@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <span class="round">A</span> <span
                                                    class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Arijit Sinh</h5> <span
                                                    class="mail-desc">cruise1298.fiplip@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="user-img mb-0"> <img src="../assets/images/users/4.jpg"
                                                    alt="user" class="img-circle"> <span
                                                    class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5 class="mb-0">Pavan kumar</h5> <span
                                                    class="mail-desc">kat@gmail.com</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                        role="tab">Activity</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                        role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                        role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline border-start-0">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user"
                                                        class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5
                                                            minutes ago</span>
                                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img1.jpg" alt="user"
                                                                    class="img-responsive radius w-100"></div>
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img2.jpg" alt="user"
                                                                    class="img-responsive radius w-100"></div>
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img3.jpg" alt="user"
                                                                    class="img-responsive radius w-100"></div>
                                                            <div class="col-lg-3 col-md-6 mb-3"><img
                                                                    src="../assets/images/big/img4.jpg" alt="user"
                                                                    class="img-responsive radius w-100"></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)"
                                                                class="link me-2">2
                                                                comment</a> <a href="javascript:void(0)"
                                                                class="link me-2"><i
                                                                    class="fa fa-heart text-danger"></i> 5 Love</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user"
                                                        class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">John Doe</a> <span class="sl-date">5
                                                            minutes ago</span>
                                                        <div class="mt-3 row">
                                                            <div class="col-md-3 col-xs-12"><img
                                                                    src="../assets/images/big/img1.jpg" alt="user"
                                                                    class="img-responsive w-100 radius"></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Integer nec odio. Praesent libero. Sed cursus
                                                                    ante dapibus diam. </p> <a href="#"
                                                                    class="btn btn-success text-white"> Design
                                                                    weblayout</a>
                                                            </div>
                                                        </div>
                                                        <div class="like-comm mt-3"> <a href="javascript:void(0)"
                                                                class="link me-2">2 comment</a> <a
                                                                href="javascript:void(0)" class="link me-2"><i
                                                                    class="fa fa-heart text-danger"></i> 5 Love</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/3.jpg" alt="user"
                                                        class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5
                                                            minutes ago</span>
                                                        <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit. Integer nec odio. Praesent libero. Sed
                                                            cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                                                            elementum imperdiet. Duis sagittis ipsum. Praesent mauris.
                                                            Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm mt-3"> <a href="javascript:void(0)"
                                                            class="link me-2">2
                                                            comment</a> <a href="javascript:void(0)"
                                                            class="link me-2"><i class="fa fa-heart text-danger"></i>
                                                            5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user"
                                                        class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5
                                                            minutes ago</span>
                                                        <blockquote class="mt-2">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="mt-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                            porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled it to
                                            make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium mt-4">Skill Set</h4>
                                        <hr>
                                        <h5 class="d-flex mt-4">Wordpress <span class="ms-auto">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="d-flex mt-4">HTML 5 <span class="ms-auto">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="d-flex mt-4">jQuery <span class="ms-auto">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="d-flex mt-4">Photoshop <span class="ms-auto">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;">
                                                <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material mx-2">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe"
                                                        class="form-control form-control-line ps-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com"
                                                        class="form-control form-control-line ps-0" name="example-email"
                                                        id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password"
                                                        class="form-control form-control-line ps-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890"
                                                        class="form-control form-control-line ps-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5"
                                                        class="form-control form-control-line ps-0"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12 border-bottom">
                                                    <select class="form-select shadow-none border-0 form-control-line ps-0">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                
            </div>
                
           
            
            <footer class="footer"> &copy; By Tugon Cite Students
            </footer>
            
        </div>
        



    <!-- Create Complaint Modal -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create complain</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="process.php" Method="POST">
  
    	<input type="text" class="form-control"  placeholder="Enter your Complain Title" name="complain_name" required>
  
  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >close</button>
        <input type="submit" class="btn btn-primary" value="Create" name="complain_title">
      </form>
      </div>
  </div>
<!----End of modal----->

 



    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>

    

</body>

</html>