<?php
include("header.php");
include("dbcon.php");

if (isset($_GET["id"])) {
    $Donor_ID= $_GET["id"];
    $query = "SELECT * FROM donor_info WHERE id='$Donor_ID'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "Error retrieving donor data: " . mysqli_error($connection);
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $escapedName = htmlspecialchars($row["Name"]);
            $escapedBlood_Group = htmlspecialchars($row["Blood_Group"]);
            $escapedContact_Number = htmlspecialchars($row["Contact_Number"]);
            $escapedEmail = htmlspecialchars($row["Email"]);
            $escapedArea = htmlspecialchars($row["Area"]);
            $escapedCity = htmlspecialchars($row["City"]); 
            $escapedLast_Donated_Date = htmlspecialchars($row["Last_Donated_Date"]);
            ?>
            <!-- <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $escapedName; ?></td>
                <td><?php echo $escapedBlood_Group; ?></td>
                <td><?php echo $escapedContact_Number; ?></td>
                <td><?php echo $escapedEmail; ?></td>
                <td><?php echo $escapedArea; ?></td>
                <td><?php echo $escapedCity; ?></td>
                <td><?php echo $escapedLast_Donated_Date; ?></td>   
            </tr> -->
            <?php
        } else {
            echo "No data found for the specified Id.";
        }
        mysqli_free_result($result);
    }
}
if (isset($_POST['update_donors'])) {
    $Donor_ID = $_POST['id'];
    $Name = $_POST['Name'];
    $Blood_Group= $_POST['Blood_Group'];
    $Contact_Number= $_POST['Contact_Number'];
    $Email = $_POST['Email'];
    $Area = $_POST['Area'];
    $City = $_POST['City'];
    $Last_Donated_Date= $_POST['Last_Donated_Date'];
    $query = "UPDATE donor_info SET Name='$Name',Blood_Group='$Blood_Group',Contact_Number='$Contact_Number',Email='$Email',Area='$Area', City='$City',Last_Donated_Date='$Last_Donated_Date' WHERE id='$Donor_ID'"; // Removed unnecessary Idnew
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
        <label for="id">id</label>
        <input type="text" name="id" class="form-control" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
    </div>

    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" value="<?php echo isset($row['Name']) ? $row['Name'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Blood_Group">Blood_Group</label>
        <input type="text" name="Blood_Group" class="form-control" value="<?php echo isset($row['Blood_Group']) ? $row['Blood_Group'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Contact_Number">Contact_Number</label>
        <input type="text" name="Contact_Number" class="form-control" value="<?php echo isset($row['Contact_Number']) ? $row['Contact_Number'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="Email" class="form-control" value="<?php echo isset($row['Email']) ? $row['Email'] : ''; ?>">
    </div>
    <!-- <div class="form-group">
        <label for="Medical_History">Medical_History</label>
        <input type="text" name="Medical_History" class="form-control" value="<?php echo isset($row['Medical_History']) ? $row['Medical_History'] : ''; ?>">
    </div> -->
    <div class="form-group">
        <label for="Area">Area</label>
        <input type="text" name="Area" class="form-control" value="<?php echo isset($row['Area']) ? $row['Area'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="City">City</label>
        <input type="text" name="City" class="form-control" value="<?php echo isset($row['City']) ? $row['City'] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="Last_Donated_Date">Last_Donated_Date</label>
        <input type="text" name="Last_Donated_Date" class="form-control" value="<?php echo isset($row['Last_Donated_Date']) ? $row['Last_Donated_Date'] : ''; ?>">
    </div>
    <input type="submit" name="update_donors" class="btn btn-success" value="UPDATE">
</form>

<?php include("footer.php"); ?>
