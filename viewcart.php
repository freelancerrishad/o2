<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
include '_dbconnect.php';
$q3 =  "SELECT * FROM `cart` WHERE `email`='$email';";
$run = mysqli_query($con, $q3);
$html = "";
if(mysqli_num_rows($run)>0){
          while($row = $run->fetch_assoc()){
              $html = $html. "<tr><td>" . $row["name"] . "</td><td>" . $row["details"] . "</td><td>" . '<h4 class="taka">৳</h4>'. $row["price"] . "</td><td>". '<a class="btn btn-lg btn-block btn btn-outline-danger" href="delete_cart.php?id=' . $row["id"] .'"><i class="fa-solid fa-bag-shopping"></i> Delete from Cart</a>' ."</td></tr>";
             
          }
        
      }
?>