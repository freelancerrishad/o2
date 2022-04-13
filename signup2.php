<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $p_num = $_POST['p_num'];
    $gender = $_POST['gender'];
    
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];

    if($password == $cpassword){
        $sql2 = "SELECT * FROM user WHERE email = '$email'";
        $result1 = mysqli_query($con, $sql2);
        $num1 = mysqli_num_rows($result1);
        
        
        if ($num1 == 0) {
        $sql = "INSERT INTO `user` (`email`, `name`, `address`, `p_number`, `password`, `role`, `premium`, `gender`)
         VALUES ('$email', '$name', '$add', '$p_num', '$password', 'user', 'not premium', '$gender');";
            $result = mysqli_query($con, $sql);
          
            header("Location:signup.php");
            exit();
        }
        else{
           
        header("Location:signup.php");
         exit();   
        }
             
    }
    
        
        header("Location:signup.php");
         exit(); 
    
}
?>