<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
include '_dbconnect.php';
$q =  "SELECT name,designation,specialized,whtsapp_no,email  FROM consult";
$run = mysqli_query($con, $q);
$html = "";
if(mysqli_num_rows($run)>0){
    while($row = $run->fetch_assoc()){
        $html = $html. "<tr><td>" . $row["name"] . "</td><td>" . $row["designation"] . "</td><td>" . $row["specialized"] . "</td><td>". $row["whtsapp_no"] . "</td><td>". $row["email"] . "</td><td>". '<a class="btn btn-lg btn-block btn btn-success" href=""><i class="fa-brands fa-whatsapp"></i> Contact</a>' ."</td></tr>";
       
    }
  
  }
?>