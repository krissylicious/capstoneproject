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




  $getname = mysqli_query($conn, "SELECT * FROM residents WHERE email='$email'");
  while ($row=mysqli_fetch_object($getname)) {
  	

  	$fn = $row -> fn;

  	





  }


}

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>USER HOMEPAGE</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/avif" sizes="16x16" href="img/favicon1.avif">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
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

        .ahover:hover{
            color: yellow;
            background-color: red;
        }


    </style>


    
</head>

<body>


    <!-- Main wrapper - -->
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <!-- Topbar header - style you can find in pages.scss -->

    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark fixed-top bg-info">
            <div class="navbar-header" data-logobg="skin6">

                <a class="navbar-brand ms-4" href="userhomepage.php">
                    <!-- Logo icon -->
                    <b class="logo-icon">

                        <img src="img/logo4.png" width="100%" class="dark-logo" />

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

                <!-- toggle and nav items -->

                <ul class="navbar-nav me-auto mt-md-0 ">

                    <!-- Search -->

                    <li class="nav-item search-box">
                        <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                            class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>


                    <!-- Right side toggle and nav items -->

                    <ul class="navbar-nav">

                        <!-- User profile and search -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"  aria-expanded="false">
                                <img src="img/admin.png" alt="user" class="profile-pic me-2"><?php echo $fn;?>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        
        
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" >
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" >
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="  sidebar-link waves-effect waves-dark sidebar-link "
                            href="userhomepage.php" aria-expanded="false" style=""><i class="mdi me-2 mdi-gauge"></i><span
                            class="hide-menu">Dashboard</span></a>
                        </li>

                        
                        <li class="sidebar-item"> <a onclick="getLocation()" id="demo" class="sidebar-link waves-effect waves-dark sidebar-link " 

                            href="#" aria-expanded="false"><i class="mdi me-2 mdi-comment-account" ></i><span
                            class="hide-menu" >Report</span></a> 

                        </li>




                        <script>
                            var x = document.getElementById("demo");

                            function getLocation() {
                              if (navigator.geolocation) {
                                navigator.geolocation.watchPosition(showPosition);
                            } 
                        }

                        function showPosition(position) {

                            window.location.href="userreport.php?lat=" + position.coords.latitude + "&&long=" + position.coords.longitude;
                        }
                    </script>      



                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" 

                        href="emergencybutton.php" aria-expanded="false"><i class="mdi me-2 mdi-checkbox-multiple-blank" ></i><span
                        class="hide-menu" >Emergency buttons</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="history.php" aria-expanded="false" ><i
                            class="mdi me-2 mdi-history" ></i><span class="hide-menu" >History</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" 
                                href="profile.php" aria-expanded="false"><i
                                class="mdi me-2 mdi-account-edit" ></i><span class="hide-menu" >Profile</span></a></li>


                            </ul>

                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                    <!-- End Sidebar scroll-->
                    <div class="sidebar-footer ">
                        <div class="row">
                            <div class="col-4 link-wrap">
                                <!-- item-->
                                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"> <i
                                    class="ti-settings"></i></a>
                                </div>
                                <div class="col-4 link-wrap">
                                    <!-- item-->
                                    <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                        class="mdi mdi-gmail"></i></a>
                                    </div>
                                    <div class="col-4 link-wrap">
                                        <!-- item-->
                                        <a href="../logout.php" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                            class="mdi mdi-power"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </aside>


                            <!-- Page wrapper  -->
                            <!-- Page wrapper  -->

                            <div class="page-wrapper">

                                <!-- Bread crumb and right sidebar toggle -->

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


                               <div class="Container-fluid " style="padding-right: 20px; padding-top: 20px; padding-left: 20px;">
                                <div class="row">
                                    <div class="col-lg-4 col-xlg-3 " >
                                        <div class="card  shadow  rounded">
                                            <div class="card-body bg-info">
                                                <h2 class="text-white card-title">ILOILO CITY EMERGENCY HOTLINES</h2>
                                                <h4 class="card-subtitle text-white mb-0 op-5">Checkout the list of agencies here</h4>
                                            </div>



                                            <div class="card-body">
                                                <div class="card" >
                                                    <div class="card-header"data-bs-toggle="modal" data-bs-target="#agencies1">
                                                        <a class="btn" >
                                                          <i> <img src="img/iloilo.png" width="50px" class="float-start rounded-3" /></i>
                                                          Accidents/Emergencies (Iloilo City Emergency Respondents)
                                                      </a>
                                                  </div>
                                                  <div class="modal fade" id="agencies1">
                                                    <div class="modal-dialog modal-xl ">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header" >
                                                                <h4 class="modal-title">ACCIDENT/EMERGENCY HOTLINES</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                             <img src="../img/1.1.png" width="100%"><p></p>
                                                             <img src="../img/1.2.png" width="100%">
                                                         </div>
                                                         <!-- Modal footer -->
                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" data-bs-toggle="modal" data-bs-target="#agencies2">
                                                <a class="btn">
                                                    <i  >  <img src="img/fire1.png" width="50px" class="float-start" /></i>
                                                    <span class="p-4">Fire Stations</span>
                                                </a>
                                            </div>
                                            <div class="modal fade" id="agencies2" >
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header" >
                                                            <h4 class="modal-title">FIRE STATION HOTLINES</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                         <img src="../img/FIRE STATION.png" width="100%"></p>
                                                         <img src="../img/FIRE STATION2.png" width="100%">
                                                     </div>
                                                     <!-- Modal footer -->
                                                     <div class="modal-footer" >
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header"data-bs-toggle="modal" data-bs-target="#agencies3">
                                            <a class="btn" >
                                                <i  >  <img src="img/police.png" width="50px" class="float-start" /></i>
                                                <span class="p-4">Police Stations</span>
                                            </a>
                                        </div>
                                        <div class="modal fade" id="agencies3">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header" >
                                                        <h4 class="modal-title">POLICE STATION HOTLINES</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <img src="../img/POLICE STATIONS.png" width="100%"></p>
                                                        <img src="../img/POLICE STATIONS (2).png" width="100%">
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header"data-bs-toggle="modal" data-bs-target="#agencies4">
                                            <a class="btn" >
                                                <i  >  <img src="img/hospital.png" width="50px" class="float-start" /></i>
                                                <span class="p-4" >Hospitals</span>
                                            </a>
                                        </div>
                                        <div class="modal fade" id="agencies4">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header" >
                                                        <h4 class="modal-title">HOSPITAL HOTLINES</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                     <img src="../img/HOSPITALS.png" width="100%"></p>
                                                     <img src="../img/HOSPITALS (2).png" width="100%">
                                                 </div>
                                                 <!-- Modal footer -->
                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xlg-9" >
                        <div class="container card-body border border-1 border-info shadow p-3 mb-5  rounded" style="background-color:white;   ">
                            <h2 class="text-center pb-4"> <img src="../img/alert.gif" width="100px" >Emergency Safety Tips and First Aid Information </h2><br>

                            <div class="row g-0" >
                                <div class="col-md-4"  >
                                   <center><img src="../img/safetytips.png" class="img-fluid rounded-circle" alt="..." style="height: 200px; width: 200px;  margins-left: 20px; margin-right: 20px;"></center> 
                               </div>
                               <div class="col-md-8"> 
                                  <div class="card-body ">
                                    <h5 class="card-title text-uppercased" style="font-size:20px;">SAFETY TIPS</h5>
                                    <p class="card-text" style="font-size:20px;">The information about emergency safety tips can be view here.</p>
                                    <a href="" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#safetytips1">Click me</a>
                                </div>
                            </div>
                        </div>
                        <p></p></br>

                        <div class="row g-0 "  style="padding-bottom: 30px;">
                            <div class="col-md-4" >
                               <center> <img src="../img/firstaid.png" class="img-fluid rounded-circle " alt="..." style="height: 200px; width: 200px;  margins-left: 20px; margin-right: 20px;"></center>
                           </div>
                           <div class="col-md-8">
                              <div class="card-body " >
                                <h5 class="card-title" style="font-size:20px;">First Aid Information</h5>
                                <p class="card-text" style="font-size:20px;">Read the first aid information here.</p>
                                <a href="" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#safetytips2">Click me</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal fade" id="safetytips1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header" >
                                <h4 class="modal-title">SAFETY TIPS</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-12 col-lg-4"><img src="../img/fire.tips.png" width="100%" height="600px" style="border:2px solid blue; "></div>
                                  <div class="col-md-12 col-lg-4"><img src="../img/floodinfo.gif" width="90%" height="600px" style="border:2px solid blue; margin-left: 20px;"></div>
                                  <div class="col-md-12 col-lg-4"><img src="../img/earthquakeinfo.gif" width="100%" height="600px" style="margin-right: 70px; margins-left:60px; border: 2px solid blue;"></div>
                              </div>

                          </div>
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="safetytips2">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header" >
                        <h4 class="modal-title" style="font-size:40px;">FIRST AID</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <img src="../img/2.gif" class="float-start " width="50%"  >
                        <img src="../img/1.gif" class="float-end " width="50%" >

                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        




    </div>


</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer "> &copy; By Tugon Cite Students
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>

<!-- The Modal -->

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">



      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">UPDATE ACCOUNT</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">

      <div class="card">
        <?php
        $getresidentsdetails = mysqli_query($conn, "SELECT * FROM residents WHERE email='$email' ");
        while ($show = mysqli_fetch_array($getresidentsdetails)){



            ?>
            <div class="card-body">
                <form class="form-horizontal form-material mx-2" action="userprocess.php?id=<?php echo $show['id'];?>" method="POST">
                    <div class="form-group">
                        <label class="col-md-12 mb-0">Full Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="" value="<?php echo $show['fn']?>"
                            class="form-control ps-0 form-control-line" name="fn">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="" value="<?php echo $show['email']?>"
                            class="form-control ps-0 form-control-line" name="email"
                            id="example-email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 mb-0">Phone No</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="" value="<?php echo $show['cn']?>"
                            class="form-control ps-0 form-control-line" name="cn">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 mb-0">Address</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="" value="<?php echo $show['address']?>"
                            class="form-control ps-0 form-control-line" name="address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 mb-0">Password</label>
                        <div class="col-md-12">
                            <input type="password" id="myInput1" placeholder="" value="<?php echo $show['password']?>"
                            class="form-control ps-0 form-control-line" name="password"  
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one UPPERCASE 
                            and lowercase letter, and at least 8 or more characters.">

                            <input type="checkbox" onclick="myFunction()">Show Password


                        </div>
                    </div>

                </div>
            </div>


            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="form-group">

                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal" >close </button></button>
                    <input type="submit" class="btn btn-success text-white " name="update" value="Update Profile">

                </div>
            </form>

            <?php
        }
        ?>
    </div>
</div>
</div>
</div>
<!----End of modal-----> 









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

<!--------->
<script>
   var Loadpp = function(){
      var output = document.getElementById('pp');
      output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<script>
   function myFunction() {
     var x = document.getElementById("myInput1");
     if (x.type === "password") {
       x.type = "text";
   } else {
       x.type = "password";
   }
}
</script>

<!--this is for table-->
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