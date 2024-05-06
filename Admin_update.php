<?php

session_start();
   include("config.php");

   $idd= $_GET['Id'];
   $query="SELECT * FROM registerstudentbyadmin_db WHERE Serial_N0=$idd";
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
    <title>Student Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registerbyadmin.css">
</head>
<body>

   
  <section class="main-heading   text-danger" id="contactus">
       <div class="pl-5 pt-5">
       <a href="./admin_Index.php"> <button type="submit" name="back" class="btn btn-success">Back To Previous Page</button></a><br><br>
       </div>
       
    <div class="text-center text-danger">
        <h1 class="display-4 text-red">Student Registration Form</h1>
        <hr class="w-50 mx-auto" style="color:red"/>
      </div>
     

      <div class="container">
        <div class="row">
          <div class="col-xxl-8 col-10 col-md-8 mx-auto">
            <form action="#" method="post" autocomplete="off">
            <div class="mb-3 text-danger">
                <label for="exampleInputPassword1" class="form-label">Hostel Registeration Number</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="reg" value="<?php echo $res['Reg_no']; ?>">
              </div>
              <div class="mb-3 text-danger">
                <label for="exampleInputPassword1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="fullname" value="<?php echo $res['Full_Name']; ?>">
              </div>
              <div class="mb-3">
                <div class="form-group">
                  <label for="Seater">Seater</label>
                  <select class="form-Seaterl form-select" id="gender" name="Seater" required>
                      <option value="">Select Seater</option>


                      <option value="s3" name="Seater"
                       <?php  if($res['Seater']=='s3'){
                        echo "selected";
                       }
                       ?>
                      >Seater-2</option>
                      <option value="s4" name="Seater"
                      <?php  if($res['Seater']=='s4'){
                        echo "selected";
                       }
                       ?>
                      >Seater-4</option>
                      <option value="s6" name="Seater"
                      <?php  if($res['Seater']=='s6'){
                        echo "selected";
                       }
                       ?>
                      >Seater-6</option>
                  </select>
              </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Room Number</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Roomno" value="<?php echo $res['Room_Number']; ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off" value="<?php echo $res['Email']; ?>">
               
              </div>
               <div class="mb-3">
                <div class="form-group">
                  <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required value="<?php echo $res['Date']; ?>">
                   </div>
                <div class="mb-3">
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control form-select" id="gender"     name="gender" required>
                      <option value="gender">Select Gender</option>

                      <option value="male" name="gender"
                      <?php  if($res['Gender']=='male'){
                        echo "selected";
                       }
                       ?>
                      >Male</option>
                      <option value="female" name="gender"
                      <?php  if($res['Gender']=='female'){
                        echo "selected";
                       }
                       ?>>Female</option>
                      <option value="others" name="gender"
                      <?php  if($res['Gender']=='others'){
                        echo "selected";
                       }
                       ?>
                      
                      >Others</option>
                  </select>
              </div>
              </div>
             
                  <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="number" autocomplete="off" value="<?php echo $res['Contact_num']; ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Guardin Number</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Gnumber" value="<?php echo $res['Guardian_Num']; ?>">
              </div>
                
              
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Complete Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="address" autocomplete="off" value="<?php echo $res['Complete_Address']; ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Guardin Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Gaddress" autocomplete="off" value="<?php echo $res['Guardian_Address']; ?>">
              </div>
                 <button type="submit" name="update" class="btn btn-success">Update Student Details</button><br><br>
                 
              
      
            </form>
  
          </div>
         
          
        </div>
      </div>
      
  
  </section>
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php 


   
// Connect to MySQL database
// $error = "";
// $error2="";
// $idd=$_GET['Id'];
// $idd= $_GET['Id'];
if (array_key_exists("update", $_POST)) {
 
    // Database Link
   include('config.php');  

   //Taking HTML Form Data from User
   $regno = mysqli_real_escape_string($linkDB,$_POST['reg']);
   $name = mysqli_real_escape_string($linkDB,$_POST['fullname']);
   $seater = mysqli_real_escape_string($linkDB,$_POST['Seater']);
   $Room = mysqli_real_escape_string($linkDB,$_POST['Roomno']);
   $email = mysqli_real_escape_string($linkDB,$_POST['email']);
   
   $Date=date('Y-m-d',strtotime(mysqli_real_escape_string($linkDB,$_POST['date']))); 
   $gender = mysqli_real_escape_string($linkDB,$_POST['gender']);
  
  $Cmobile=mysqli_real_escape_string($linkDB,$_POST['number']);
  $Gmobile=mysqli_real_escape_string($linkDB,$_POST['Gnumber']);
  $CAddress=mysqli_real_escape_string($linkDB,$_POST['address']);
  $GAddress=mysqli_real_escape_string($linkDB,$_POST['Gaddress']);

       $query="UPDATE registerstudentbyadmin_db SET Reg_no='$regno',Full_Name='$name',Seater='$seater',Room_Number='$Room',Email='$email',Date='$Date',Gender='$gender',Contact_num='$Cmobile',Guardian_Num='$Gmobile',Complete_Address='CAddress',Guardian_Address='$GAddress' WHERE Serial_N0='$idd'";
         
        
        if (!mysqli_query($linkDB, $query)){
            $error ="<p>Could not Update Student - please try again.</p>";
            } 

        else{
          echo "<script>alert('Record Updated')</script>";
          ?>
           <meta http-equiv="refresh" content="0; url=http://localhost/RK%20Hostel%20Management/A_R_D.php" />
          <?php
        }
        
            
           
            
           }

       
   





?>

