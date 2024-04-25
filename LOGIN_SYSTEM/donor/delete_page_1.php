<?php
include('dbcon.php'); ?>
<?php
if (isset($_GET['id'])) {
    $ID = mysqli_real_escape_string($connection, $_GET['id']); 

    $query = "DELETE FROM donor_info WHERE id = " . $ID;

    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Error deleting record: " . mysqli_error($connection);
    } else {
        header("location:index.php?delete_msg=You have deleted the record.");
    }
}
?>