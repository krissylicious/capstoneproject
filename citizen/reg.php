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
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="fn" />
                      <label class="form-label" for="form3Example1m">Fullname</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" id="form3Example1n" class="form-control form-control-lg" name="email" />
                      <label class="form-label" for="form3Example1n">Email</label>
                    </div>
                  </div>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Sex: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="Female" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="form-outline mb-4">
                  <input type="date" id="form3Example8" class="form-control form-control-lg" name="birthdate" />
                  <label class="form-label" for="form3Example8">Birthdate</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example9" class="form-control form-control-lg" name="address" />
                  <label class="form-label" for="form3Example9">Address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" class="form-control form-control-lg" name="cn" />
                  <label class="form-label" for="form3Example90">Contact number</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example99" class="form-control form-control-lg" name="password" />
                  <label class="form-label" for="form3Example99">Password</label>
                </div>

                <div class="form-outline mb-4">
                 <input type="file" name="doc_file" class="form-control form-control-lg" required accept=".png, .gif, .jpeg, .jpg, .webp, .jfif ">
                  <label class="form-label" for="form3Example97">Valid ID</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  
                  <input type="submit" class="btn btn-warning btn-lg ms-2" name="reg" value="REGISTER">
                </div>

              </div>
            </div>
          </div>

        </div>

        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>