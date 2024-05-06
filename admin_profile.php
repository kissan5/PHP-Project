<?php

session_start();
   include("config.php");

   $idd= 8;
   $query="SELECT * FROM registration_data_db WHERE S_Number=$idd";
   $data=mysqli_query($linkDB,$query);
   $total=mysqli_num_rows($data);
  //  $result=mysqli_fetch_assoc($data);
   $res=mysqli_fetch_array($data);




   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Admin Profile</title>
    <link rel="stylesheet" href="./css/styleforindex.css">
</head>
<body>
      <section>
      <div class="pl-5 pt-5">
       <a href="./admin_Index.php"> <button type="submit" name="back" class="btn btn-success">Back To Previous Page</button></a><br><br>
       </div>
      </section>
<section class="main-heading my-3 pt-3" id="contactus">
    
  <div class="text-center">
      <h1 class="display-4 text-danger">Profile Information</h1>
      <hr class="w-25 mx-auto" style="color:red"/>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 col-10 col-md-8 mx-auto">
          <form action="./Contact.php" method="post">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="fullname" value="<?php echo $res['Full_Name']; ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $res['Email']; ?>">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Gender</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="<?php echo $res['Gender']; ?>">
             
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contact Number</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="number" value="<?php echo $res['Contact_no']; ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Complete Address</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="<?php echo $res['Complete_Address']; ?>">
            </div>
            
            
            
          </form>

        </div>
      </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>