<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from `students` where `id` ='$id'";
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
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];

        $query= " update `students` set `fname` = '$fname', `lname` = '$lname', `age` = '$age' where `id`= '$idnew'";
        $result= mysqli_query($connection, $query);

        if (!$result){
         die("Connection no".mysqli_error());
        }
        else{
            header('location:home.php?update_msg=Updated');
        }


    }
?>    

<form action="updatepage1.php?id_new=<?php echo $id; ?>" method="post">                  
            <div class="form-group">
                <label for="fname"> First Name </label>
                <input type= "text" name="fname" class="form-control" value="<?php echo  $row['fname'] ?>">
            </div>  
            <div class="form-group">
                <label for="lname"> Last Name </label>
                <input type= "text" name="lname" class="form-control" value="<?php echo  $row['lname'] ?>">
            </div> 
            <div class="form-group">
                <label for="age"> ADdress </label>
                <input type= "text" name="age" class="form-control" value="<?php echo  $row['age'] ?>">
        </div> 
        <input type="submit" class="btn btn-success" name="updatepeep" value= "Ipdate">
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