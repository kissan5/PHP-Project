<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.14/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/Style_A_R_D.css">
<title>Student Data</title>
</head>
<body>
    
    <div class="container p-30">
        <h1 class="text-center text-primary">List Of Hostel Student Registered</h1>
        <div class="row">
            <div class="col-md-12 main-datatable">
                <div class="card_body">
                    <div class="row d-flex">
                        <div class="col-sm-4 createSegment"> 
                         <a class="btn dim_button create_new" href="./registerpagebyAdmin.php"> <span class="glyphicon glyphicon-plus"></span> Add New</a>
                        </div>
                        <div class="col-sm-8 add_flex">
                            <div class="form-group searchInput">
                                <label for="email">Search:</label>
                                <input type="search" class="form-control" id="filterbox" placeholder=" ">
                            </div>
                        </div> 
                    </div>
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    
                                    <th >Id</th>
                                    <th class="w-5">Reg-No</th>
                                    <th >Full Name</th>
                                    <th >Seater</th>
                                    <th >Room Info</th>
                                    <th >E-mail</th>
                                    <th >Time</th>
                                    <th >Contact Number</th>
                                    <th >Guardian no</th>
                                    <th >Address</th>
                                    <th >Guardian Address</th>
                                    <th >Gender</th>
                                    <th colspan="2" >Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                  include './config.php';
                                  $selectquery="SELECT * FROM registerstudentbyadmin_db";
                                  $query=mysqli_query($linkDB,$selectquery);
                                 $nums=mysqli_num_rows($query);

                                 while($res=mysqli_fetch_array($query)){
                                    ?>
                                   


                                    <tr>
                                    <td><?php echo $res['Serial_N0']; ?></td>
                                    <td width="60"><?php echo $res['Reg_no']; ?></td>
                                    <td width="100"><?php echo $res['Full_Name']; ?></td>
                                    <td><?php echo $res['Seater']; ?></td>
                                    <td><?php echo $res['Room_Number']; ?></td>
                                    <td width="150"><?php echo $res['Email']; ?></td>
                                    <td width="100"><?php echo $res['Date']; ?></td>
                                    <td><?php echo $res['Gender']; ?></td>
                                    <td width="100"><?php echo $res['Contact_num']; ?></td>
                                    <td width="100"><?php echo $res['Guardian_Num']; ?></td>
                                    <td width="80"><?php echo $res['Complete_Address']; ?></td>
                                    <td width="80"><?php echo $res['Guardian_Address']; ?></td>
                                    
                                    <td><a href="./Admin_update.php?Id=<?php echo $res['Serial_N0']?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a></td>

                                    <td><a href="./delete.php?Id=<?php echo $res['Serial_N0'] ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-ban" aria-hidden="true" onclick='return checkdelete()'></i></a></td>
                                </tr>
                                <?php
                                 }
                                 
                                 

                                 ?>
                                
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="text-center">
 <a href="./admin_Index.php"> <button type="button" class="btn btn-primary ">Back</button></a>
</div>
   
 
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>
<script src="main.js"></script>
</body>
</html>

<script>
    function checkdelete(){
        return confirm('Are You Sure Want to Delete Data?');

    }
</script>

