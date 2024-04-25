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

<h2>ALL DONORS</h2>
<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Blood_Group</th>
      <th>Contact_Number</th>
      <th>Email</th>
      <th>Area</th>
      <th>City</th>
      <th>Last_Donated_Date</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  </thead>


  <tbody>
    <?php
    $mail= $_SESSION['email'];
    $pass= $_SESSION['pass'];

    $query = "SELECT * FROM `donor_info` WHERE `Email` = '$mail' and `Password` = '$pass'"; 

    $result = mysqli_query($connection, $query);

    
    if (!$result) {
      echo "Error retrieving donor data: " . mysqli_error($connection);
    } else {
    
      while ($row = mysqli_fetch_assoc($result)) {
        $escapedName = htmlspecialchars($row["Name"]);
        $escapedBlood_Group = htmlspecialchars($row["Blood_Group"]);
        $escapedContact_Number = htmlspecialchars($row["Contact_Number"]);
        $escapedEmail = htmlspecialchars($row["Email"]);
        $escapedArea = htmlspecialchars($row["Area"]);
        $escapedCity = htmlspecialchars($row["City"]); 
        $escapedLast_Donated_Date = htmlspecialchars($row["Last_Donated_Date"]);
        ?>
        <tr>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo $escapedName;?></td>  
          <td><?php echo $escapedBlood_Group;?></td>
          <td><?php echo $escapedContact_Number;?></td>
          <td><?php echo $escapedEmail;?></td>
          <td><?php echo $escapedArea;?></td>
          <td><?php echo $escapedCity;?></td>
          <td><?php echo $escapedLast_Donated_Date;?></td>     
          
          <td><a href="update_page_1.php?id=<?php echo $row["id"] ;?>" class="btn btn-success">Update</a></td>
          <td><a href="delete_page_1.php?id=<?php echo $row["id"] ; ?>" class="btn btn-danger">Delete</a></td>
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
if(isset($_GET["update_msg"])) {
  echo"<h6>".$_GET['update_msg']."</h6>";
}
?>
<?php
if(isset($_GET["delete_msg"])) {
  echo"<h6>".$_GET['delete_msg']."</h6>";
}
?>
<?php
include('footer.php');
?>