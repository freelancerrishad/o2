<?php
    include '_dbconnect.php';

    session_start();
    
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
?>