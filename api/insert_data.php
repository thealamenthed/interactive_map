<?php
// include('api/list.php');
header('Content-Type: application/json');

$content = json_decode(stripslashes(file_get_contents("php://input")),true);
var_dump($content);
    print_r( json_encode($content) );

    echo( json_encode($content) );

 
?>