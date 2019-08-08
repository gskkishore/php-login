<?php
    define("SERVER_NAME","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_NAME","friends");
    $conn = new mysqli(SERVER_NAME, DB_NAME, DB_USER, DB_PASS);
    if($conn->connect_error)
    {
       die("Connectio error:" $conn->cennect_error);
    }
?>
