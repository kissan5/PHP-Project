<?php
  include './config.php';
  $idd=$_GET['Id'];
  $query="DELETE FROM registerstudentbyadmin_db WHERE Serial_N0='$idd'";
  $data=mysqli_query($linkDB,$query);
  if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url=http://localhost/RK%20Hostel%20Management/A_R_D.php" />
      
   <?php
  }
  else{
    echo "<script>alert('Record NOt Deleted')</script>";
   
  }

?>