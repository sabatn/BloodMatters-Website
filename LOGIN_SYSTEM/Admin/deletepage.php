<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>
<?php 
   if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query= "delete from `donor` where `id` = '$id'";
    $result = mysqli_query($connection, $query);
    if (!$result){
     die("Connection no".mysqli_error());
    }
    else{
     header('location:home.php?delete_msg=deleted');
    }
}
?>   
<h2> hi </h2>