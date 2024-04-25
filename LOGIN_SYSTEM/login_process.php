<?php include("connection.php"); ?>
<?php session_start(); ?>

<?php
   
   if(isset($_POST["login"])){
    $type= $_POST['users'];
    $email= $_POST['email'];
    $password= $_POST['pass'];
  
    
    if($type == 'donor'){
       echo "hi";
       $query= "SELECT * FROM `donor_info` WHERE `Email` = '$email' and `Password` = '$password'";
       $result= mysqli_query($con, $query);
       
      
       if($result){
        $row= mysqli_num_rows($result);
     
         if($row==1){
           $_SESSION['pass'] = $password;
           $_SESSION['email'] = $email;
           header('location: donor/index.php');
         }
         else{
          header('location: other.php');
         }
      }
       else{
            die("Query Failed".mysqli_error($con));
         }
       }
    
    if($type == 'admin'){

      $query= "SELECT * FROM `admin` WHERE `Email` = '$email' and `Password` = '$password' ";
      $result= mysqli_query($con, $query);

      if($result){
        $row= mysqli_num_rows($result);
    
        if($row==1){
         
          $_SESSION['pass'] = $password;
          $_SESSION['email'] = $email;
          header('location: Admin/home.php');
         

        }
        else{
          header('location: other.php');
        }
      }
      else{
        die("Query Failed".mysqli_error($con));
      }
    }
    if($type == 'receiver'){
   
      $query= "SELECT * FROM `receiver` WHERE `Email` = '$email' and `Password` = '$password' ";
      $result= mysqli_query($con, $query);
     
      if($result){
        $row= mysqli_num_rows($result);
    
        if($row==1){
         
          $_SESSION['pass'] = $password;
          $_SESSION['email'] = $email;
          header('location: Receiver/index.php');
         

        }
        else{
          header('location: other.php');
        }
      }
      else{
        die("Query Failed".mysqli_error($con));
      }
    }
    if($type == 'blood_bank'){
          
          $query= "SELECT * FROM `blood bank` WHERE `Email` = '$email' and `Password` = '$password' ";
          $result= mysqli_query($con, $query);
         
          if($result){
            $row= mysqli_num_rows($result);
        
            if($row){
              $_Session['pass'] = $password;
              $_Session['email'] = $email;
              header('location: bb/index.php');
            }
            else{
              header('location: other.php');
            }
          }
          else{
            die("Query Failed".mysqli_error($con));

        
      }
    }
   } 
   if(isset($_POST["create_your_account"])){
      
      header('Location: create.php');
    }
    if(isset($_POST["search_receiver"])){
      
      header('Location: Receiver/sort_page.php');
    }
    if(isset($_POST["blood_bank"])){
      
      header('Location: bb/index2.php');
    }
    if(isset($_POST["try_again"])){
      
      header('Location: index.php');
    }
    
    if(isset($_POST["search_donor"])){
      
      header('Location: donor/index.search.php');
    }
    
   
?>