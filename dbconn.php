<?php

$sname= "localhost";
$uname= "id20189155_databaseclums";
$password = "UnitJaringanKomuniti@2022";
$db_name = "id20189155_clums";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!"; 
}

date_default_timezone_set('Asia/Kuala_Lumpur');
?>