<?php
// $server = "localhost:3309";
// $user="root";
// $pass="";
// $database="shoe";
// $conn=mysqli_connect($server,$user,$pass,$database);
// mysqli_query($conn,'set names "utf8"');


$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "shoe";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}


?>




