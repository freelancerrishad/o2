<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }

  include '_dbconnect.php';
  $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
  $q =  "SELECT `name`,`price`, `description` FROM `package` WHERE id = $id";
        $run = mysqli_query($con, $q);
        if(mysqli_num_rows($run)>0){
            while($row = $run->fetch_assoc()){
               $name=$row["name"];
               $price=$row["price"];
               $details=$row["description"];
               
            }
          
        }

 
?>