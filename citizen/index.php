<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Page</title>
    <link rel="icon" type="image" href="img/favicon1.avif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
 <section class="vh-100" style="background-color: #eee">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/sample.gif"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                 
                 <?php   
                include "conn.php";
                session_start();



                //This is for login

                if(isset($_POST['Login'])){
                   
                  $email =$_POST['email'];
                  $password=$_POST['password'];

                  $Login=mysqli_query($conn, "SELECT * FROM residents WHERE email='$email' AND password='$password' ");

                  $n=mysqli_num_rows($Login);

                  if($n >= 1){
                    $_SESSION['email']=$email;
                    
                    ?>
                    
                    <script>
                      alert("Your account is accepted!");
                      window.location.href="userhomepage/userhomepage.php";
                      </script>
                      <?php

                  }else{
                    ?>
                      <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Error!</strong> Your email or password didn't match in our database, Please try again!
                    </div>
                    <?php
                  }
                }
    
                
                ?>
                <form action="index.php" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <img src="img/logo.png" style="width:130px;" alt="logo">
                    <span class="fw-bold">TUGON (Emergency Assistance)</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>


                 

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" name="email" class="form-control form-control-lg " required >
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="login" name="password" class="form-control form-control-lg" required 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                   title="Must contain at least one number and one UPPERCASE 
                   and lowercase letter, and at least 8 or more characters.">

                    <label class="form-label" for="form2Example27">Password</label></br>
                    <input type="checkbox" onclick="myFunction()">Show Password
                  </div>

                  <script>
                  function myFunction() {
                    var x = document.getElementById("login");
                    if (x.type === "password") {
                      x.type = "text";
                    } else {
                      x.type = "password";
                    }
                  }
                  </script>

                  <div class="pt-1 mb-4 d-grid">
                    <input type="submit" class="btn btn-dark btn-lg btn-block" type="button" name="Login" value="LOGIN">
                  </div>
                  <a href="" data-bs-toggle="modal" data-bs-target="#myModal" cursor="pointer" style="color: #393f81;">Forgot password?</a>
                  <p class="mb-2" style="color: #393f81;">Don't have an account? <a href="reg.php"
                      style="color: #393f81;">Register here</a></p>
                  <p class="mb-0">&copy; By Tugon Cite Students</p>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <!-- Modal forgot password -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <!-- Modal Header forgot password -->
      <div class="modal-header">
        <h4 class="modal-title">Forget Password Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body  -->
      <div class="modal-body">
        <form action="index.php" method="POST">
          <label>Email/Phone Number</label>
          <input type="text" class="form-control mt-3" placeholder="Enter your email/phone number" required> </br>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
      <input type="submit" class="btn btn-infos btn-block fa-lg bg-info text-start" value="Submit" name="submit">
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>