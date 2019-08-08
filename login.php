<?php
define(include,"dbf.php");
$username = $_POST['UN'];
$password = $_POST['PW'];
$sql = "SELECT * FROM login where username = '$username'";
$result = $conn->query($sql);

?>