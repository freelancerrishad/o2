<?php
    include '_dbconnect.php';

    session_start();
    
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    
    $sql = "DELETE FROM event WHERE id = $id";
    
    $result = mysqli_query($con, $sql);
    
    
    $con->close();
header("Location: /Project_O2/project_O2/event_list.php");
exit();
?>