<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
    <link rel="icon" type="image" href="img/favicon1.avif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
    </style>
</head>
<body>
<section class="h-100 " style="Background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block " >
              <img src="img/sample.gif"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Create an Account</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <form action="userprocess1.php" method="POST" enctype="multipart/form-data">
                      
                    <div class="form-outline">
                       <label class="form-label" for="form3Example1m">Fullname</label>
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="fn" required />
                     
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                       <label class="form-label" for="form3Example1n">Email</label>
                      <input type="email" id="form3Example1n" class="form-control form-control-lg" name="email" required />
                     
                    </div>
                  </div>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Sex: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="femaleGender">Female</label>
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="Female" required />
                   
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male" required />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <label class="form-check-label" for="otherGender">Other</label>
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Other" />
                    
                  </div>

                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example8">Birthdate</label>
                  <input type="date" id="form3Example8" class="form-control form-control-lg" name="birthdate" required />
                </div>

                <div class="form-outline mb-4">
                   <label class="form-label" for="form3Example9">Address</label>
                  <input type="text" id="form3Example9" class="form-control form-control-lg" name="address" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example90">Contact number</label>
                  <input type="text" id="form3Example90" class="form-control form-control-lg" name="cn" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example99">Password</label>
                  <input type="password" id="myInput" class="form-control form-control-lg" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                   title="Must contain at least one number and one UPPERCASE 
                   and lowercase letter, and at least 8 or more characters." required />
                   <input type="checkbox" onclick="myFunction()">Show Password</br>
                 
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

                <div class="form-outline mb-4">
                 <input type="file" name="doc_file" class="form-control form-control-lg" required accept=".png, .gif, .jpeg, .jpg, .webp, .jfif " required>
                  <label class="form-label" for="form3Example97">Valid ID</label></br>

                   <input  type="checkbox" required>I accepted all <span href="#" style="color:purple; cursor:pointer" data-bs-toggle="modal" data-bs-target="#myModal">terms and conditions </span>
        
                </div>



                <div class="d-flex justify-content-end pt-3">
                  <p class="mb-2 " style="color: #393f81; float: left;   padding-right: 165px;" >Already have account? <a href="index.php"
                      style="color: #393f81; cursor: pointer;">Back to Login</a></p>

                      
                      
                  <input type="submit" class="btn btn-warning btn-lg ms-2" name="reg" value="REGISTER">
                </div>
                <p class="mb-2" style="color: #393f81; float: left; padding-right:10px;  ">&copy; By Tugon Cite Students</p>
              </div>
            </div>
          </div>

        </div>

        </form>
      </div>
    </div>
  </div>
</section>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">TERMS AND CONDITIONS</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <span> These terms and conditions here in after referred to as the 
      “agreement between TUGON: Emergency Assistance App service and 
      the user, sets out regulations, guidelines, restrictions, and 
      obligations of the user as well as the admin of this service.</span><br></br>

<p>By using our service, you agreed to accept all terms and conditions.</p>



<p>Must be a residents of  Iloilo City.</p>

<p>All information provided by the user will be kept confidential and secure. We will not disclose your any personal information to a third party</p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn " data-bs-dismiss="modal" style="background-color:
#26c6da;">Close</button>
      </div>

    </div>
  </div>
</body>
</html>