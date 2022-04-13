<?php
    include '_dbconnect.php';
    session_start();
        $name = $_POST['name'];
        $image = $_POST['image'];
        $location = $_POST['location'];
        $time = $_POST['time'];
        $description = $_POST['description'];
    
?>  
