<?php include("connection.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CREATE YOUR ACCOUNT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <div id="form">
        <h1 id="heading"> CREATE YOUR ACCOUNT</h1><br>
        <form name= "form" action="signup.php" method="POST">
            <label for="users"><b>Type of USERS:</b></label>
            <select id="users" name="users">
                <option value="donor">DONOR</option>
                <option value="receiver">RECEIVER</option>
                
            </select><br><br>
            
        
            <i class="fa-solid fa-user"></i> 
            <input type="text" id="uname" name= "uname" placeholder= "Enter USERNAME" required><br><br>
            <i class="fa-solid fa-droplet"></i>
            <input type="text" id="blood" name= "blood" placeholder= "Enter Your Blood-Type" required><br><br>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" id="email" name= "email" placeholder= "Enter EMAIL" required><br><br>
            <i class="fa-solid fa-phone"></i>
            <input type="number" id="phone" name= "phone" placeholder= "Enter Phone Number" required><br><br>
            <b>Enter Last Donated Time/When Blood Need At</b><br>
            <i class="fa-solid fa-calendar-days"></i>
            <input type="date" id="date" name= "date" placeholder= "Enter last donated time/when blood need at" required><br><br>
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" id="area" name= "area" placeholder= "Enter Your Current Area" required><br><br>
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" id="city" name= "city" placeholder= "Enter Your Current City" required><br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="pass" name= "pass" placeholder= "Enter PASSWORD" required><br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="cpass" name= "cpass" placeholder= "Re-type PASSWORD " required><br><br>
            <input type="submit" id="btn" name="submit" value="SUBMIT">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html