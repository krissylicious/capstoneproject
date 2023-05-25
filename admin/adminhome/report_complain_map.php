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
    
    <title>COMPLAIN LIST</title>
   
    
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon1.avif">
   
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
<!-- Make sure you put this AFTER Leaflet's CSS -->
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
         integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
         crossorigin=""></script>   
    
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    
    <link href="css/style.min.css" rel="stylesheet">

    <style>


        .results tr[visible='false'],
        .no-result{
        display:none;
        }

        .results tr[visible='true']{
        display:table-row;
        }

        .counter{
        padding:8px; 
        color:#ccc;
        }

        #map {
        height: 600px;  
        width: 100%; 
       }

    </style>
    
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-bs-toggle="modal" data-bs-target="#update" aria-expanded="false">
                                <img src="../img/admin.png" alt="user" class="profile-pic me-2"><?php echo $name?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adminhomee.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                href="adminreg1.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-plus"></i><span class="hide-menu">Register</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                href="viewresident.php" aria-expanded="false"><i class="mdi me-2 mdi-account-search"></i><span
                                    class="hide-menu">View Residents</span></a></li>
                                
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                                href="report_complain.php" aria-expanded="false"><i class="mdi me-2 mdi-chart-bar"></i><span
                                    class="hide-menu">Report/Complaint</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Major_emergency.php" aria-expanded="false"><i class="mdi me-2 mdi-chart-bar"></i><span
                                    class="hide-menu">Major Emergency</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" data-bs-toggle="modal" data-bs-target="#myModal1"
                                href="#" aria-expanded="false"><i
                                    class="mdi me-2 mdi-format-text"></i><span class="hide-menu">Complaint Title</span></a>
                        </li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                 href="complain_list.php" ><i
                                    class="mdi me-2 mdi-view-list"></i><span class="hide-menu">Complaint List</span></a>
                        </li>
                        
                        
                    </ul>

                </nav>
               
            </div>
            
            <div class="sidebar-footer ">
                <div class="row">
                    <div class="col-4 link-wrap">
                      
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                       
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
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
                                                        <li class="breadcrumb-item"><a href="indexhomee.php">Home</a></li>
                                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
            
            <?php

            $id = $_GET['id'];
            $complaint = mysqli_query($conn, "SELECT * FROM resident_complain WHERE id='$id'");
            $get= mysqli_fetch_object($complaint);
            ?>
                <div class="Container-fluid">
                 
                    <div class="container p-5 my-5 bg-white  border border-5 table-responsive-sm" >
                        <a class="btn btn-secondary" href="report_complain.php" style="float: right">X</a>
                            <span class="counter pull-right"><h2 style="color: #26c6da;">MAP</h2></span>
                    <div id="map"></div>
                    <script>
                        // Initialize and add the map
                    function initMap() {
                      
                      var uluru = {lat:<?php  echo $get->mylat ?>, lng: <?php echo $get->mylong?>};
                      
                      // The map, centered at Uluru
                      var map = new google.maps.Map(
                          document.getElementById('map'), {zoom: 18, center: uluru});
                      // The marker, positioned at Uluru
                      var marker = new google.maps.Marker({position: uluru, map: map});
                    }  
                    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAecRZLycBCluzGK0USG2NK6ncrdoCYFek&callback=initMap">
    </script>

    <!--<?= $get->mylat."<br>".$get->mylong ?>-->
                        </div>
                    </div>




                                     
                    
                
            
            <footer class="footer "> &copy; By Tugon Cite Students
            </footer>
            
        </div>

       
    </div>

   


    <!-- Create of Complaint -->
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
        <input type="submit" class="btn btn-info text-white" value="Create" name="complain_title" style="background-color:#26c6da">
      </form>
      </div>
  </div>
<!----End of modal----->


   
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
   
    <script src="js/waves.js"></script>
    
    <script src="js/sidebarmenu.js"></script>
    
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="js/custom.js"></script>

    <!----image----->
    <script>
        var Loadpp = function(){
            var output = document.getElementById('pp');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
 

 
    <script>
        $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
          });
});</script>

</body>



</html>