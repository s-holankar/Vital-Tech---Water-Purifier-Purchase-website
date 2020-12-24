<?php

$con = mysqli_connect("sql207.unaux.com", "unaux_27284019", "Adi@2418","unaux_27284019_demo");
$db = mysqli_select_db($con,"demo"); 


 $email = $_POST['email'];  
 $password= $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
        
          
        if($count == 1){  
            echo "<h1><center> Login Successful.</center></h1>";  
        }  
        else{  
            echo "<h1> Login Failed. Invalid email or password.</h1>";  
        } 
              
?>  
