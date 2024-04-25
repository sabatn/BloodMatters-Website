<?php
include("header.php");
include("dbcon.php");

if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];

    $query = "SELECT * FROM receiver WHERE ID='$ID'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Error retrieving receiver data: " . mysqli_error($connection);
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $escapedName = htmlspecialchars($row["Name"]);
            $escapedEmail = htmlspecialchars($row["Email"]);
            $escapedNeed_At = htmlspecialchars($row["Need_At"]);
            $escapedContact_Number = htmlspecialchars($row["Contact_Number"]);
            $escapedArea = htmlspecialchars($row["Area"]);
            $escapedCity = htmlspecialchars($row["City"]);


            ?>
            <tr>
                
            </tr>
            <?php
        } else {
            echo "No data found for the specified ID.";
        }
        mysqli_free_result($result);
    }
}

if (isset($_POST['update_receivers'])) {
    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    
    $Blood_Group = $_POST['Blood_Group'];
    $Need_At = $_POST['Need_At'];
    $Contact_Number = $_POST['Contact_Number'];
    $Area = $_POST['Area'];
    $City = $_POST['City'];
    $query = "UPDATE receiver SET Name='$Name', Email='$Email', Blood_Group='$Blood_Group',Need_At= '$Need_At', Contact_Number='$Contact_Number', Area='$Area', City='$City' WHERE ID=$ID"; 
    $result = mysqli_query($connection, $query);
    if ($result) {
        header('location:index.php?update_msg=You have successfully updated the data.');
        exit; 
    } else {
        echo "Error updating data: " . mysqli_error($connection);
    }
}
?>

<form method="post">
    <div class="form-group">
        <label for="ID">R_ID</label>
        <input type="text" name="ID" class="form-control" value="<?php echo isset($row['ID']) ? $row['ID'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" value="<?php echo isset($row['Name']) ? $row['Name'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="Email" class="form-control" value="<?php echo isset($row['Email']) ? $row['Email'] : ''; ?>">
    </div>

    
    <div class="form-group">
        <label for="Blood_Group">Blood_Group</label>
        <input type="text" name="Blood_Group" class="form-control" value="<?php echo isset($row['Blood_Group']) ? $row['Blood_Group'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Need_At">Need_At</label>
        <input type="text" name="Need_At" class="form-control" value="<?php echo isset($row['Need_At']) ? $row['Need_At'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Contact_Number">Contact_Number</label>
        <input type="text" name="Contact_Number" class="form-control" value="<?php echo isset($row['Contact_Number']) ? $row['Contact_Number'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Area">Area</label>
        <input type="text" name="Area" class="form-control" value="<?php echo isset($row['Area']) ? $row['Area'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="City">City</label>
        <input type="text" name="City" class="form-control" value="<?php echo isset($row['City']) ? $row['City'] : ''; ?>">
    </div>
    <input type="submit" name="update_receivers" class="btn btn-success" value="UPDATE">
</form>

<?php include("footer.php"); ?>