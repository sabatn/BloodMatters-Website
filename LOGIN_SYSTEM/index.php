<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
              background-image: url("images1.png");
              background-repeat: no-repeat;
              background-position: right bottom;
              background-attachment: fixed;
              background-size: 400px 400px;
            }
        </style>
        <meta charset="UTF-8">
        <title> BLOOD MATTERS </title>
        <link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <h1> ONCE A BLOOD DONOR, ALWAYS A LIFESAVER </h1>
        <br>
        <div class="container">
        <form class="form" action="login_process.php" method="post">

            <label for="users"><b>Type of USERS:</b></label>
            <select id="users" name="users">
                <option value="admin">ADMIN</option>
                <option value="donor">DONOR</option>
                <option value="receiver">RECEIVER</option>
                
                <option value="blood_bank">BLOOD BANK</option>
            </select> 
            </br>
            </br>
       
        
        
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="text" name="email" class="form-control">
            </div>
            </br> 
            <div class="form-group">
                <label for="pass"><b>Password</b></label>
                <input type="password" name="pass" class="form-control">
            </div>
            </br>
            <div class="form-group">
                <input type="SUBMIT" name="login" value="Login" class="btn btn-success" >
            </div>
            
            
        </form>
        </div><br>
        <div class="container">
        <form class="form" action="login_process.php" method="post">
            <div class="form-group">
                <input type="SUBMIT" name="create_your_account" value="CREATE YOUR ACCOUNT" class="btn btn-success" >
            </div>
        </form>
        </div><br>
        <div class="container">
        <form class="form" action="login_process.php" method="post">
            <div class="form-group">
                <input type="SUBMIT" name="search_donor" value="SEARCH DONOR" class="btn btn-success" >
            </div>
        </form>
        </div><br>
        <div class="container">
        <form class="form" action="login_process.php" method="post">
            <div class="form-group">
                <input type="SUBMIT" name="search_receiver" value="SEARCH RECEIVER" class="btn btn-success" >
            </div>
        </form>
        </div><br>
        <div class="container">
        <form class="form" action="login_process.php" method="post">
            <div class="form-group">
                <input type="SUBMIT" name="blood_bank" value="BLOOD BANK" class="btn btn-success" >
            </div>
        </form>
        </div>

    <body>

        
        
    </body>
</html>