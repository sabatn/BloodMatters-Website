

<?php
include('header.php');
include('dbcon.php');

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<?php 
session_start();


?>



<br>
<h2>YOUR INFORMATION GOES HERE:</h2><br>
<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      
      <th>Blood Group</th>
      <th>Blood will be needed by</th>
      <th>Contact Number</th>
      <th>Area</th>
      <th>City</th>
      <th>Update</th>
      <th>Delete</th>
      <!-- <th>Sort</th> -->
      
    </tr>
  </thead>
  <tbody>
    
    <?php
    $mail= $_SESSION['email'];
    $pass= $_SESSION['pass'];

    $query = "SELECT * FROM `receiver` WHERE `Email` = '$mail' and `Password` = '$pass'"; 

    $result = mysqli_query($connection, $query);

    if (!$result) {
      echo "Error retrieving donor data: " . mysqli_error($connection);
    } else {
      
      while ($row = mysqli_fetch_assoc($result)) {
        $escapedName = htmlspecialchars($row["Name"]); 
        $escapedEmail = htmlspecialchars($row["Email"]); 
        $escapedBlood_Group = htmlspecialchars($row["Blood_Group"]); 
        $escapedNeed_At = htmlspecialchars($row["Need_At"]); 
        $escapedContact_Number = htmlspecialchars($row["Contact_Number"]); 
        $escapedArea = htmlspecialchars($row["Area"]); 
        $escapedCity = htmlspecialchars($row["City"]); 
        ?>
        <tr>
          <td><?php echo $row["ID"]; ?></td>
          <td><?php echo $escapedName; ?></td>
          <td><?php echo $escapedEmail; ?></td>
          
          <td><?php echo $escapedBlood_Group; ?></td>
          <td><?php echo $escapedNeed_At; ?></td>
          <td><?php echo $escapedContact_Number; ?></td>
          <td><?php echo $escapedArea; ?></td>
          <td><?php echo $escapedCity; ?></td>
          <td><a href="update_page_1.php?ID=<?php echo $row["ID"]; ?>" class="btn btn-success">Update</a></td>
          <td><a href="delete_page.php?ID=<?php echo $row["ID"]; ?>"class="btn btn-danger">Delete</a></td>
          <!-- <td><a href="sort_page.php?ID=<?php echo $row["ID"]; ?>" class="btn btn-success">Sort</a></td> -->
   
        </tr>
        <?php
      }
      mysqli_free_result($result); 
    }

    mysqli_close($connection); 
    ?>
  </tbody>
</table>
<div class="container">
        <form class="form" action='http://localhost/LOGIN_SYSTEM/index.php' method="post">
            <div class="form-group">
                <input type="SUBMIT" name="log_out" value="LOG OUT" class="btn btn-success" >
            </div>
        </form>
</div>
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
  <?php
   if (isset($_GET['sort_msg'])){
    echo"<h6>".$_GET['sort_msg']."</h6>";
   }
   
?>

<?php
include('footer.php');
?>