<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN FORM</title>
    <link rel="icon" type="image" href="img/favicon1.avif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    
.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo.png"
                    style="width:255px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">TUGON (Emergency Assistance)</h4>

                <?php   
                include "conn.php";
                session_start();



                //This is for login

                if(isset($_POST['Login'])){
                   
                  $email=$_POST['email'];
                  $password=$_POST['pass'];

                  $Login=mysqli_query($conn, "SELECT * FROM officials WHERE email='$email' AND password='$password' ");

                  $n=mysqli_num_rows($Login);

                  if($n >= 1){
                    $_SESSION['email']=$email;
                   /* include '../citizen/userhomepage/phpSMS.php';
                    sendSMS('+639168733698',rand(100000,999999)); */
                    ?>
                    <script>
                      alert("Your account is accepted!");
                      window.location.href="adminhome/adminhomee.php";
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




                </div>

                <form action="index.php" method="POST">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email"  class="form-control" name="email"
                      placeholder="Email address" required/>
                    <label class="form-label" for="form2Example11">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input id="myInput" type="password"   name="pass" class="form-control" placeholder="Enter your passsword"  required
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                   title="Must contain at least one number and one UPPERCASE 
                   and lowercase letter, and at least 8 or more characters.">
                    <label class="form-label" for="form2Example22" >Password</label>
                    </br>
                   <input type="checkbox" onclick="myFunction()">Show Password

                  </div>
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
                  
               

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" class="btn btn-primary btn-block fa-lg bg-info " value="Login" name="Login">
                    </p>
                    </form>
                    <a class="btn" data-bs-toggle="modal" data-bs-target="#myModal" cursor="pointer">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">&copy; By Tugon Cite Students</p>
                    
                    
                  </div>

                

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center bg-info p-0 ">
              <div class=" img-responsive">
                <img  src="img/sample.gif" style="width:537px; height: 740px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Forget Password Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="index.php" method="POST">
        <label>Email/Phone Number</label>
        <input type="text" class="form-control mt-3" placeholder="Enter your email" required> </br>
        
        <input type="submit" class="btn btn-primary btn-block fa-lg bg-info text-start" value="Submit" name="submit">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>