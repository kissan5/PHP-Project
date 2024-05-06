<?php
   session_start();
// Connect to MySQL database
$error = "";
$error2="";
if (array_key_exists("add", $_POST)) {
 
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
    
   // PHP form validation PHP code
   if (!$regno) {
      $error .= "Register Number is required <br>";
     }
   if (!$name) {
     $error .= "Name is required <br>";
    }
    if (!$seater) {
      $error .= "Seater is required <br>";
     }
     if (!$Room) {
      $error .= "Room number is required <br>";
     }
   if (!$email) {
       $error .= "Email is required <br>";
    }
   if (!$Date) {
       $error .= "Date is required <br>";
    } 
   //  if (!$course) {
   //     $error .= "Please fill the course fields. <br>";
   //  }
    if (!$gender) {
        $error .= "Gender is required <br>";
     }
    
     if (!$Cmobile) {
        $error .= "Personal number is required <br>";
     }
     if (!$Gmobile) {
      $error .= "Guardian number is required <br>";
   }
     if (!$CAddress) {
        $error .= "Complete Address is required <br>";
     }
     if (!$GAddress) {
      $error .= "Guardina Address is required <br>";
   }

    if ($error) {
       $error = "<b>There were error(s) in your form!</b> <br>".$error;
    }  else {
      
       //Check if email is already exist in the Database

       $query = "SELECT Serial_N0 FROM registerstudentbyadmin_db WHERE Email = '$email'";
       $result = mysqli_query($linkDB, $query);
       if (mysqli_num_rows($result) > 0) {
           $error .="<p>Your email has taken already! and Add new email of students</p>";
       } else {

         // $as="INSERT INTO `registerstudentbyadmin_db`(`Serial_N0`, `Reg_no`, `Full_Name`, `Seater`, `Room_Number`, `Email`, `Date`, `Gender`, `Course`, `Contact_num`, `Guardian_Num`, `Complete_Address`, `Guardian_Address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')";


         
           $query = "INSERT INTO registerstudentbyadmin_db (Reg_no,Full_Name, Seater, Room_Number, Email, Date, Gender, Contact_num, Guardian_Num, Complete_Address, Guardian_Address) VALUES ('$regno','$name','$seater','$Room', '$email','$Date', '$gender','$Cmobile','$Gmobile','$CAddress','$GAddress')";
            
           if (!mysqli_query($linkDB, $query)){
               $error ="<p>Could not Add Student - please try again.</p>";
               } 
                 
               //Redirecting user to home page after successfully logged in 
               header("Location:./A_R_D.php");  
            
               }
            
           }

       }  
   


// for the  login system 

   ?>

