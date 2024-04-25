 <?php
include('header.php');
include('dbcon.php');

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<h2>Available Blood Types</h2>
<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th>TYPE_ID</th>
      <th>Blood_Type</th>
      <th>Availability</th>
      <th>Location</th>
      <th>Contact_No</th>
      <th>Expiry_Date</th>
      <th>Email</th>
      <th>Update</th>
      <th>Delete</th>

      
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM `blood bank`";


    $result = mysqli_query($connection, $query);

    if (!$result) {
      echo "Error retrieving data: " . mysqli_error($connection);
    } else {
      
      while ($row = mysqli_fetch_assoc($result)) {
        $escapedBlood_Type = htmlspecialchars($row["Blood_Type"]); 
        $escapedAvailability = htmlspecialchars($row["Availability"]); 
        $escapedLocation = htmlspecialchars($row["Location"]); 
        $escapedContact_No = htmlspecialchars($row["Contact_No"]); 
        $escapedExpiry_Date = htmlspecialchars($row["Expiry_Date"]); 
        $escapedEmail = htmlspecialchars($row["Email"]);
        ?>
        <tr>
          <td><?php echo $row["TYPE_ID"]; ?></td>
          <td><?php echo $escapedBlood_Type; ?></td>
          <td><?php echo $escapedAvailability; ?></td>
          <td><?php echo $escapedLocation; ?></td>
          <td><?php echo $escapedContact_No; ?></td>
          <td><?php echo $escapedExpiry_Date; ?></td>
          <td><?php echo $escapedEmail; ?></td>
          <td><a href="update_page_1.php?TYPE_ID=<?php echo $row["TYPE_ID"]; ?>" class="btn btn-success">Update</a></td>
          <td><a href="delete_page.php?TYPE_ID=<?php echo $row["TYPE_ID"]; ?>"class="btn btn-danger">Delete</a></td>
   
        </tr>
        <?php
      }
      mysqli_free_result($result); 
    }

    mysqli_close($connection); 
    ?>
  </tbody>
</table>
  <?php
    if (isset($_GET['update_msg'])){
      echo"<h6>".$_GET['update_msg']."</h6>";
    }
?>
   <?php
   if (isset($_GET['delete_msg'])){
    echo"<h6>".$_GET['delete_msg']."</h6>";
   }
?>
<div class="container">
        <form class="form" action="http://localhost/LOGIN_SYSTEM/index.php" method="post">
            <div class="form-group">
                <input type="SUBMIT" name="log_out" value="LOG OUT" class="btn btn-success" >
            </div>
        </form>
</div>


<?php
include('footer.php');
?>
    