<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $id = $_SESSION['id'];
    

    $sql2 = " SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result1 = mysqli_query($con, $sql2);
    $num1 = mysqli_num_rows($result1);

   

    if ($num1 == 1) {
        
        while ($row = $result1->fetch_assoc()) {
            $role = $row["role"];
            if($role == 'user'){
               
          
                $_SESSION['admin'] = $email;
                 header("Location:adminhome.php");
            
        
    }
    else{
       
         header("Location:login.php?id=home");
          exit(); 
    }
}