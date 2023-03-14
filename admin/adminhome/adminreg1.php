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
    
    <title>REGISTRATION PAGE</title>
   
    
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-bs-toggle="modal" data-bs-target="#update" aria-expanded="false">
                                <img src="../img/admin.png" alt="user" class="profile-pic me-2"><?php echo $name?>
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
                                            <input type="password" id="myInput2" placeholder="" value="<?php echo $password;?>"
                                                class="form-control ps-0 form-control-line" name="password"  
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
								                   title="Must contain at least one number and one UPPERCASE 
								                   and lowercase letter, and at least 8 or more characters.">

								      <input type="checkbox" onclick="myFunction()">Show Password

									      <script>
									        function myFunction() {
									          var x = document.getElementById("myInput2");
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
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="adminhomee.php" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active"
                                href="adminreg1.php" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-plus"></i><span class="hide-menu">Register</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="viewresident.php" aria-expanded="false"><i class="mdi me-2 mdi-account-search"></i><span
                                    class="hide-menu">View Residents</span></a></li>
                       
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
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link "
                                 href="complain_list.php" ><i
                                    class="mdi me-2 mdi-view-list"></i><span class="hide-menu">Complaint List</span></a>
                        </li>
                        
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
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
            
            <div class="Container-fluid">
            	
            		 
           			<div class="container p-5 my-5 bg-white  border border-5 " >
           				<div> 
           					<h2 class="text-center">REGISTRATION FORM</h2>
           				</div> 
           				<div class="text-dark ">
           					<h3>PERSONAL DATA:</h3>
							<form action="process.php" method="POST" enctype="multipart/form-data">

							  	<div class="row container-fluid mt-3">
    								<div class="col-sm-4 p-3 text-dark" style="text-align:center;">
    									<img id="pp" src="../img/avatar.webp " width="60%">

	   										</br></br><label for="f"  ><u>SELECT PROFILE</u></label>
	   										<input type="file" name="doc_type" onchange="Loadpp()" id="f" style="visibility:hidden;" required accept=".png, .gif, .jpeg, .jpg, .webp, .jfif ">
	   									</div>
	   										
    										<div class="col-sm-4 p-3  text-dark">
    											
    											<div class="col">
    												<label>Name</label>
	        										<input type="text" class="form-control" placeholder="Enter name" name="name" required>

	      										</div> </p>
	      										<div class="col">
	      											<label>Email</label>
	        										<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
	        
	      										</div></p>
	      										<div class="col">
	      											<label>address</label>
	        										<input type="text" class="form-control" placeholder="Enter Address" name="address">
	        
	      										</div>
	      									</div>
    										<div class="col-sm-4 p-3  text-dark">
    											<div class="col">
    												<label>Phone number</label>
	        										<input type="text" class="form-control" placeholder="Enter Phone number" name="phonenumber">
	      										</div> </p>
	      										
	      										<div class="col">
	      											<label>Date of birth</label>
	        										<input type="Date" class="form-control" placeholder="Enter Date of birth" name="dob">
	      										</div> </p>
	      										<div class="col">
	      											<label>Birth of Place</label>
	        										<input type="text" class="form-control" placeholder="Enter Birth of Place" name="pob">
	      										</div>
	      									</div>
	      									<div class="col-sm-4 p-3  text-dark">
    											<div class="col">
    												<label>Civil Status</label>
	        										<input type="text" class="form-control" placeholder="Enter Civil Status" name="cilstatus">
	      										</div> </p>
	      										
	      										<div class="col">
	      											<label>Sex</label>
	        										<div class="form-check">
 														 <input type="radio" class="form-check-input" id="radio1" name="sex" value="" >Female
  														<label class="form-check-label" for="radio1"></label>
													</div>
													<div class="form-check">
  														<input type="radio" class="form-check-input" id="radio2" name="sex" value="">Male
  														<label class="form-check-label" for="radio2"></label>
													</div>
													
	      										</div>
	      									</div>
	      									<div class="col-sm-4 p-3  text-dark">
    											<div class="col">
    												<label>Citizenship</label>
	        										<input type="text" class="form-control" placeholder="Enter Citizenship" name="citizenship">
	      										</div> </p>
	      										
	      										<div class="col">
	      											<label>Spouse</label>
	        										<input type="text" class="form-control" placeholder="Enter Spouse" name="spouse"></p>
	        										<input type="text" class="form-control" placeholder="Enter Occupation" name="spouseoccup">
	      										</div> </p>
	      										
	      										
	      									
	      									</div>
	      									<div class="col-sm-4 p-3  text-dark">
    											
	      										
	      										<div class="col">
	      											<label>Name of children</label>
	        										<input type="text" class="form-control" placeholder="Enter Name of children" name="noc1"></p>
	        										<input type="text" class="form-control" placeholder="Enter Name of children" name="noc2"></p>
	        										<input type="text" class="form-control" placeholder="Enter Name of children" name="noc3">
	      										</div> </p>
	      										
	      										
	      									
	      									</div>

	      									<div class="col-sm-4 p-3  text-dark">
    											
	      										<div class="col">
    												<label>Father's Name</label>
	        										<input type="text" class="form-control" placeholder="Enter Father's Name" name="fathersname"></p>
	        										<input type="text" class="form-control" placeholder="Enter Occupation" name="fatheroccup">
	      										</div> 
	      										
	      										
	      										
	      									
	      									</div>
	      									<div class="col-sm-4 p-3  text-dark">
    											
	      										
	      									
	      										<div class="col">
    												<label>Mother's Name </label>
	        										<input type="text" class="form-control" placeholder="Enter Name Mother's Names" name="mothersname"></p>
	        										<input type="text" class="form-control" placeholder="Enter Occupation" name="mothersoccup">
	      										</div> 
	      										
	      									
	      									</div>
	      									<div class="col-sm-4 p-3  text-dark">
    											
	      										
	      									<div class="col">
	      											<label>Person to be contacted in case of emergency</label>
	        										<input type="text" class="form-control" placeholder="Enter Name of person to be contacted" name="guardian"></p>
	        										<input type="text" class="form-control" placeholder="Enter his/her address or Phone number" name="guardnum">
	      										</div> 
	      										
	      									
	      									</div>
	      									<hr></hr>
	      									<h3>EDUCATIONAL ATTAINMENT:</h3>
	      									<div class="col-sm-4 p-3  text-dark">
    											
	      										
	      										<div class="col">
	      											<label>Elementary</label>
	        										<input type="text" class="form-control" placeholder="Enter  Elementary" name="elementary"></p>
	        										<label>Year Graduated</label>
	        										<input type="text" class="form-control" placeholder="Enter Year Graduated" name="elementaryyg">
	      										</div> </p>

	      										<div class="col">
	      											<label>High School</label>
	        										<input type="text" class="form-control" placeholder="Enter highs School" name="highschool"></p>										      										
	        									</div> 
	        								</div>

	      									<div class="col-sm-4 p-3 text-dark">
	      										<div class="col">
	      											<label>Year Graduated</label>
	        										<input type="text" class="form-control" placeholder="Enter Year Graduated" name="highschoolyg"></p>
	        										<label>College</label>
	        										<input type="text" class="form-control" placeholder="Enter College" name="college">
	        										</p>
	      										</div> </p>
	      											
	        										
	      										<div class="col">
	      											<label>Year Graduated</label>
	        										<input type="text" class="form-control" placeholder="Enter Year Graduated" name="collegeyg">
	      										</div></p>
	      											

    									 </div>
    									 <div class="col-sm-4 p-3 text-dark">
	      										
	        										
	      										<div class="col">
      											<label>Degree Recieved</label>
	        										<input type="text" class="form-control" placeholder="Enter Degree Recieved" name="degreereceived">
	        										</p>
	        									</div></p>
	        									<div class="col">
	      											<label>Special skills</label>
	        										<input type="text" class="form-control" placeholder="Enter Special Skills" name="specialskills">
	        										</p>
	        									</div>

    									 </div><hr> </hr>
    									 <h3>Work Status:</h3>
    									 <div class="col-sm-4 p-3 text-dark">
	      										
	        										
	      										<div class="col">
      											<label for="sel1" class="form-label">Select one:</label>
    													<select class="form-select" id="sel1" name="workstatus" required>
    														<option></option>
      														<option>Unemployed</option>
      														<option>Employed</option>
      														<option>Farmer</option>
      														<option>Domestic helper</option>
    													</select>
	        									</div></p>
	        									<div class="col">
	      											<label>If not mentioned above please input in box</label>
	        										<input type="text" class="form-control" placeholder="Enter your Work " name="workspecify">
	        										</p>
	        									</div>

    									 </div>
    									 <hr></hr>
    									 <h3>Your accont is here:</h3>

    									 <div class="col">
    									 	<label>Email</label>
	        										<input type="email" class="form-control" placeholder="Enter Email" name="validid" required>
	        										</p>
    									 </div></p>
    									 <div class="col">
    									 	<label>Password</label>
	        								<input id="myInput" type="password" class="form-control" placeholder="Enter Password" name="password" required 
	        								pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
								               title="Must contain at least one number and one UPPERCASE 
								                 and lowercase letter, and at least 8 or more characters.">

								                 <input type="checkbox" onclick="myFunction()">Show Password

								      			
	        										</p>
    									 </div>
    									 <hr></hr>
    									 <div class="text-center d-grid ">
                    							<input type="submit" class="btn btn-info btn-block fa-lg text-white " value="REGISTRATION" name="reg">
                    						</p>
                    						
    
  								</div>	
	  						</form>
								  </div>
							</div>
						</div>
			
           
                
                
            								
    	
            
            
            <footer class="footer "> &copy; By Tugon Cite Students
            </footer>
           
        </div>

       
    </div>
    <!-- The Modal -->
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
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
    <!--------->
    <script>
    	var Loadpp = function(){
    		var output = document.getElementById('pp');
    		output.src = URL.createObjectURL(event.target.files[0]);
    	};
    </script>
</body>

</html>