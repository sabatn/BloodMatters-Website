<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Sort Receiver</h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                    <select name="sort_numeric" class="form-control">
                                            <option value="">--Sort By--</option>
                                            <option value="oldest-newest" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "oldest-newest") { echo "selected"; } ?> > Oldest - Newest</option>
                                            <option value="newest-oldest" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "newest-oldest") { echo "selected"; } ?> > Newest - Oldest</option>
                                        </select>
                                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>R_ID</th>
                                    <th>Blood_Group</th>
                                    <th>Need_At</th>
                                    <th>Contact_Number</th>
                                    <th>Area</th>
                                    <th>City</th>


                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","blood_donation");

                                $sort_option = "";
                                if(isset($_GET['sort_numeric']))
                                {
                                    if($_GET['sort_numeric'] == "oldest-newest"){
                                        $sort_option = "ASC";
                                    }elseif($_GET['sort_numeric'] == "newest-oldest"){
                                        $sort_option = "DESC";
                                    }
                                }
                                
                                $query = "SELECT * FROM receiver ORDER BY Need_At $sort_option";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $row)
                                    {
                                        ?>
                                            <tr>
                                                <td><?= $row['Name']; ?></td>
                                                <td><?= $row['Email']; ?></td>
                                                <td><?= $row['ID']; ?></td>
                                                <td><?= $row['Blood_Group']; ?></td>
                                                <td><?= $row['Need_At']; ?></td>
                                                <td><?= $row['Contact_Number']; ?></td>
                                                <td><?= $row['Area']; ?></td>
                                                <td><?= $row['City']; ?></td>
                                                

                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="3">No Record Found</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <form class="form" action="http://localhost/LOGIN_SYSTEM/index.php" method="post">
            <div class="form-group">
                <input type="SUBMIT" name="log_out" value="LOG OUT" class="btn btn-success" >
            </div>
        </form>
    </div>
</body>
</html>