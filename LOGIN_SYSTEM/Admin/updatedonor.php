<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from `donor_info` where `id` ='$id'";
    $result= mysqli_query($connection, $query);

    if (!$result){
      die("Connection no".mysqli_error());
    }
    else{
      $row= mysqli_fetch_assoc($result);
      

    
    }         
}
?>

<?php
    if(isset($_POST['updatepeep'])){
        if(isset($_GET['id_new'])){
            $idnew= $_GET['id_new'];
         }    
        $Name=$_POST['Name'];
        $Blood_Group=$_POST['Blood_Group'];
        $Contact_Number=$_POST['Contact_Number'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        $Medical_History=$_POST['Medical_History'];
        $Area=$_POST['Area'];
        $City=$_POST['City'];
        $Last_Donated_Date=$_POST['Last_Donated_Date'];
        
        $query= " update `donor_info` set `Name` = '$Name', `Blood_Group` = '$Blood_Group', `Contact_Number` = '$Contact_Number', `Email`='$Email', `Area`='$Area',`City`='$City',`Last_Donated_Date`='$Last_Donated_Date' where `id`= '$idnew'";
        // $query= " update `donor_info` set `Name` = '$Name', `Blood_Group` = '$Blood_Group', `Contact_Number` = '$Contact_Number' where `id`= '$idnew'";
        $result= mysqli_query($connection, $query);

        if (!$result){
         die("Connection no".mysqli_error());
        }
        else{
            header('location:home.php?update_msg=Updated');
        }


    }
?>    

<form action="updatedonor.php?id_new=<?php echo $id; ?>" method="post">                  
            <div class="form-group">
                <label for="Name">  Name </label>
                <input type= "text" name="Name" class="form-control" value="<?php echo  $row['Name'] ?>">
            </div>  
            <div class="form-group">
                <label for="Blood_Group"> Blood_Group </label>
                <input type= "text" name="Blood_Group" class="form-control" value="<?php echo  $row['Blood_Group'] ?>">
            </div> 
            <div class="form-group">
                <label for="Contact_Number"> Contact_Number </label>
                <input type= "text" name="Contact_Number" class="form-control" value="<?php echo  $row['Contact_Number'] ?>">
            </div> 
            <div class="form-group">
                <label for="Email"> Email </label>
                <input type= "text" name="Email" class="form-control" value="<?php echo  $row['Email'] ?>"> 
            </div> 
            <div class="form-group">
                <label for="Area"> Area </label>
                <input type= "text" name="Area" class="form-control" value="<?php echo  $row['Area'] ?>">
            </div> 
            <div class="form-group">
                <label for="City"> City </label>
                <input type= "text" name="City" class="form-control" value="<?php echo  $row['City'] ?>">
            </div> 
            <div class="form-group">
                <label for="Last_Donated_Date"> Last_Donated_Date </label>
                <input type= "text" name="Last_Donated_Date" class="form-control" value="<?php echo  $row['Last_Donated_Date'] ?>">
            </div> 
            
        <input type="submit" class="btn btn-success" name="updatepeep" value= "Update">
</form>
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