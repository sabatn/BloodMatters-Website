<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
if(isset($_GET['TYPE_ID'])){
    $TYPE_ID = $_GET['TYPE_ID'];
    $query = "select * from `blood bank` where `TYPE_ID` ='$TYPE_ID'";
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
         $TYPE_ID=$_POST['TYPE_ID'];
         $Blood_Type=$_POST['Blood_Type'];
         $Availability=$_POST['Availability'];
         $Location=$_POST['Location'];
         $Contact_No=$_POST['Contact_No'];        
         $Email=$_POST['Email'];

         $query= " update `blood bank` set  `Blood_Type`='$Blood_Type', `Availability` = '$Availability', `Location`='$Location',`Contact_No`='$Contact_No',`Expiry_Date`='$Expiry_Date', `Email` = '$Email'  where `TYPE_ID`= '$idnew'";
         $result= mysqli_query($connection, $query);

        if (!$result){
         die("Connection no".mysqli_error());
        }
        else{
            header('location:index.php?update_msg=Updated');
        }


    }
?>    

<form action="update_page_1.php?id_new=<?php echo $TYPE_ID; ?>" method="post">                   
            <div class="form-group">
                <label for="Blood_Type"> Blood_Type </label>
                <input type= "text" name="Blood_Type" class="form-control" value="<?php echo  $row['Blood_Type'] ?>"> 
            </div> 
            <div class="form-group">
                <label for="Availability">Availability </label>
                <input type= "text" name="Availability" class="form-control" value="<?php echo  $row['Availability'] ?>">
            </div>            
            <div class="form-group">
                <label for="Location">Location </label>
                <input type= "text" name="Location" class="form-control" value="<?php echo  $row['Location'] ?>">
            </div> 
            <div class="form-group">
                <label for="Contact_No"> Contact_No </label>
                <input type= "text" name="Contact_No" class="form-control" value="<?php echo  $row['Contact_No'] ?>">
            </div> 
            <div class="form-group">
                <label for="Expiry_Date"> Expiry_Date </label>
                <input type= "text" name="Expiry_Date" class="form-control" value="<?php echo  $row['Expiry_Date'] ?>">
            </div> 
            <div class="form-group">
                <label for="Email"> Email </label>
                <input type= "text" name="Email" class="form-control" value="<?php echo  $row['Email'] ?>">
            </div> 
            
        <input type="submit" class="btn btn-success" name="updatepeep" value= "Update">
</form>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>              
</body>
</html>  