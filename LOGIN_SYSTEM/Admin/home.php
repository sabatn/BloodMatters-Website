
<! DOCTYPE html>

<html Lang="en">
<head>
        <meta charset="UTF-8">
        <title>ADMIN PAGE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
table, th, td {
  border: 5px solid black;
  border-radius: 10px;
  
}

tr:nth-child(even) {
  background-color: rgba(400, 400, 300, 0.4);
}

th:nth-child(even),td:nth-child(odd) {
  background-color: rgba(150, 300, 300, 0.4);
}
</style>        


</head>       
<body>

<div
  class="bg-image"
  style="
    background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20220303/pngtree-admin-token-inspector-support-text-photo-image_3540731.jpg');
    height: 44vh;
    background-repeat: no-repeat;
    background-position-x: center;
    background-position-y: center;
    background-size: auto;
  "
></div>


    <h1 id="maintitle"> ADMIN PAGE</h1>
   
 <?php include 'dbcon.php';?>  
 

 


      




<div class="box2">
    <h2> Donor </h2>

</div>

<table class="table table-hover table-bordered table-stripped  " >
        <thead class="thead-dark">
            <tr>
                <th>Donor_ID</th>
                <th>Name</th>
                <th>Blood_Group</th>
                <th>Contact_Number</th>
                <th>Email</th> 
                <th>Area</th>
                <th>City</th>
                <th>Last_Donated_Date</th>
                <th>Update</th>
                <th>Delete</th>
                

               
                
            </tr> 
        </thead>
        <tbody>

        <?php
          $query = "select * from `donor_info`";
          $result= mysqli_query($connection, $query);

          if (!$result){
            die("Connection no".mysqli_error());
          }
          else{
            while($row= mysqli_fetch_assoc($result)){
                ?>
          <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['Name']; ?> </td>
            <td> <?php echo $row['Blood_Group']; ?> </td>
            <td> <?php echo $row['Contact_Number']; ?> </td>
            <td> <?php echo $row['Email']; ?> </td> 
            <td> <?php echo $row['Area']; ?> </td>
            <td> <?php echo $row['City']; ?> </td>
            <td> <?php echo $row['Last_Donated_Date']; ?> </td> 
            <td width= "1%"><a href="updatedonor.php?id=<?php echo $row['id']; ?> " class="btn btn-success"> Update</a></td>
            <td width= "1%"><a href="deletedonor.php?id=<?php echo $row['id']; ?> " class="btn btn-danger"> Delete</a></td>
                
                <?php

            }
          }    
        ?> 
        
        </tbody>
    </table>  
<br><br><br><br>
<div class="box2">
    <h2> Receiver </h2>

</div>

<table class="table table-hover table-bordered table-stripped  " >
        <thead class="thead-dark">
            <tr>
                <th>R_ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Blood_Group</th>               
                <th>Area</th>
                <th>City</th>
                <th>Need_At</th>
                <th>Contact_Number</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
               
            </tr> 
        </thead>
        <tbody>

        <?php
          $query = "select * from `receiver`";
          $result= mysqli_query($connection, $query);

          if (!$result){
            die("Connection no".mysqli_error());
          }
          else{
            while($row= mysqli_fetch_assoc($result)){
                ?>
          <tr>
            <td> <?php echo $row['ID']; ?> </td>
            <td> <?php echo $row['Name']; ?> </td>
            <td> <?php echo $row['Email']; ?> </td>
            <td> <?php echo $row['Blood_Group']; ?> </td>
            <td> <?php echo $row['Area']; ?> </td>
            <td> <?php echo $row['City']; ?> </td>
            <td> <?php echo $row['Need_At']; ?> </td>
            <td> <?php echo $row['Contact_Number']; ?> </td>
            <td> <?php echo $row['Password']; ?> </td>
            <td width= "1%" ><a href="updatereceiver.php?ID=<?php echo $row['ID']; ?> " class="btn btn-success"> Update</a></td>
            <td width= "1%"><a href="deletereceiver.php?ID=<?php echo $row['ID']; ?> " class="btn btn-danger"> Delete</a></td>
                
                <?php

            }
          }    
        ?> 
        
        </tbody>
    </table>  

    <br><br><br><br>
<div class="box2">
    <h2> Blood Bank </h2>

</div>

<table class="table table-hover table-bordered table-stripped  " >
        <thead class="thead-dark">
            <tr>
                <th>Type_ID</th>
               
                <th>Blood_Type</th>               
                <th>Availability</th>
                <th>Location</th>
                <th>Contact_No</th>
                <th>Expiry_Date</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
               
            </tr> 
        </thead>
        <tbody>

        <?php
          $query = "select * from `blood bank`";
          $result= mysqli_query($connection, $query);

          if (!$result){
            die("Connection no".mysqli_error());
          }
          else{
            while($row= mysqli_fetch_assoc($result)){
                ?>
          <tr>
            <td> <?php echo $row['TYPE_ID']; ?> </td>
            <td> <?php echo $row['Blood_Type']; ?> </td>
            <td> <?php echo $row['Availability']; ?> </td>
            <td> <?php echo $row['Location']; ?> </td>
            <td> <?php echo $row['Contact_No']; ?> </td>
            <td> <?php echo $row['Expiry_Date']; ?> </td>
            <td> <?php echo $row['Email']; ?> </td>
            <td width= "1%" ><a href="updatebank.php?Type_ID=<?php echo $row['TYPE_ID']; ?> " class="btn btn-success"> Update</a></td>
            <td width= "1%"><a href="deletebank.php?Type_ID=<?php echo $row['TYPE_ID']; ?> " class="btn btn-danger"> Delete</a></td>
                
                <?php

            }
          }    
        ?> 
        
        </tbody>
    </table>  

<div class="container">
        <form class="form" action='http://localhost/LOGIN_SYSTEM/index.php' method="post">
            <div class="form-group">
                <input type="SUBMIT" name="log_out" value="LOG OUT" class="btn btn-success" >
            </div>
        </form>
</div>

<div
  class="bg-image"
  style="
    background-image: url('https://img.freepik.com/premium-vector/blood-donor-day-background-with-phrase_23-2147558975.jpg?w=740');
    height: 70vh;
    background-repeat: no-repeat;
    background-size: 1900px 700px;
    background-position-x: center;
  "
>
</div>

<style>
body {
  background-color: #FAEBD7;
}
</style>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>              
</body>
</html>  
    



