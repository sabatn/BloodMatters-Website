<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>
<?php 
   if(isset($_GET['ID'])){
    $ID= $_GET['ID'];
    $query= "delete from `receiver` where `ID` = '$ID'";
    $result = mysqli_query($connection, $query);
    if (!$result){
     die("Connection no".mysqli_error());
    }
    else{
     header('location:home.php?delete_msg=deletedreceiver');
    }
}
?>  