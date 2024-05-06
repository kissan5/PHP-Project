<?php
   session_start();
// Connect to MySQL database
$error = "";
$error2="";
if (array_key_exists("add", $_POST)) {
 
    // Database Link
   include('config.php');  

   //Taking HTML Form Data from User
   
   $name = mysqli_real_escape_string($linkDB,$_POST['fullname']);
   $seater = mysqli_real_escape_string($linkDB,$_POST['Seater']);
  $email = mysqli_real_escape_string($linkDB,$_POST['email']);
   $Date=date('Y-m-d',strtotime(mysqli_real_escape_string($linkDB,$_POST['date']))); 
   $gender = mysqli_real_escape_string($linkDB,$_POST['gender']);
  $Cmobile=mysqli_real_escape_string($linkDB,$_POST['number']);
  $CAddress=mysqli_real_escape_string($linkDB,$_POST['address']);

    
   // PHP form validation PHP code
   
   if (!$name) {
     $error .= "Name is required <br>";
    }
    if (!$seater) {
      $error .= "Seater is required <br>";
     }
     
   if (!$email) {
       $error .= "Email is required <br>";
    }
   if (!$Date) {
       $error .= "Date is required <br>";
    } 
   
    if (!$gender) {
        $error .= "Gender is required <br>";
     }
    
     if (!$Cmobile) {
        $error .= "Personal number is required <br>";
     }
    
     if (!$CAddress) {
        $error .= "Complete Address is required <br>";
     }
    

    if ($error) {
       $error = "<b>There were error(s) in your form!</b> <br>".$error;
    }  else {
      
       //Check if email is already exist in the Database

       $query = "SELECT Id FROM hostel_booking WHERE email= '$email'";
       $result = mysqli_query($linkDB, $query);
       if (mysqli_num_rows($result) > 0) {
           $error .="<p>Your email has taken already! and Add new email of students</p>";
       } else {
        // Id	Fullname	Seater	email	Date	Contact_Num	Complete_Address	

           $query = "INSERT INTO hostel_booking (Fullname, Seater, email, Date,Contact_Num, Complete_Address,Gender) VALUES ('$name','$seater','$email','$Date','$Cmobile','$CAddress','$gender')";
            
           if (!mysqli_query($linkDB, $query)){
               $error ="<p>Could not Add Student - please try again.</p>";
               } 
                 
               //Redirecting user to home page after successfully logged in 
               header("Location:./profile.php");  
            
               }
            
           }

       }  
   


// for the  login system 

   ?>

