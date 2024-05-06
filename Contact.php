<?php
  $con=mysqli_connect('localhost','root');
  if($con){
    echo "Success";
  }
  else{
    echo "There is problem in the connection";
    
  }
  mysqli_select_db($con,'hostel_data');
  $user=$_POST['fullname'];
  $email=$_POST['email'];
  $number=$_POST['number'];
  $address=$_POST['address'];
  $comments=$_POST['comments'];
  $query="INSERT INTO contact_us_data(Full_Name,	email,	mobile_num,	Address1,	Comments	
  ) values ('$user','$email','$number','$address','$comments')";
  echo "$query";
  mysqli_query($con,$query);
  header('location:index.php');
  

?>