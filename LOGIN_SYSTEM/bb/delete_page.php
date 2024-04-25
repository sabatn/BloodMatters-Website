delete_page.php
<?php
include('dbcon.php'); 

if (isset($_GET['TYPE_ID'])) {
    $TYPE_ID = mysqli_real_escape_string($connection, $_GET['TYPE_ID']); 

    $query = "DELETE FROM `blood bank` WHERE `TYPE_ID` = ".$TYPE_ID; 

    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($connection);
    } else {
        header("location:index.php?delete_msg=You have deleted the record.");
    }
}
?>