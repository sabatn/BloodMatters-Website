<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>
<?php 
   if(isset($_GET['Type_ID'])){
    $Type_ID= $_GET['Type_ID'];
    $query= "delete from `blood bank` where `Type_ID` = '$Type_ID'";
    $result = mysqli_query($connection, $query);
    if (!$result){
     die("Connection no".mysqli_error());
    }
    else{
     header('location:home.php?delete_msg=deletedbank');
    }
}
?> 