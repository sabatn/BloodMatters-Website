<?php
include 'dbcon.php';
if(isset($_POST['add'])){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];

if ($fname== empty($fname)){
    header("location: home.php?message=YOu need to fill the fname!");
}
else{
    $query = "insert into `donor`(`id`,`fname`,`lname`,`address`) values('$id','$fname','$lname','$address')";
    $result = mysqli_query($connection,$query);
    if(!$result) {
        die("Query no".mysqli_error());
    }    
    else{
        header("location: home.php?message=good");
        
    }
}



}

?>