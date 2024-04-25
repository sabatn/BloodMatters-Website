<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>search_page</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
       
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <h1>Blood Donation System</h1>

    
    <form method="get" action="search.php">
        <label for="search_query">Search:</label>
      
        <select name="filter">
            <option value="blood_group">Blood Group</option>
            
        </select>
        <input type="submit" value="Search">
    </form>

    <?php
   

    if (isset($_GET['search_query']) && isset($_GET['filter'])) {
        $search_query = $connection->escape_string($_GET['search_query']);
        $filter = $_GET['filter'];

        
        $sql = "SELECT id, Name, Blood_Group, Contact_Number, Email, Area, City, Last_Donated_Date FROM donor_info WHERE $filter LIKE '%$search_query%'";
        $query = $connection->query($sql);

        
        echo "<table>";
        echo "<tr><th>Donor_ID</th><th>Name</th><th>Blood Group</th><th>Contact Number</th><th>Email</th><th>Area</th><th>City</th><th>Last Donated Date</th></tr>";
        while ($row = $query->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Blood_Group'] . "</td>";
            echo "<td>" . $row['Contact_Number'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Area'] . "</td>";
            echo "<td>" . $row['City'] . "</td>";
            echo "<td>" . $row['Last_Donated_Date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    ?>
   

</body>

</html>