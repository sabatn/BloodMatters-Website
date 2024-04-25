<?php
include('dbcon.php'); 

if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($connection, $_GET['ID']); 

    $query = "DELETE FROM `receiver` WHERE `ID` = " . $ID; 

    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($connection);
    } else {
        header("location:index.php?delete_msg=You have deleted the record.");
    }
}
?>