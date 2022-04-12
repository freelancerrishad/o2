<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
    $num= 0 ;
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php'; 
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $feedback= $_POST['feedback'];
?>