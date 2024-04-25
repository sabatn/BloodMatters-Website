<?php
    
    include("connection.php");
    if(isset($_POST["submit"])){
        $type= $_POST['users'];
        $name= $_POST['uname'];
        $blood= $_POST['blood'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $area= $_POST['area'];
        $city= $_POST['city'];
        $pass= $_POST['pass'];
        $cpass= $_POST['cpass'];
        $date= $_POST['date'];
    }
    
    if($type == 'donor'){
        $sql= "SELECT * FROM donor_info WHERE Email = '$email' and Password = '$pass' ";
        $result= mysqli_query($con, $sql);
        $count= mysqli_num_rows($result);

        if($count== 0){
          if($pass==$cpass){
            
            $sqli= "INSERT INTO donor_info( Name, Email, Blood_Group, Area, City, Last_Donated_Date , Contact_Number, Password ) VALUES('$name', '$email','$blood','$area','$city','$date','$phone','$pass')";
            $result= mysqli_query($con, $sqli);
            if($result){
                header("Location: index.php");
            }

          } 
          else{
                  
            echo '<script>
              window.location.href="create.php";
              alert("PASSWORD DOES NOT MATCH");
              </script>';
          }


        }
        else{
          echo '<script>
               window.location.href="create.php";
               alert("USER ALREADY EXIST");
               </script>';
        }
    }
    if($type == 'receiver'){
            $sql= "SELECT * FROM receiver WHERE Email = '$email'";
            $result= mysqli_query($con, $sql);
            $count= mysqli_num_rows($result);
    
            if($count== 0){
              if($pass==$cpass){
                
                $sqli= "INSERT INTO receiver( `Name`, `Email`, `Blood_Group`, `Area`, `City`, `Need_At`, `Contact_Number`, `Password` ) VALUES('$name', '$email','$blood','$area','$city','$date','$phone','$pass')";
                $result= mysqli_query($con, $sqli);
                if($result){
                    header("Location: index.php");
                }
              }
              else{
                  
                 echo '<script>
                   window.location.href="create.php";
                   alert("PASSWORD DOES NOT MATCH");
                   </script>';
              }
            
    
    
            }
            else{
              echo '<script>
                   window.location.href="create.php";
                   alert("USER ALREADY EXIST");
                   </script>';
            }   
    }
    
    
    
    
    
   
    


?>