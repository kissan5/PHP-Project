<?php
   session_start();
// Connect to MySQL database
$error = "";
$error2="";
if (array_key_exists("submit", $_POST)) {
 
    // Database Link
   include('./config.php');  

   //Taking HTML Form Data from User
   $name = mysqli_real_escape_string($linkDB,$_POST['fullname']);
   $email = mysqli_real_escape_string($linkDB,$_POST['email']);
   $password = mysqli_real_escape_string($linkDB,$_POST['password']); 
   $repeatPassword = mysqli_real_escape_string($linkDB,$_POST['confirm_password']); 
   $gender = mysqli_real_escape_string($linkDB,$_POST['gender']);
  // $country=mysqli_real_escape_string($linkDB,$_POST['country']);
  $mobile=mysqli_real_escape_string($linkDB,$_POST['number']);
  $Address=mysqli_real_escape_string($linkDB,$_POST['address']);
    
   // PHP form validation PHP code
   if (!$name) {
     $error .= "Name is required <br>";
    }
   if (!$email) {
       $error .= "Email is required <br>";
    }
   if (!$password) {
       $error .= "Password is required <br>";
    } 
    if ($password !== $repeatPassword) {
       $error .= "Password does not match <br>";
    }
    if (!$gender) {
        $error .= "Gender is required <br>";
     }
    //  if (!$country) {
    //     $error .= "Country name is required <br>";
    //  }
     if (!$mobile) {
        $error .= "Contact number is required <br>";
     }
     if (!$Address) {
        $error .= "Address is required <br>";
     }
    if ($error) {
       $error = "<b>There were error(s) in your form!</b> <br>".$error;
    }  else {
      
       //Check if email is already exist in the Database

       $query = "SELECT S_Number FROM registration_data_db WHERE email = '$email'";
       $result = mysqli_query($linkDB, $query);
       if (mysqli_num_rows($result) > 0) {
           $error .="<p>Your email has taken already!</p>";
       } else {

           //Password encryption or Password Hashing
           $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        //    Full_Name	Email	Passwordown	Gender	country	Contact_no	Complete_Address	 
           $query = "INSERT INTO registration_data_db (Full_Name, Email, passwordown, Gender, Contact_no, Complete_Address) VALUES ('$name', '$email', '$hashedPassword','$gender','$mobile','$Address')";
            
           if (!mysqli_query($linkDB, $query)){
               $error ="<p>Could not sign you up - please try again.</p>";
               } else {

                   //session variables to keep user logged in
               $_SESSION['S_Number'] = mysqli_insert_id($linkDB);  
               $_SESSION['name'] = $name;

               //Setcookie function to keep user logged in for long time
               // if ($_POST['stayLoggedIn'] == '1') {
               // setcookie('S_Number', mysqli_insert_id($linkDB), time() + 60*60*365);
               // //echo "<p>The cookie id is :". $_COOKIE['id']."</P>";
               // }
                 
               //Redirecting user to home page after successfully logged in 
               header("Location:./index.php");  
            
               }
            
           }

       }  
   }


// for the  login system 

if (array_key_exists("login", $_POST)) {
     
   // Database Link
   include('./config.php'); 

     //Taking form Data From User
     $admin="admin543@gmail.com";
     $adminPass="admin@543";
     $email = mysqli_real_escape_string($linkDB, $_POST['email']);
     $password = mysqli_real_escape_string($linkDB,  $_POST['password']); 
     $_SESSION['e-mail']=$email;
      
     //Check if input Field are empty
     if (!$email) {
         $error2 .= "Email is required <br>";
      }
     if (!$password) {
         $error2 .= "Password is required <br>";
      } 
      if ($error2) {
         $error2 = "<b>There were error(s) in your form!</b><br>".$error2;
      }
       
     else {        
         //matching email and password

           $query = "SELECT * FROM registration_data_db WHERE Email='$email'";
           $result = mysqli_query($linkDB, $query);
           $row = mysqli_fetch_array($result);
        
           if (isset($row)) {
   
               if (password_verify($password, $row['Passwordown'])) {
                  //session variables to keep user logged in
                  $_SESSION['id'] = $row['id']; 
                  if($admin==$email && $adminPass==$password){
                     // if ($_POST['stayLoggedIn'] == '1') {
                     //    setcookie('id', $row['id'], time() + 60*60*24); //Logged in permanently //Logged in for long time untill user didn't log out
                     //    }
                      header("Location:admin_Index.php");
                  }
                  else
                  {
                     // if ($_POST['stayLoggedIn'] == '1') {
                     //    setcookie('id', $row['id'], time() + 60*60*24); //Logged in permanently //Logged in for long time untill user didn't log out
                     //    }
                        
                          header("Location:profile.php");



                  }

               } 
               else 
                   {
                   $error2 = "Combination of email/password does not match!";
                    }
  
           }  
           
           else {
               $error2 = "Combination of email/password does not match!";
                }
       }
}

  //PHP code to logout user from website
 
//   if (isset($_GET["logout"])) {
//    unset($_SESSION['id']);
//    setcookie("id", "", time() - 3600);
//    $_COOKIE['id'] = "";
//  } 

   ?>