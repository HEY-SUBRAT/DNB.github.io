<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "Insert";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
//    echo "Connection successful";
return 0;
}
else{
    echo "NO connection found";
}

?>