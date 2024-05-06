<?php include('./access.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Hostel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styleforloginpage.css">
  
</head>
<body>
  <section class="wrapper">
    <div class="container">
      <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text:center">
      <!-- ../Nav-bar/register.php -->
        <form action="#" class="rounded bg-white shadow p-5" method="post">
          <h2 class="text-dark fw-bolder fs-4 mb-2 ">Sign-in to RK Hostel </h2>
          <div class="fw-normal text-muted mb-4">
            New Here? <a href="./regforlogin.php" class="text-primary fw-bold text-decoration-none">Create an Account</a>
          </div>
          <div class="error text-danger"> <?php 
            if($error2) echo  $error2 ?> </div>
            <!-- To check the user loged In status -->
            <p>
              <?php
           if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
               echo "<p>Please first log in to proceed.</p>";
              }
             ?>
                   </p>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="mt-2 text-end">
            <a href="#" class="text-primary fw-bold text-decoration-none">Forget Password ?</a>
          </div>
          <!-- <label for="checkbox">Stay logged in</label>
       <input type="checkbox" name="stayLoggedIn" id="chechbox" value="1"> <br><br> -->

          <button type="submit" class="btn btn-primary submit_btn w-100 my-4" name="login">
            Log in
          </button>
    
        </form>

      </div>
    </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>